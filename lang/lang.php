<?php
  $lang_file = "lang_az.php";
	$lang_qisa = "az";
  
	if(isset($_COOKIE['lang']))
	{
		$dil = $_COOKIE['lang'];
		switch($dil)
		{
            case "az": $lang_qisa = "az"; $lang_file = "lang_az.php"; break;
            case "en": $lang_qisa = "en"; $lang_file = "lang_en.php"; break;
            default: $lang_file = "lang_az.php"; break;
		}
	}
    else{
        setcookie("lang", $lang_qisa, time() + (86400 * 30), "/");
	}
	include $lang_file;
?>