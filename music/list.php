<?
	if($_GET["mode"] == "list")
	{
		$connect= mysqli_connect('mysql','temple','wer5113@@8', 'android');
		$connect->set_charset("utf8");
		$sql = "select * from Music";
		$result = mysqli_query($connect, $sql);
		$num = mysqli_num_rows($result);

	    	while ($field = $result->fetch_assoc()) {
	      		echo $field["name"]."\n";
	    	}

	}
?>
