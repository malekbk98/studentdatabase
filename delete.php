<!--
    Author: Malek Ben Khalifa
    Date: 28-10-2019
    Exercice: TP3
-->

<?php
$id=$_GET['id'];
		$alert=true;
        include 'dbconnexion.php';
        $req = $conx->prepare("DELETE FROM students WHERE id=:param_id");
	    $req->bindParam(':param_id',$id);
	    try{
	   	 $req->execute();
	   	}catch (Exception$alert){
	   		$alert=false;
	   	}
	   	if($alert)
	    header("Location: index.php?alert=Delete Succes!");
		else
		header("Location: index.php?alert=Delete Failed!");

?>