<?php 
var_dump($_POST);
   if (isset($_POST['submit'])) {
   	$login=$_POST['login'];
   	$pwd=$_POST['pwd'];
   	$result=connexion($login,$pwd);
   	if ($result=="error") {
   		echo "login ou password incorrect";
   	}else{
   		header("location:index.php?lien=".$result);
   	}
   }

 ?>

<div class="cont">
	<div class="cont-titulo">
		<div class="titulo">Login Form</div>
	</div>
	<div class="cont-body">
		<form method="post" action="" id="connexion">

			<div class="put-in">
				<div class="icones icone-login"></div>
					<input type="text" class="form-control" error="error-f" name="login" id="" placeholder="login">
				<div class="error" id="error-f" ></div>
			</div>
			<div class="put-in">
				<div class="icones icone-psw"></div>
					<input type="password" class="form-control" error="error-s" name="pwd" id="" placeholder="password">
				<div class="error" id="error-s"></div>
			</div>
			<div class="put-in">
				
					<button type="submit" class="bouton" name="submit" id="">CONNEXION</button>
				    <a href="" class="forme-lien">S'incrire pour jouer</a>
			</div>
		</form>						
			     	  	
	</div>	
</div>
