<?
	if($_GET["id"] && $_GET["pwd"])
	{
		$connect= mysqli_connect('mysql','temple','wer5113@@8', 'android');
		$connect->set_charset("utf8");
		$sql = "select * from student where id=".$_GET["id"]." and pwd=".$_GET["pwd"];
		$result = mysqli_query($connect, $sql);
		$num = mysqli_num_rows($result);
		
		if($num){
			$row=mysqli_fetch_array($result);
			echo "\n날짜 :".date("Y-m-d")."\n";
			echo "이름 :".$row[name]."님 반갑습니다.\n";
			echo "연락처 :".$row[phone]."\n";
			echo "주소 :".$row[address]."\n";
			echo "파일경로 :".$_SERVER["PHP_SELF"]."\n";
			echo "접속IP : ".$_SERVER["REMOTE_ADDR"]."\n";
		}else{
			echo "아이디 또는 패스워드가 \n 맞지 않습니다. [전현덕]\n";
		}
	}else{
		echo "요청페이지 오류\n";
	}
?>
