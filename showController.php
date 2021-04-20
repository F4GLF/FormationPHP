<?php
    // index.php
    include "model/model.php";

    $id= filter_var($_GET["id"], FILTER_VALIDATE_INT);
    $posts = get_postById($id);

    include("template/showView.php");
?>

