<?php

function index_action() {
    $posts = get_all_posts();
    require 'template/listView.php';
    require "template/formView.php"; 
}

function show_action() {    
    $id= filter_var($_GET["id"], FILTER_VALIDATE_INT);
    $posts = get_postById($id);
    include("template/showView.php");
}

function printpdf_action() {
    $posts = get_all_posts();
    require "template/pdfView.php";
}

function printform_action() {
    require "template/formView.php";
}

function processform_action() {
    
    $title = filter_var($_POST['title']);    
    $content = filter_var($_POST['content']); 
    insertPost($title, $content);
    //redirect user vers la liste des posts
    header('Location: /formation/TP1/index.php');
}