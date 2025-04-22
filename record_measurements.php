<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $length = $_POST['length'];
    $width = $_POST['width'];
    $depth = $_POST['depth'];
    echo "<script>alert('Measurements Recorded Successfully!'); window.location.href='record_measurements.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="public/gop.ico" type="image/x-icon">
    <title>Record Measurements</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background-color: #f0f0f0; }
        .container { max-width: 600px; margin: 0 auto; background-color: white; padding: 20px; border: 1px solid #fd7e14; border-radius: 5px; }
        .header { background-color: #fd7e14; color: white; padding: 10px; text-align: center; border-radius: 5px 5px 0 0; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input, textarea { width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        .measurement-group { display: flex; gap: 10px; }
        .measurement-group input { width: 33%; }
        button { background-color: #fd7e14; color: white; padding: 10px 20px; border: none; border-radius: 20px; cursor: pointer; float: right; }
        button:hover { background-color: #e06c00; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Sub Engineer Portal - Record Measurements</h2>
        </div>
        <form method="POST" action="">
            <div class="form-group">
                <label>Work Order</label>
                <input type="text" name="work_order" value="WO-2025-0042 - ABC Construction" readonly>
            </div>
            <div class="form-group">
                <label>Date of Measurement</label>
                <input type="date" name="date" value="2025-05-10">
            </div>
            <div class="form-group">
                <label>Item Description</label>
                <input type="text" name="item_description" value="Excavation of drainage lines">
            </div>
            <div class="form-group measurement-group">
                <div>
                    <label>Length (m)</label>
                    <input type="number" step="0.1" name="length" value="45.5">
                </div>
                <div>
                    <label>Width (m)</label>
                    <input type="number" step="0.1" name="width" value="1.2">
                </div>
                <div>
                    <label>Depth (m)</label>
                    <input type="number" step="0.1" name="depth" value="2.5">
                </div>
            </div>
            <div class="form-group">
                <label>Notes</label>
                <textarea name="notes" rows="3">Work progressing as per specifications. Soil condition sandy as expected.</textarea>
            </div>
            <button type="submit">Record in Measurement Book</button>
        </form>
    </div>
</body>
</html>