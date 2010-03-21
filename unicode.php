<?php

  $database = 'unicode';

  $dsn="sqlite:$database.db";

  try { 
   $pdo = new PDO($dsn);   
  } catch(PDOException $e) { 
   die ('Connection to ' . $database . ' failed.'); 
  } 

  $query = $_GET['query'];
  $sql = "select * from unicode where name like ?";
  $pds = $pdo->prepare($sql);
  $pds->execute(array('%' . $query . '%'));

  $results = array();

  foreach ($pds as $character){
    $results[] = $character;
  }

  #echo $_GET['callback'] . '(' . json_encode($results) . ');';
  echo json_encode($results) ;
?>
