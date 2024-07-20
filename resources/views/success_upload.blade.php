<!DOCTYPE html>
<html>

<head>
    <title>File Uploaded Successfully</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            max-width: 400px;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .success-message {
            text-align: center;
            padding: 20px;
        }

        .success-message i {
            font-size: 48px;
            color: #4CAF50;
            margin-bottom: 10px;
        }

        .success-message h1 {
            color: #333;
            margin-top: 0;
        }

        .success-message p {
            color: #666;
            margin-bottom: 20px;
        }

        .btn {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #3e8e41;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="success-message">
            <i class="fas fa-check-circle"></i>
            <h1>File Uploaded Successfully!</h1>
            <p>Your file has been uploaded successfully.</p>
            <a href="/" class="btn underline-none">Upload Another File</a>
        </div>
    </div>
</body>

</html>