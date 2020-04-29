<?php
echo $_SESSION['utilisateur']['prenom'];
echo $_SESSION['utilisateur']['nom'];
echo $_SESSION['utilisateur']['login'];
echo $_SESSION['utilisateur']['profil'];
echo $_SESSION['utilisateur']['photo'];
?>
<div class="jeux">
	<div class="téte">
    <a href="index.php?statut=logout"><input  class="deconnect" type="button" name="deconnect" value="Deconnexion"></a>
    <h2>S'INSCRIRE</h2>
     <p>pour proposer des quizz</p>
    </div>
    <div class="avatar">
          <img src="image/avatar.jpg" />
          </div>
	<div class="interface">
		<form method="post" action="" id="">
           <div class="power">
                <label for=""></label>	
				<input type="text" class="name"  name="Prenom" id="" placeholder="Prenom">
                
                </div>

                <div class="power">
                <label for=""></label>
				<input type="text" class="name"  name="Nom" id="" placeholder="Nom">
                
                </div>

			<div class="power">	
                <label for=""></label>
				<input type="text" class="name"  name="login" id="" placeholder="login">
				
            </div>
            
			<div class="power">
                <label for=""></label>
				<input type="password" class="name"  name="pwd" id="" placeholder="password">
				
			</div>
			<div class="power">
            <div style="">
            <input type="submit" value="avatar">
            <div style="margin-top: 10px;
            padding: 10px;
            color: white;
            background-color:rgb(46, 185, 250) ;
            font-size:20px
            font-weight:bold;
            border-radius:6px;
            border:1px solid rgb(46, 185, 250) ;float: right;">
           <input type="file" name="photo">
           </div>
           </div>
           <input type="submit" name=" valider" value="Créer compte" style="margin-top: 30px;
            padding: 10px;
           color: white;
           background-color:rgb(46, 185, 250) ;
           font-size:20px
           font-weight:bold;
           border-radius:6px;
           border:1px solid rgb(46, 185, 250) ;float:right;" /> <br/>
          </div>
          
			</div>
		</form>						
             	  	
    </div>
   	
</div>