<?php
   // connect to mongodb
    $m = new MongoClient();
   echo "Connection to database successfully\n";
   // select a database
   $db = $m->Alokdb;
   echo "Database mydb selected\n";
$collection = $db->createCollection("Alokcol");
   echo "Collection created succsessfully\n";

$path =  file_get_contents("http://restcountries.eu/rest/v1/all");
$json_file=json_decode($path);
echo "File decoded sucessfully\n";

$j=0;
foreach($json_file as $each)
{
        $name[]=$each-> name;
        $capital[]=$each-> capital;
        $document=array($name[$j]=> $capital[$j]);
        $collection->insert($document);
        $j++;
} 
echo " Inserted record Sucessfully";
?>
