<?php

require_once("connect.php");

if(isset($_REQUEST['did']) && isset($_REQUEST['reffer'])){
    $did =$_REQUEST['did'];
    $reffer=$_REQUEST['reffer'];



    
    $sql="DELETE FROM doners WHERE did='$did' AND reffer='$reffer'";
    
    if(mysqli_query($connect,$sql))
    {
        header('Location: my-profile.php?donordeleted');
    }

}