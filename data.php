<?php
include'add.php';
 
$database = new Database();

if(isset($_GET['n']))
{
	$n = $_GET['n'];
	$database->add($n);
}

if(isset($_GET['item'])) 
{
	$item = trim($_GET['item']);
	$database->del($item);
}


if(isset($_POST['Color']) && isset($_POST['id']))
{
	echo $_POST['Color'];
	echo $_POST['id'];
	$Col=="colorBlue";
 	$Color = $_POST['Color'];

if($Color=="#73b8bf")
{
	$Col="colorBlue";
}elseif($Color=="#91bf4b")
{
	$Col="colorGreen";
}elseif($Color=="#c15c5c")
{
	$Col="colorRed";
}

$id    = $_POST['id'];
$database->ChangeColour($Col, $id);

}

if(isset($_POST['position']))
{
	$position = $_POST['position'];
	$i=1;
	$database->Drag($i, $position);

}

if (isset($_GET['mark_id']))
{
	$id = $_GET['mark_id'];

		$database->mark($id);
}

header('Location: index.php');

?>