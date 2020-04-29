<?php
function connexion($login,$pwd){
    $utilisateurs=getData();
    foreach ($utilisateurs as $key => $utilisateur){
        
        if ($utilisateur["login"]===$login && $utilisateur["password"]===$pwd){
            $_SESSION['user']=$user;
   				$_SESSION['statut']=$login;
            if ($utilisateur["profile"]==="admin") {
                return "acceuil";
   			}else{
   				return "jeux";
   			}
        }
    }
    return "error";
}


function is_connect(){
    if (isset($_SESSION['statut'])) {
        header("location:index.php");
    }
}



function Deconnexion(){
        unset($_SESSION['user']);
         unset($_SESSION['statut']); 
         session_destroy();
}
      
     
  function getData($file="user"){
  $data=file_get_contents("json/".$file.".json");
  $data=json_decode($data,true); 
  return $data;
   }
 ?>