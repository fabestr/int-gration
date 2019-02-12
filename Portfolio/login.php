<?php
session_start();

if(empty($_POST)==false) {
    //var_dump($_POST);

    $pdo = new PDO('mysql:host=localhost;dbname=portfolio', 'root', 'troiswa');

	$pdo->exec('SET NAMES UTF8');
    
    $query = $pdo->prepare
	(
	    'SELECT * FROM users WHERE email= ? AND psw=?'
	);

	$query->execute( [ $_POST['email'],$_POST['psw'] ] );
    
    $user = $query->fetch(PDO::FETCH_ASSOC);

	if( $user['email'] == $_POST['email'] && $user['psw'] == $_POST['psw'] ) {
    
    	//var_dump('connecté');
        
        $_SESSION['email'] = $user['email'];
        $_SESSION['psw'] = $user['psw'];
        $_SESSION['firstName'] = $user['firstName'];
        $_SESSION['lastName'] = $user['lastName'];
        $_SESSION['pseudo'] = $user['pseudo'];
        
        //var_dump($_SESSION);

        header('Location: index.php');
        exit();
    }


}



$template = 'login';
include 'layout.phtml';

?>