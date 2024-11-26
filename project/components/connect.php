<?php

      $server = "sql101.infinityfree.com"
      $db_name = "if0_37794857_Luti_official";
      $db_user_name = "if0_37794857";
      $db_user_pass = "gdsiTewH39cO";

      $conn = new PDO($server, $db_name, $db_user_name, $db_user_pass);

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
