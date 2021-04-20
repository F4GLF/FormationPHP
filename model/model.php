<?php 
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
    return $link;
}
function close_link(&$alink){
    $alink = null;
}
