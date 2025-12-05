<!DOCTYPE html>
<html>
<head>
    <title>Personal Information Display</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #e8f0fe;
            padding: 30px;
            margin: 0;
        }

        .display-box {
            background: #ffffff;
            width: 450px;
            margin: auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 0px 12px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: #444;
            margin: 10px 0;
        }

        strong {
            color: #000;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: white;
            background: #4CAF50;
            padding: 10px;
            border-radius: 5px;
            width: 150px;
            margin-left: auto;
            margin-right: auto;
        }

        a:hover {
            background: #45a049;
        }
    </style>
</head>
<body>

<div class="display-box">
    <h2>Personal Information</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $fullname = $_POST['fullname'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $email = $_POST['email'];

    echo "<p><strong>Full Name:</strong> $fullname</p>";
    echo "<p><strong>Age:</strong> $age</p>";
    echo "<p><strong>Address:</strong> $address</p>";
    echo "<p><strong>Email:</strong> $email</p>";
} else {
    echo "<p>No data submitted.</p>";
}
?>

<a href="index.php">Go Back</a>

</div>

</body>
</html>
