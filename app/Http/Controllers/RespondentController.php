<?php

namespace App\Http\Controllers;

use App\Models\Respondent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class RespondentController extends Controller
{
    /**
     * Import data from Excel and store in database.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function import(Request $request)
    {
        $count = 0;

        // Validate the uploaded file
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);

        // Get the uploaded file
        $file = $request->file('file');

        // Load the Excel file
        $data = Excel::toArray([], $file)[0];

        // Skip the header row
        $header = array_shift($data);

        // Check if the data is empty
        if (empty($data)) {
            return response()->json([
                'success' => false,
                'message' => 'The uploaded file contains no data.',
            ], 400);
        }

        // Loop through rows and insert into the database
        foreach ($data as $row) {
            $count++;
            Respondent::create([
                'sr_number' => $row[0] ?? null, // Sr. #
                'branch_code' => $row[1] ?? null, // Br Code
                'branch_type_code' => $row[2] ?? null, // Branch Type Code
                'code_scenarios' => $row[3] ?? null, // Code Scenarios
                'city_codes' => $row[4] ?? null, // City Codes
                'province_codes' => $row[5] ?? null, // Province Codes
                'section_1_branch_exterior' => $row[6] ?? null, // Section 1 - Branch Exterior & Outlook
                'section_2_branch_internal' => $row[7] ?? null, // Section 2 - Branch Internal Ambiance
                'section_3_customer_services' => $row[8] ?? null, // Section 3 - Customer Services-Branch Visit
                'section_4_product_knowledge' => $row[9] ?? null, // Section 4 - Product Knowledge / Fair Treatment
                'section_5_cash_counter_services' => $row[10] ?? null, // Section 5 - Cash Counter Services
                'section_6_atm_services' => $row[11] ?? null, // Section 6 - ATM Services
                'overall' => $row[12] ?? null, // Overall
                'overall_performance' => $row[13] ?? null, // Overall Branch Performance
            ]);
        }

        // Store the count in the session
        Session::put('imported_count', $count);

        return response()->json([
            'success' => true,
            'message' => 'File imported successfully.',
            'count' => $count,
        ]);
    }

    /**
     * Retrieve all Respondents data and the imported count.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // Retrieve all respondents
        $respondents = Respondent::all();

        // Dynamically count the number of records
        $count = $respondents->count();

        return response()->json([
            'success' => true,
            'count' => $count,
            'data' => $respondents,
        ]);
    }
}
