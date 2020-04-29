<!DOCTYPE html>
<html lang="en">
<head>
	<title>mini-projet</title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=div,initial-scale= ">
    <meta http-equiv="X-UA-Compatible"content="ie-edge">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <script type="text/javascript" src="./js/fichier.js"></script>
</head>
<body>
	<div class="titre">
		<div class="logo"></div>
		<div class="titre-text">Le Plaisir de Jouer</div>
		
	</div>
	<div class="content">
    <?php
    session_start();
        require_once("src/fonction.php");
        if (isset($_GET['lien'])){
            switch ($_GET['lien']){
                case "acceuil":
                    require_once("src/admin.php");
                break;
                case "jeux":
                    require_once("src/jeux.php");
                break;
            }

        }else{
            if (isset($_GET['statut' ]) && $_GET['statut']==="logout") {
                Deconnexion();
                
            }
            require_once("src/login.php");  
        }
       

		

          
    ?>
    </div>

    
</body>
</html>