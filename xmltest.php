<?
	echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
	echo "<result>";
	if($_GET["id"] && $_GET["pwd"])
	{
		$connect= mysqli_connect('mysql','temple','wer5113@@8', 'android');
		$connect->set_charset("utf8");
		$sql = "select * from student where id=".$_GET["id"]." and pwd=".$_GET["pwd"];
		$result = mysqli_query($connect, $sql);
		$num = mysqli_num_rows($result);
		
		if($num){
			$row=mysqli_fetch_array($result);
	?>
			<date><?=date("Y-m-d")?></date>
			<name><?=$row[name]?></name>
			<phone><?=$row[phone]?></phone>
			<address><?=$row[address]?></address>
			<path><?=$_SERVER["PHP_SELF"]?></path>
			<ip><?=$_SERVER["REMOTE_ADDR"]?></ip>
	<?
		}else{
			echo "<error>아이디 또는 패스워드가 \n 맞지 않습니다. [전현덕]</error>";
		}
	}else{
		echo "<error>요청페이지 오류</error>";
	}
	echo "</result>";
?>
