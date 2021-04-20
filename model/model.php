<?php 
function close_link(&$alink){
    $alink = null;
}

function get_all_posts() {
    // log BDD
    $link= get_link();
    $result = $link->query('SELECT id, title FROM post');

    // affiche
    $posts = array();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) { 
        $posts[] = $row;
    }
   
    close_link($link);
    return $posts;
}
function get_postById($id){
    $link= get_link();
    $result = $link->query('SELECT * FROM post WHERE id='.$id);
   
    
    $posts = array(); 
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $posts[] = $row;
    }
    close_link($link);
    return $posts;
}

function get_link(){
    $link = new PDO("mysql:host=localhost;dbname=blog_db", 'myuser', 'mypassword');
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $link;
}

function insertPost($title, $content) {
    $link= get_link();
    //préparation de la requête et des variables
    $sql = "INSERT INTO post (title, content)  VALUES (:titlevalue,:contentvalue)";
    $replaceArray = array(
     ':titlevalue'=>$title, 
     ':contentvalue'=>$content
    );

    try{
     $requete = $link->prepare($sql);
     $requete->execute($replaceArray);
    } catch(Exception $e){
        // en cas d'erreur :
        echo " Erreur ! ".$e->getMessage();
    }
}

