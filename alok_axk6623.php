<?php
   // connect to mongodb
    $m = new MongoClient();
   echo "Connection to database successfully";
   // select a database
   $db = $m->Alokdb;
   echo "Database mydb selected";
$collection = $db->createCollection("Alokcol");
   echo "Collection created succsessfully";


	$path =  get_include_path('/home/alok1312/Desktop/alok.json');
	ini_set('include_path', '/home/alok1312/Desktop/alok.json');
	$json_file=json_decode($path);
        
	$k=0;
	foreach($json_out as $each)
	{
        $id[]=$each-> id;
        $first_name[]=$each-> first_name;
        $last_name[]=$each-> last_name;
        $document=array( $id[$k]=> $value[$k], $first_name[$k] => $value[$k], $last_name[$k]=> $value[$k]);
        
	$collection->insert($document);
        $k++;
	echo "Document inserted successfully";


?>
