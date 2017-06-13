<?php
$conn=@mysqli_connect('mysql','temple','wer5113@@8', 'android');

if($conn)
	echo "db connect successful";
else
	echo "db connet failed";

?>
