<?php
require "model/model.php";

$posts = get_all_posts();

require 'template/listView.php';
require "template/createForm.php";

