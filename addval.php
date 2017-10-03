<?php

   $val= $_POST["val"];
 if($val == "1"){
   $data = fopen("/Demo/val.json", "r+");
    $dataArr=json_encode(array(   
        
        "nametext"=> $_POST["nametext"],   
        "mailtext"=> $_POST["mailtext"],   
        "valtextarea"=> $_POST["valtextarea"]
    ));
    fseek($data,-1,SEEK_END) ;
    fwrite($data, ",".$dataArr."]");
    echo "OK";}
   
?>
