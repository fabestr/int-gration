<?php
session_start();
var_dump($_FILES);//$_FILES = $_POST pour le fichiers de type file
var_dump($_POST);

include 'application/bdd_connection.php';

if(empty($_FILES)==false) {
    $tailleMax = 2097152; // taille max du fichier

    $extensionAccepted = array('jpg','jpeg','png','gif');//type de photo accepter

    if($_FILES['photo_project']['size'] <= $tailleMax) {// si la taille est bonne on passe a la condition suivante

//recuperation du nom d'extension (jpg png...)
        $extensionUpload = strtolower(substr(strrchr($_FILES['photo_project']['name'], '.'),1));

        if(in_array($extensionUpload, $extensionAccepted)) {
            //si l'entension est valide, je crée le chemin vers lequel la photo sera sauvegardé.

            $wayToRegisterPhoto = "img/photo_project/".$_POST['title_project'].".".$extensionUpload;

            //Déplacement du fichier de l'emplacement temporaire vers le chemin choisi precedemment

            $movePhoto = move_uploaded_file($_FILES['photo_project']['tmp_name'], $wayToRegisterPhoto);

            if($movePhoto){
                echo 'transfert reussi!';

                $query = $pdo->prepare // requete SQL
                        (
                            'INSERT INTO project(Title,Url,Photo)
                            VALUES (?,?,?)'
                        );

                        $query->execute([$_POST['title_project'], $_POST['url_project'],$_POST['title_project'].".".$extensionUpload]); 

                        header('Location:index.php');
                        exit();
                        

            }else {
                echo 'Problème au téléchargement!';
            }

        }else {
            echo 'mauvais format de photo. il faut: .jpg, .jpeg, .png, .gif';
        }

    }else {
        echo 'taille maximale de photo dépassée';
    }


} 


$template = 'add_project';
include 'layout.phtml';

?>