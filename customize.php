<?php
require_once("connect.php"); 
$csql= "SELECT * FROM design";

 $cstatus= mysqli_query($connect,$csql);


 if($cstatus==true)
 {
    
     while($getRow = mysqli_fetch_array($cstatus))
     {
         if($getRow['options']=="site_name")
         {
            $site_name = $getRow['value'];
         }

         else if($getRow['options']=="header_bg")
         {
             $header_bg = $getRow['value'];
         }
         else if($getRow['options']=="header_text_color")
         {
             $header_text_color = $getRow['value'];
         }
         else if($getRow['options']=="site_name_color")
         {
             $site_name_color = $getRow['value'];
         }
        
        

     }
    }

   

?>

 <?php //echo $site_name_color ;?>