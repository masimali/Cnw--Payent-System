<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="public/gop.ico" type="image/x-icon">
    <title>C&W PAYMENT SYSTEM</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border: 1px solid #007bff;
            border-radius: 5px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .nav-menu {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            padding: 20px 0;
        }
        .nav-item {
            flex: 1;
            min-width: 200px;
        }
        .nav-item a {
            display: block;
            text-align: center;
            padding: 15px;
            text-decoration: none;
            color: white;
            border-radius: 5px;
            font-weight: bold;
        }
        .nav-item a.create { background-color: #007bff; }
        .nav-item a.confirm { background-color: #28a745; }
        .nav-item a.record { background-color: #fd7e14; }
        .nav-item a.submit { background-color: #6f42c1; }
        .nav-item a.review { background-color: #dc3545; }
        .nav-item a:hover { opacity: 0.9; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Work Order Management System</h2>
        </div>
        <div class="nav-menu">
            <div class="nav-item">
                <a href="create_work_order.php" class="create">Create Work Order</a>
            </div>
            <div class="nav-item">
                <a href="confirm_work_start.php" class="confirm">Confirm Work Start</a>
            </div>
            <div class="nav-item">
                <a href="record_measurements.php" class="record">Record Measurements</a>
            </div>
            <div class="nav-item">
                <a href="submit_monthly_bill.php" class="submit">Submit Monthly Bill</a>
            </div>
            <div class="nav-item">
                <a href="review_marking.php" class="review">Review & Marking</a>
            </div>
        </div>
    </div>
</body>
</html>