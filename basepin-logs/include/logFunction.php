<?php
$cols = ['section','control_number', 'technician','verification_date','quarter', 'def_remarks', 'corr_status', 'corr_remarks','crack_status', 'mat_status','created_at'];

$sql = "SELECT * FROM repair_logs ORDER BY created_at";
$result = $conn->query($sql);