<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action'];
    if ($action == "approve") {
        echo "<script>alert('Bill Approved and Forwarded!'); window.location.href='review_marking.php';</script>";
    } else {
        echo "<script>alert('Bill Rejected!'); window.location.href='review_marking.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="public/gop.ico" type="image/x-icon">
    <title>Review & Marking</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background-color: #f0f0f0; }
        .container { max-width: 600px; margin: 0 auto; background-color: white; padding: 20px; border: 1px solid #dc3545; border-radius: 5px; }
        .header { background-color: #dc3545; color: white; padding: 10px; text-align: center; border-radius: 5px 5px 0 0; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 15px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #f8f9fa; }
        .button-group { display: flex; gap: 10px; justify-content: flex-end; }
        button { padding: 10px 20px; border: none; border-radius: 20px; cursor: pointer; }
        .reject { background-color: #dc3545; color: white; }
        .approve { background-color: #28a745; color: white; }
        .reject:hover { background-color: #c82333; }
        .approve:hover { background-color: #218838; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>SDO Portal - Review & Marking</h2>
        </div>
        <form method="POST" action="">
            <div class="form-group">
                <label>Bill Review: ABC Construction (WO-2025-0042)</label>
                <table>
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Claimed</th>
                            <th>Verified</th>
                            <th>Rate</th>
                            <th>Billed Amt</th>
                            <th>Approved Amt</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Excavation</td>
                            <td>136.5 m³</td>
                            <td>134.8 m³</td>
                            <td>₹450/m³</td>
                            <td>₹61,425</td>
                            <td>₹60,660</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="button-group">
                <button type="submit" name="action" value="reject" class="reject">Reject</button>
                <button type="submit" name="action" value="approve" class="approve">Approve & Forward</button>
            </div>
        </form>
    </div>
</body>
</html>