<!DOCTYPE html>
<html>
<head>
    <title>Personal Information Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f9;
            padding: 30px;
            margin: 0;
        }
        .container {
            background: #ffffff;
            width: 400px;
            margin: auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            font-weight: bold;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #aaa;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #4CAF50;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Personal Information Form</h2>

    <form action="personal_info.php" method="POST">
        <label>Full Name:</label>
        <input type="text" name="fullname" required>

        <label>Age:</label>
        <input type="number" name="age" required>

        <label>Address:</label>
        <input type="text" name="address" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>
