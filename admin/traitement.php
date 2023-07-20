<?php session_start();
if (!isset($_SESSION['username'])){ header('Location: ./../'); }
if (isset($_POST) && isset($_POST['addAdmin'])){
    $nom = htmlentities(trim($_POST['nom']));
    $username_input = htmlentities(trim($_POST['username']));
    $password_input = htmlentities(trim($_POST['password']));
    $roles = htmlentities(trim($_POST['roles']));
    if ($nom && $username_input && $password_input && $roles){
        $password_input = password_hash($password_input, PASSWORD_DEFAULT);
        require_once '../includes/db/dbConnect.php';

        try {

            $query = $db->prepare('SELECT * FROM users WHERE username = ?');
            $query->execute([$username_input]);
            $row = $query->fetch();

            if (!$row){
                $insert = $db->prepare('INSERT INTO users(nom, username, password, roles) VALUES(:nom, :username, :password, :roles)');
                $insert->bindValue(':nom', $nom, PDO::PARAM_STR);
                $insert->bindValue(':username', $username_input, PDO::PARAM_STR);
                $insert->bindValue(':password', $password_input, PDO::PARAM_STR);
                $insert->bindValue(':roles', $roles, PDO::PARAM_STR);
                $insert->execute();

                header('Location: index.php?p=params');
            }else{
                header('Location: index.php?p=home');
            }


        }catch (Exception $e){

        }

    }
} elseif (isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] == "contact"){
    $id = htmlentities(trim($_GET['id']));
        require_once '../includes/db/dbConnect.php';
        try {

            $query = $db->prepare('SELECT * FROM contact WHERE id = ?');
            $query->execute([$id]);
            $row = $query->fetch();

            if ($row){
                $insert = $db->prepare('UPDATE contact SET etat = ? WHERE id = ?');
                $etat = $row['etat'] ? false : true;
                $insert->bindValue(1, $etat, PDO::PARAM_BOOL);
                $insert->bindValue(2, $row['id'], PDO::PARAM_INT);
                $insert->execute();
                header('Location: index.php?p=messages');
            }else{
                header('Location: index.php?p=messages');
            }


        }catch (Exception $e){

        }
}elseif (isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] == "devis"){
    $id = htmlentities(trim($_GET['id']));
        require_once '../includes/db/dbConnect.php';
        try {

            $query = $db->prepare('SELECT * FROM devis WHERE id = ?');
            $query->execute([$id]);
            $row = $query->fetch();

            if ($row){
                $insert = $db->prepare('UPDATE devis SET etat = ? WHERE id = ?');
                $etat = $row['etat'] ? false : true;
                $insert->bindValue(1, $etat, PDO::PARAM_BOOL);
                $insert->bindValue(2, $row['id'], PDO::PARAM_INT);
                $insert->execute();
                header('Location: index.php?p=devis');
            }else{
                header('Location: index.php?p=devis');
            }


        }catch (Exception $e){

        }
} elseif (isset($_POST) && isset($_POST['editPass']) && isset($_GET['id'])){
    $lastPass = htmlentities(trim($_POST['lastPass']));
    $password1 = htmlentities(trim($_POST['password1']));
    $password2 = htmlentities(trim($_POST['password2']));
    $password2 = htmlentities(trim($_POST['password2']));
    $id = htmlentities(trim($_GET['id']));

    if ($lastPass && $password1 && $password2 && $id){
        if ($password1 === $password2){

            require_once '../includes/db/dbConnect.php';

            $query = $db->prepare('SELECT * FROM users WHERE id = ?');
            $query->execute([$id]);
            $row = $query->fetch();
            if ($row){
                if (password_verify($lastPass, $row['password'])){
                    $password_input = password_hash($password1, PASSWORD_DEFAULT);
                    $update = $db->prepare('UPDATE users SET password = :password WHERE id = :id');
                    $update->bindValue(':password', $password_input, PDO::PARAM_STR);
                    $update->bindValue(':id', $row['id'], PDO::PARAM_INT);
                    $update->execute();
                }else{
                    var_dump('----Ok');
                }
            }else{
                var_dump('---Ok');
            }
        }else{
            var_dump('--Ok');
        }
    }else{
        var_dump('-Ok');
    }
    header('Location: index.php?p=params');
}else{
    header('Location: index.php?p=home');
}
