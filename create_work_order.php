<?php
// Simulating form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $work_order_number = $_POST['work_order_number'];
    $date = $_POST['date'];
    $contractor = $_POST['contractor'];
    $work_description = $_POST['work_description'];
    $start_date = $_POST['start_date'];
    $completion_deadline = $_POST['completion_deadline'];
    
    // Here you would typically insert into a database
    // For now, we'll just redirect or display a message
    echo "<script>alert('Work Order Issued Successfully!'); window.location.href='create_work_order.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="public/gop.ico" type="image/x-icon">
    <title>Create Work Order</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border: 1px solid #007bff;
            border-radius: 5px;
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            float: right;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>CREATE WORK ORDER</h2>
        </div>
        <form method="POST" action="">
            <div class="form-group">
                <label>Work Order Number</label>
                <input type="text" name="work_order_number" value="WO-2025-0042" readonly>
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="date" name="date" value="2025-04-21" readonly>
            </div>
            <div class="form-group">
                <label>Contractor</label>
                <input type="text" name="contractor" value="ABC Construction Ltd (ID: CONT-328)" readonly>
            </div>
            <div class="form-group">
                <label>Work Description</label>
                <textarea name="work_description" rows="3">Repair of drainage system at Main Street junction, including...</textarea>
            </div>
            <div class="form-group">
                <label>Start Date</label>
                <input type="date" name="start_date" value="2025-04-25">
            </div>
            <div class="form-group">
                <label>Completion Deadline</label>
                <input type="date" name="completion_deadline" value="2025-06-15">
            </div>
            <button type="submit">ISSUE WORK ORDER</button>
        </form>
    </div>
</body>
</html>