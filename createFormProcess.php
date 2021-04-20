<?php   

//1. elle se met en lien avec la couche modele (include model...)
include "model/model.php";

//2. elle demande au modele qql chose (insertion dans la bdd)
$link = get_link();

require "template/createForm.php";

//3. elle appel le bon template (par  exemple un template qui dirait c'est fait ! )


//TODO : refactoring
// connexion a la BDD
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

print_r($_POST);
$title = filter_var($_POST['title']); 
$content = filter_var($_POST['content']); 

// /*
//$link = new PDO("mysql:host=localhost;dbname=blog_db", 'myuser', 'mypassword');
$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//NTU


//préparation de la requête et des variables
 $sql = "INSERT INTO post (title, content)  VALUES (:titlevalue,:contentvalue)";
 echo $sql;

 $replaceArray = array(
     ':titlevalue'=>$title, 
     ':contentvalue'=>$content
);

//Execution de la requete
try{
  $requete = $link->prepare($sql);
  $requete->execute($replaceArray);
}catch(Exception $e){
  // en cas d'erreur :
   echo " Erreur ! ".$e->getMessage();
}
echo "c'est tout bon ! ";
// */
?>

