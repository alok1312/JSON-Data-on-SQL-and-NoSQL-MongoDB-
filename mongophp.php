<?php
   // connect to mongodb
    $m = new MongoClient();
   echo "Connection to database successfully";
   // select a database
   $db = $m->Alokdb;
   echo "Database mydb selected";
$collection = $db->createCollection("Alokcol");
   echo "Collection created succsessfully";
$get_file=file_get_contents(home/alok1312/Desktop
MOCK_DATA(1).json);
$json_file=json_decode($get_file);
	
$k=0;
foreach($json_out as $each)
{
	$id[]=$each-> id;
	$first_name[]=$each-> first_name;
        $last_name[]=$each-> last_name;
	$document=array( $id[$k]=> $value[$k], $first_name[$k] => $value[$k], $last_name[$k]=> $value[$k]);
	$collection->insert($document);
	$k++;
}

?>

