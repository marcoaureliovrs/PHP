
<?php
     function conectar()
     {
     $hostdb='mysql01.maltlaua.tecnologia.ws';
     $userdb='maltlaua';
     $passdb='Uvhtxt25tf';

          if ($con = mysql_pconnect($hostdb,$userdb,$passdb)) {
               return $con;
          }  else  {
               return 0;
          }
     }
?>
