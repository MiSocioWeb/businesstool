<?php 
  session_start();
  $idUSER=$_SESSION['idUSER'];

  include "../db.php";
  $relation_admin=$_SESSION['relation_admin'];
  $idBusiness=$_SESSION['idBusiness'];

  
  if($idUSER){
    $queryCompany= mysql_query(" SELECT * FROM company_clients_info WHERE id_company=$idBusiness") or die(mysql_error());
    $cont=0;
    $countRows=mysql_num_rows($queryCompany);
    while($rowCompany=mysql_fetch_array($queryCompany)){
      $cont++;
      $classSelected='';
      if($cont==1){
        $classSelected=' unread';
        $firstID=$rowCompany['id'];
      }

      echo '
              <a href="#" class="theCompany" company_id="'.$rowCompany['id'].'" company_name="'.$rowCompany['nombre'].'" company_description="'.$rowCompany['descripcion'].'"  company_date="'.$rowCompany['fecha_contrato'].'" company_legal="'.$rowCompany['representante'].'" company_contrat="'.$rowCompany['url_contrato'].'" company_page="'.$rowCompany['pagina'].'" onclick="load_this($(this))">
                  <div class="message_list_block'.$classSelected.'">
                    <div class="left">
                      <div class="avatar_holder">
                        <img src="'.$rowCompany['logo'].'" alt="" data-pagespeed-url-hash="25167488" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                      </div>
                    </div>
                    <div class="right">
                      <span class="name">'.$rowCompany['nombre'].'</span>
                      <div class="pull-right right_details">
                        <ul class="list-unstyled list-inline">
                         
                          <li><i class="ion ion-record flatRedc status"></i></li>
                          <li><i class="ion-android-attach"></i></li>
                        </ul>
                      </div>
                      <h4>'.$rowCompany['descripcion'].'</h4>
                    </div>
                    <!-- right -->                          
                  </div>
                </a>';
    }

  }

  if($countRows>=1){
    echo '<script>$(".theCompany[company_id='.$firstID.']").click();</script>';
  }

  ?>