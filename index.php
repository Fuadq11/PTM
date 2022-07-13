<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="180x180" href="img/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/fav/favicon-16x16.png">
    <link rel="manifest" href="img/fav/site.webmanifest">
    
    <title>PTM</title>
    
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b32d5a037c.js" crossorigin="anonymous"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css">
  </head>
<body>
<?php include "includes/header.php"; 


	$fayl = "home";
	$header_subheader = "header";
	if(isset($_GET['mode']) && !empty($_GET['mode']))
	{
		$mode = $_GET['mode'];
	
		switch($mode)
		{
			case "main" : $fayl = "home";break;
			//==========================================
			case "about" : $fayl = "about";break;
			//==========================================
			case "news" : $fayl = "news";break;
			//==========================================
      case "faculty" : $fayl = "faculty";break;
			//==========================================
			case "contact" : $fayl = "contact";break;
			//==========================================
      case "apply" : $fayl = "apply";break;
			//==========================================
			case "faq" : $fayl = "faq"; break;
			//==========================================
		
			default: $fayl = "home"; break;
		}
	}

?>
<?php 
	include "pages/".$fayl.".php";
?>
      <?php include "includes/footer.php"; ?>
</body>
</html>