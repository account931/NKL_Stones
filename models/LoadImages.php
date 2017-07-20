<?php
Class LoadImages{


  static function printIMG($folder){
  $dir = $folder;  /*'images/test/'; */
  //$cols = 5; //
  $files = scandir($dir); 
  echo "<ul>"; 
  //$k = 0; 
  for ($i = 0; $i < count($files); $i++) { 

    if (($files[$i] != ".") && ($files[$i] != "..")) { 
      /*if ($k % $cols == 0) echo "<tr>"; */

      echo "<li>"; 
      $path = $dir.$files[$i]; 
      echo "<a href='$path'>"; 
      echo "<img src='$path' alt='granit' width='200' />"; 
      echo "</a>"; 
      echo "</li>"; 
      
      //if ((($k + 1) % $cols == 0) || (($i + 1) == count($files))) echo "</tr>";
      //$k++; 
    }
  }
  echo "</ul>"; 
} // END function





}


?>