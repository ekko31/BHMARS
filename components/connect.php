<?php

   $db_name = 'mysql:host=localhost;dbname=id21523427_home_dbfinal';
   $db_user_name = 'id21523427_jerico';
   $db_user_pass = 'Poginiekko@31';

   $conn = new PDO($db_name, $db_user_name, $db_user_pass);

   function create_unique_id(){
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < 20; $i++) {
          $randomString .= $characters[mt_rand(0, $charactersLength - 1)];
      }
      return $randomString;
  }

?>