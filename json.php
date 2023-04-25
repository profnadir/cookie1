<?php

echo "object to json string <br>";
$notes = ["note1"=>17, "note2"=>14,"note3"=>18];
echo json_encode($notes);
echo "<br>";
echo "json string to object <br>";
$jsonobj ='{"Peter":35,"Ben":37,"Joe":43}';
print_r(json_decode($jsonobj));
$obj = json_decode($jsonobj);
echo "<br>L'age de Ben est : ".$obj->Ben;
echo "<br>";
$jsonobj ='{"Peter":35,"Ben":37,"Joe":43}';
print_r(json_decode($jsonobj,true));
$array = json_decode($jsonobj,true);
echo "<br>L'age de Ben est : ".$array['Ben']; 
