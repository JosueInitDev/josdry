<?php
require_once('../includes/constants.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('../includes/head.php') ?>
</head>
<body>
<?php include('../includes/navbar.php') ?>

<div class="contactUs">
    <div class="components">
        <div class="chip">
            Connexion
        </div>

        <div class="container" style="padding:50px 15px">
            <form action="../contact/traitement.php" method="post" class="row">
                <div class="form-group col-sm-6">
                    <label>Nom d'utilisateur <b style="color:red">*</b></label>
                    <div class="form">
                        <input type="text" name="username" class="form__input form-control" placeholder="Nom d'utilisateur ..." required>
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label>Mot de passe <b style="color:red">*</b></label>
                    <div class="form">
                        <input type="password" name="password" class="form__input form-control" placeholder="Mot de passe ...">
                    </div>
                </div>
                <div class="form-group col-sm-12">
                    <button class="btn btn__primary" type="submit" name="connexion" value="connexion">Connexion</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('../includes/footer.php') ?>
<?php include('../includes/foot.php') ?>
</body>
</html>
