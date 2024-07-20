<?php

// app/Http/Controllers/RespondentController.php
namespace App\Http\Controllers;

use App\Models\Respondent;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RespondentController extends Controller
{
    public function import(Request $request)
    {
        $filePath = database_path('seeders/data.xlsx');

        // Load the Excel file
        $data = Excel::toArray([], $filePath)[0];

        // Skip the header row
        $header = array_shift($data);
        $header2 = array_shift($data);

        // Assuming the data is in the second column and needs to be mapped to gender
        foreach ($data as $row) {

            // echo ($row[6]);
            Respondent::create([
                'gender' => $row[1] == 1 ? 'Male' : 'Female',
                'account_holder' => isset($row[2]) ? ($row[2] == 1 ? 'Yes' : 'No') : 'No', // Defaulting to 'No' if not set
                'existing_customers' => $row[3],
                'widrawing_money' => $row[5] == 1 ? 'Yes' : 'null',
                'deposit' => $row[7] == 3 ? 'Yes' : 'null',
                'closing_acc' => $row[9] == 5 ? 'Yes' : 'null',
                'transfering_fund' => $row[10] == 6 ? 'Yes' : 'null',
                'loan_service' => $row[11] == 7 ? 'Yes' : 'null',
                'credit_card' => $row[14] == 10 ? 'Yes' : 'null',
                'city' => $row[44] == 1 ? 'Karachi' : ($row[44] == 2 ? 'Lahore' : 'Islamabad'),
            ]);
        }
        return view('success_upload');
    }


    public function get_gender()
    {
        $respondents = Respondent::all();
        return response()->json($respondents);
    }

    public function get_data_by_gender($gender)
    {
        $respondents = Respondent::where('gender', $gender)->get();
        return response()->json($respondents);
    }

    public function get_data_by_account_holder($account_holder)
    {
        $respondents = Respondent::where('account_holder', $account_holder)->get();
        return response()->json($respondents);
    }
    public function get_data_by_city($city)
    {
        $respondents = Respondent::where('city', $city)->get();
        return response()->json($respondents);
    }                   
}
