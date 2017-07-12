<?php 
  include "../db.php";
  $id=$_REQUEST[id];
  if($id){
          $query=mysql_query("SELECT * FROM users WHERE id=$id") or die(mysql_error());
          while($row=mysql_fetch_array($query)){
            echo '{"id" : "'.$row[id].'" , "name" : "'.$row[name].'" , "email" : "'.$row[email].'" , "phone" : "'.$row[telefono].'" , "foto" : "'.$row[foto].'" , "identificacion" : "'.$row[adress].'"}';
          }
  }
?>