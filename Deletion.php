<?php
    $con = mysqli_connect("localhost", "tracking", "system", "tracking");
    mysqli_query($con,'SET NAMES utf8');

    $Date = "2021-4-16";
    $DeviceID = "T-004";

	$NFS_statement = mysqli_query($con, "Select Distinct FileID FROM tracking WHERE Date = '$Date' AND DeviceID = '$DeviceID'");

	while($row=mysqli_fetch_assoc($NFS_statement)){
		$result = $row["FileID"];
		system("sudo /home/tracking/Deletion/Deletion '$result'");
	}

    mysqli_close($con);

?>
