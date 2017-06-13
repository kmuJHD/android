<?
	if($_GET["id"] == "5113228" && $_GET["pwd"] == "1111")
	{
		echo "\n전현덕님 반갑습니다.\n";
		echo "날짜 :".date("Y-m-d")."\n";
		echo "아이디 :".$_GET["id"]."\n";
		echo "패스워드 :".$_GET["pwd"]."\n";
		echo "파일경로 :".$_SERVER["PHP_SELF"]."\n";
		echo "접속IP : ".$_SERVER["REMOTE_ADDR"]."\n";
		
	}else{
		
		echo "아이디 또는 패스워드가 \n 맞지 않습니다. [전현덕]\n";
		echo "아이디 :".$_GET["id"]."\n";
		echo "패스워드 : ".$_GET["pwd"]."\n";
	}
?>