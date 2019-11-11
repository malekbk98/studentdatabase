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
        $id = $_POST['id'];
        include 'dbconnexion.php';
        $req = $conx->prepare("UPDATE students SET firstname=:param_Firstname, lastname=:param_Lastname, email=:param_Email, phone=:param_Phone WHERE id=:param_id");

        $req->bindParam(':param_Firstname',$fname);
        $req->bindParam(':param_Lastname',$lname);
        $req->bindParam(':param_Email',$email);
        $req->bindParam(':param_Phone',$phone);
        $req->bindParam(':param_id',$id);
       try{
         $req->execute();
        }catch (Exception$alert){
            $alert=false;
        }
        if($alert)
        header("Location: index.php?alert=Update with Succes!");
        else
        header("Location: index.php?alert=Update Failed!");
?>