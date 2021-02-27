<?
function getip(){
	if(getenv("HTTP_CLIENT_IP")){
		$ipaddress = getenv("HTTP_CLIENT_IP");
		//echo"1.$ipaddress<br>";
	}
	else if(getenv("HTTP_X_FORWARDED_FOR")){
		$ipaddress = getenv("HTTP_X_FORWARDED_FOR");
		//echo"2.$ipaddress<br>";
	}
	else if(getenv("HTTP_X_FORWARDED")){
		$ipaddress = getenv("HTTP_X_FORWARDED");
		//echo"3.$ipaddress<br>";
	}
	else if(getenv("HTTP_FORWARDED_FOR")){
		$ipaddress = getenv("HTTP_FORWARDED_FOR");
		//echo"4.$ipaddress<br>";
	}
	else if(getenv("HTTP_FORWARDED")){
		$ipaddress = getenv("HTTP_FORWARDED");
		//echo"5.$ipaddress<br>";
	}
	else if(getenv("REMOTE_ADDR")){
		$ipaddress = getenv("REMOTE_ADDR");
		//echo"6.$ipaddress<br>";
	}
	else
	{
		$ipaddress = "UNKNOWN";
	}
	return $ipaddress;
}
?>