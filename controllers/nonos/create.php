<?php
$heading = "Create test";




$db->query("INSERT INTO items (name) VALUES (':item')", [
    'item' => $_POST['item'],
  ]);

require "views/items/create_view.php";
