<?php
session_start();
include "php/script.php";
$errors=array();
if(!array_key_exists('nom',$_POST)||$_POST['nom']==""){
	$errors['nom']="Veuillez entrer votre nom";
}
if(!array_key_exists('mail',$_POST)||$_POST['mail']==""|| 
        !filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL)){
	     $errors['mail']="Votre e-mail n'est pas valide";
}
if(!array_key_exists('message',$_POST)||$_POST['message']==""){
	$errors['message']="Votre message est vide";
}

if(!empty($errors)){
	
	session_start();
	$_SESSION['errors']=$errors;
	header('location:contact.php');
	

}else{

    $_SESSION['sucess']=1;
	$nom=$_POST['nom'];
    $message=$_POST['message'];
	$mail=$_POST['mail'];
	$headers='FROM:'.$_POST['mail'];
	$req="INSERT INTO MESSAGE VALUES('','$nom','$mail',' $message',null)";
	mysqli_query($idconn,$req);
	
	
	/*mail('lmtailledepierres@gmail.com','Le nom '.$nom,$message,$headers);*/
    header('location:contact.php');

}
?>