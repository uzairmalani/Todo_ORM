<?php 
require_once 'idiorm.php';
require_once 'confige.php';
class Database{

	public function add($n){
	$name = trim($_POST['name']);
	
	if (!empty($name)) {
	$today = date("Y-m-d H:i:s"); 
 	$addedQuery = ORM::for_table('item')->create(array(
	'description' => $name,
	'isdone' => 0,
	'createdt' => $today,
	'itemPosition' => $n,
	'listColor' => 'colorBlue'
	));
	$addedQuery->save();


 	}
 	
 }

 	public function ItemQuery()
 	{
 		$itemsQuery = ORM::for_table('item')->select('Id')->select('description')->select('isdone')->select('itemPosition')->select('listColor')->find_many();
 		$items =ORM::for_table('item')->count() ? $itemsQuery : [];

 		return $items;

 	}
 	public function del($Id){
  			$doneQuery = ORM::for_table('item')->use_id_column('Id')->find_one($Id);
  			print_r($doneQuery);
  			echo $Id;
 			$doneQuery->delete();
			
 	}


 	public function mark($Id){
 			$markQuery = ORM::for_table('item')->use_id_column('Id')->find_one($Id);
 			$markQuery->isdone = 1;
 			$markQuery->save();
 	}

 	public function ChangeColour($Color , $id){

			$ChangeColour = ORM::for_table('item')->use_id_column('Id')->find_one($id);
 			$ChangeColour->listColor = $Color;
 			$ChangeColour->save();
 	}
 	public function Drag($position, $id){

 		foreach($id as $k=>$v)
		{
			$drag = ORM::for_table('item')->use_id_column('Id')->find_one($v);
 			$drag->itemPosition = $position;
 			$drag->save();	
			$position++;
		}		
 	}
 	
}


?>