
<!DOCTYPE html>
<html>
<head>
  <title>admin</title>
  <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
<div id="container">

  

 <div class="inset">
  <div class="login-head">
    <h1>CREER ET PARAMETRER VOS QUIZZ </h1>
    
      <a href="index.php?statut=logout"><input  class="deconnect" type="button" name="deconnect" value="Deconnexion"></a>
         
  </div>
  
<div id="milieu">
     <div class="gauche">
      <div class="degrade"> <img class="profiler" style=" height: 15%;" src="image/avatar.jpg<?php if (isset($_SESSION['avatar'])) {echo $_SESSION['avatar'];} ?>">
    <span id="pnom"><?php if (isset($_SESSION['nom']) and isset($_SESSION['prenom']) )
    {
    echo $_SESSION['prenom'].' '.$_SESSION['nom'] ; }?></span> </div>
      <div class="menu">
         <div id="sidebar">

                <ul>
                  
                    <li >
                        <a href="listequestions.php">Liste Questions<img src="./image/Icones/ic-liste.png"> </a>
                     </li>
                     <li class="active">   
                        <a href="creationcompte.php">Creer Admin<img src="./image/Icones/ic-ajout-active.png"> </a>
                        
                    </li>
                    <li >
                        <a href="listejoueurs.php">Liste Joueurs <img src="./image/Icones/ic-liste.png"> </a>
                    </li>
                    <li>
                        <a href="creerquestion.php">Creer Questions<img src="./image/Icones/ic-ajout.png"> </a>
                    </li>
                </ul>

                
            </div>
      </div>
  </div>
  <div class="droite">
     <div class="droite-content">
      <div class="haut">
        <div class="inscription">
        
      <h2>S'INSCRIRE</h2>
      <p>pour proposer des quizz</p>
      
      </div>
      <div class="man">Prenom</div> 
  <div style="width: 100%;margin-bottom: 3%">
  <input type="Text" name="prenom" placeholder="prenom" style="width: 60%;
  height:25px;
   border:1px solid #78dff8;
   border-radius:5px;
   font-size: 15px;
  font-weight: bold;
  color: silver;" required> <br/>
  </div>
   <div class="man">Nom</div>
   <div style="width: 100%;margin-bottom: 3%">
  <input type="Text" name="nom" placeholder="nom" style="width: 60%;
  height:25px;
   border:1px solid #78dff8;
   border-radius:5px;
   font-size: 15px;
  font-weight: bold;
  color: silver;" required> <br/>
  </div>
  <div class="man">Login</div>
  <div style="width: 100%;margin-bottom: 3%">
  <input type="text" name="Login" placeholder="login" style="width: 60%;
  height:25px;
   border:1px solid #78dff8;
   border-radius:5px;
   font-size: 15px;
  font-weight: bold;
  color: silver" required> <br/>
  </div>
  <div class="man">Password</div>
   <div style="width: 100%;margin-bottom: 3%">
  <input type="password" name="pwd" placeholder="password" style="width: 60%;
  height:25px;
   border:1px solid #78dff8;
   border-radius:5px;
   font-size: 15px;
  font-weight: bold;
  color: silver" required> <br/>
  </div>
  <div class="man">Confirmation psw</div>
   <div style="width: 100%;margin-bottom: 3%">
  <input type="password" name="cpwd" style="width: 60%;
  height:25px;
   border:1px solid #78dff8;
   border-radius:5px;
   font-size: 15px;
  font-weight: bold;
  color: silver;float:left;" required> <br/>
  </div>
  <div style="margin-top: 10px;
  padding: 10px;
  color: white;
  background-color:rgb(46, 185, 250) ;
  font-size:20px
  font-weight:bold;
  border-radius:6px;
  border:1px solid rgb(46, 185, 250) ;float: left;">
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
         

        
  </div>

  </div>

</div>



</body>
</html>

