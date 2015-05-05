<?php
session_start();
$errors=array();
if(!array_key_exists('mail',$_POST)||$_POST['mail']==""|| !filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL)){
	$errors['mail']="Votre e-mail n'est pas valide";
}
if(!array_key_exists('remarque',$_POST)||$_POST['remarque']==""){
	$errors['remarque']="Votre message est vide";
}

if(!empty($errors)){
	
	session_start();
	$_SESSION['errors']=$errors;
	header('location:remarque.php');
	

}else{

    $_SESSION['sucess']=1;
    $message=$_POST['remarque'];
	$headers='FROM:'.$_POST['mail'];
	
	mail('elachirib@gmail.com',$_SESSION['pseudo'].'_cantact_portfolio',$message,$headers);
    header('location:remarque.php');

}
?>