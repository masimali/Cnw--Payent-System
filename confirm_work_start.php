<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simulate work start confirmation
    echo "<script>alert('Work Start Confirmed Successfully!'); window.location.href='confirm_work_start.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="public/gop.ico" type="image/x-icon">
    <title>Confirm Work Start</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background-color: #f0f0f0; }
        .container { max-width: 600px; margin: 0 auto; background-color: white; padding: 20px; border: 1px solid #28a745; border-radius: 5px; }
        .header { background-color: #28a745; color: white; padding: 10px; text-align: center; border-radius: 5px 5px 0 0; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input, textarea { width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        button { background-color: #28a745; color: white; padding: 10px 20px; border: none; border-radius: 20px; cursor: pointer; float: right; }
        button:hover { background-color: #218838; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Contractor Portal - Confirm Work Start</h2>
        </div>
        <form method="POST" action="">
            <div class="form-group">
                <label>Work Order</label>
                <input type="text" name="work_order" value="WO-2025-0042" readonly>
            </div>
            <div class="form-group">
                <label>Work Description</label>
                <input type="text" name="work_description" value="Repair of drainage system at Main Street junction" readonly>
            </div>
            <div class="form-group">
                <label>Timeline</label>
                <input type="text" name="timeline" value="April 25, 2025 - June 15, 2025" readonly>
            </div>
            <button type="submit">Confirm Work Start</button>
        </form>
    </div>
</body>
</html>