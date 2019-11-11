<!--
    Author: Malek Ben Khalifa
    Date: 28-10-2019
    Exercice: TP3
-->

<?php
     	$alert=true;
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        require 'dbconnexion.php';
        $req=$conx->prepare('INSERT INTO students (firstname, lastname, email, phone) VALUES (:param_Firstname,:param_Lastname,:param_Email,:param_Phone)');

$req->bindParam(':param_Firstname',$fname);
$req->bindParam(':param_Lastname',$lname);
$req->bindParam(':param_Email',$email);
$req->bindParam(':param_Phone',$phone);
	    try{
	   	 $req->execute();
	   	}catch (Exception$alert){
	   		$alert=false;
	   	}
	   	if($alert)
	    header("Location: index.php?alert=Insert with Succes!");
		else
		header("Location: index.php?alert=Insert Failed!");

?>




