<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<script>alert('Bill Submitted Successfully!'); window.location.href='submit_monthly_bill.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="public/gop.ico" type="image/x-icon">
    <title>Submit Monthly Bill</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background-color: #f0f0f0; }
        .container { max-width: 600px; margin: 0 auto; background-color: white; padding: 20px; border: 1px solid #6f42c1; border-radius: 5px; }
        .header { background-color: #6f42c1; color: white; padding: 10px; text-align: center; border-radius: 5px 5px 0 0; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input { width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 15px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #f8f9fa; }
        .total { font-weight: bold; }
        button { background-color: #6f42c1; color: white; padding: 10px 20px; border: none; border-radius: 20px; cursor: pointer; float: right; }
        button:hover { background-color: #563d7c; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Contractor Portal - Submit Monthly Bill</h2>
        </div>
        <form method="POST" action="">
            <div class="form-group">
                <label>Work Order</label>
                <input type="text" name="work_order" value="WO-2025-0042" readonly>
            </div>
            <div class="form-group">
                <label>Bill Period</label>
                <input type="text" name="bill_period" value="May 2025" readonly>
            </div>
            <div class="form-group">
                <label>Bill Summary</label>
                <table>
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Rate</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Excavation work</td>
                            <td>136.5 m³</td>
                            <td>₹450/m³</td>
                            <td>₹61,425</td>
                        </tr>
                        <tr>
                            <td class="total" colspan="3">Total</td>
                            <td class="total">₹61,425</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <button type="submit">Submit Bill</button>
        </form>
    </div>
</body>
</html>