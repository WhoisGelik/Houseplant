<?php
$db = new PDO ("mysql:host=localhost;dbname=diplom","root","");

function get_product_by_id($id) {
  global $db;
  $products = $db->query("SELECT * FROM cart WHERE id = $id");
  foreach ($products as $product){
    return $product;
  }
}

function get_decor_by_id($id) {
    global $db;
    $decors = $db->query("SELECT * FROM decor_list WHERE id = $id");
    foreach ($decors as $decor){
      return $decor;
    }
  }

  function get_cactus_by_id($id) {
    global $db;
    $cactusi = $db->query("SELECT * FROM cactus WHERE id = $id");
    foreach ($cactusi as $cactus){
      return $cactus;
    }
  }

  function get_polez_by_id($id) {
    global $db;
    $polezn = $db->query("SELECT * FROM polez_rasteniya WHERE id = $id");
    foreach ($polezn as $polez){
      return $polez;
    }
  }

?>