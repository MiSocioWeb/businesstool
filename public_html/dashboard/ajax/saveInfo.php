<?php 
session_start();
    include "../db.php";
    $id=$_REQUEST[id];
      if($id==1){
        $name=$_REQUEST[name];
        $logo=$_REQUEST[logo];
        $banner=$_REQUEST[banner];
        $adress=$_REQUEST[adress];
        $idBusiness=$_SESSION['idBusiness'];
        mysql_query("UPDATE company SET name='$name' , direccion='$adress', banner='$banner', logo='$logo' WHERE id=$idBusiness ") or die(mysql_error());
        echo "Complete";  
      }
    
    if($id==2){
    $idDB=$_REQUEST[idDB];
    
        $name=$_REQUEST[name];
        $foto=$_REQUEST[foto];
        $email=$_REQUEST[email];
        $adress=$_REQUEST[adress];
        $phone=$_REQUEST['phone'];
        if($idDB>0){
          mysql_query("UPDATE users SET name='$name' , adress='$adress' , foto='$foto', telefono='$phone', email='$email' WHERE id=$idDB") or die(mysql_error());
          echo "Success with update to user $name";
        }                              else{
         $relation=$_SESSION['relation_admin'];                              
          mysql_query("INSERT INTO users(name,adress,foto,telefono,email,type,actived,relation_admin) VALUES('$name','$adress','$foto','$phone','$email','1','3','$relation')") or die(mysql_error());
          echo "New user created successly!";
        }
        
        
          
      }
      
      
      if($id==3){
    
            $idBusiness=$_SESSION['idBusiness'];
        $birth=$_REQUEST[birth];
        $ruc=$_REQUEST[ruc];
        $sri=$_REQUEST[sri];
        $description=$_REQUEST[description];
        $mobile=$_REQUEST['mobile'];
        $page=$_REQUEST['page'];
                             
          mysql_query("UPDATE company SET fecha_fundacion='$birth' , ruc='$ruc', sri='$sri', description='$description' , phone='$mobile', page='$page' WHERE id=$idBusiness ") or die(mysql_error());
        echo "Complete";  
  
        
        
          
      }
      
          if($id==4){
    
            $idBusiness=$_SESSION['idBusiness'];
        $facebook=$_REQUEST[facebook];
        $twitter=$_REQUEST[twitter];
        $instagram=$_REQUEST[instagram];
          mysql_query("UPDATE company SET facebook='$facebook' , twitter='$twitter', instagram='$instagram' WHERE id=$idBusiness ") or die(mysql_error());
        echo "Complete";  
       
        
        
          
      }
?>