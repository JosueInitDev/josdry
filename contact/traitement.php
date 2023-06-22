<?php

    if (!isset($_POST['submit'])){
        header('Location: ./');
    }

    $nom = htmlentities(trim($_POST['nom']));
    $email = htmlentities(trim($_POST['email']));
    $telephone = htmlentities(trim($_POST['telephone']));
    $sujet = htmlentities(trim($_POST['sujet']));
    $service = htmlentities(trim($_POST['service']));
    $content = htmlentities(trim($_POST['content']));



    if ($nom == "" || $telephone == "" || $sujet == "" || $content == ""){
        header('Location: ./');
    }

    require_once '../includes/db/dbConnect.php';

$ipinfo = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp"));

$pays_user= $ipinfo->geoplugin_countryName . "\n";
//$ville =  $ipinfo->geoplugin_city . "\n";
//$continent =  $ipinfo->geoplugin_continentName . "\n";

    if ($service){


        $insert = $db->prepare('INSERT INTO devis(nom, email, telephone, sujet, domaine, content, etat) VALUES (:nom, :email, :telephone, :sujet, :domaine, :content, :etat)');
        $insertVisite = $db->prepare('INSERT INTO visite(pays, page, sujet, annee) VALUES (:pays, :page, :sujet, :annee)');

    try {
            $insert->bindValue(':nom', $nom, PDO::PARAM_STR);
            $insert->bindValue(':email', $email, PDO::PARAM_STR);
            $insert->bindValue(':telephone', $telephone, PDO::PARAM_STR);
            $insert->bindValue(':sujet', $sujet, PDO::PARAM_STR);
            $insert->bindValue(':domaine', $service, PDO::PARAM_STR);
            $insert->bindValue(':content', $content, PDO::PARAM_STR);
            $insert->bindValue(':etat', true, PDO::PARAM_BOOL);

            $insertVisite->bindValue(':pays', $pays_user, PDO::PARAM_STR);
            $insertVisite->bindValue(':page', 'devis', PDO::PARAM_STR);
            $insertVisite->bindValue(':sujet', $sujet, PDO::PARAM_STR);
            $insertVisite->bindValue(':annee', date('Y'), PDO::PARAM_STR);

            $insert->execute();
            $insertVisite->execute();

            header('Location: ./');
        }catch (Exception $e){
            die("Erreur lors de l'insertion : ".$e->getMessage());
            header('Location: ./');
        }
    }else{
        $insert = $db->prepare('INSERT INTO contact(nom, email, telephone, sujet, content, etat) VALUES (:nom, :email, :telephone, :sujet, :content, :etat)');
        $insertVisite = $db->prepare('INSERT INTO visite(pays, page, sujet, annee) VALUES (:pays, :page, :sujet, :annee)');
    try {
            $insert->bindValue(':nom', $nom, PDO::PARAM_STR);
            $insert->bindValue(':email', $email, PDO::PARAM_STR);
            $insert->bindValue(':telephone', $telephone, PDO::PARAM_STR);
            $insert->bindValue(':sujet', $sujet, PDO::PARAM_STR);
            $insert->bindValue(':content', $content, PDO::PARAM_STR);
            $insert->bindValue(':etat', true, PDO::PARAM_BOOL);

            $insertVisite->bindValue(':pays', $pays_user, PDO::PARAM_STR);
            $insertVisite->bindValue(':page', 'contact', PDO::PARAM_STR);
            $insertVisite->bindValue(':sujet', $sujet, PDO::PARAM_STR);
            $insertVisite->bindValue(':annee', date('Y'), PDO::PARAM_STR);

            $insert->execute();
            $insertVisite->execute();
            header('Location: ./');
        }catch (Exception $e){
            die("Erreur lors de l'insertion : ".$e->getMessage());
            header('Location: ./');
        }
    }