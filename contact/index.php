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
            Nous contacter / ou demander un devis pour un projet
        </div>

        <div class="container" style="padding:50px 15px">
            <div class="row">
                <div class="col">
                    <p><b>NB : </b> les champs marqués par <b style="color:red">*</b> sont obligatoires <br><br></p>
                </div>
            </div>
            <form action="traitement.php" method="post" class="row">
                <div class="form-group col-sm-6">
                    <label>Entrez votre nom <b style="color:red">*</b></label>
                    <div class="form">
                        <input type="text" name="nom" class="form__input form-control" placeholder="Prénom et nom ..." required>
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label>Entrez votre adresse email <b style="color:red">*</b></label>
                    <div class="form">
                        <input type="email" name="email" class="form__input form-control" placeholder="Adresse email ...">
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label>Entrez votre numéro de téléphone</label>
                    <div class="form">
                        <input type="number" name="telephone" class="form__input form-control" placeholder="Téléphone (ex : +33601010101)" required>
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label>Objet de votre demande <b style="color:red">*</b></label>
                    <div class="form">
                        <input type="text" name="sujet" class="form__input form-control" placeholder="Sujet ..." required>
                    </div>
                </div>
                <div class="form-group col-sm-12">
                    <label>Service</label>
                    <div class="form">
                        <select name="service" class="form__input form-control">
                            <option value="" disabled selected>Choisir un service</option>
                            <?php
                            foreach ($services as $key => $value){
                                echo "<option value='$key'>$value</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group col-sm-12">
                    <label>Objet de votre demande <b style="color:red">*</b></label>
                    <div class="form">
                        <textarea name="content" class="form__input form-control" placeholder="Expliquez-nous votre demande ici. Pour les documents, vous pourrez nous les partager plus tard ..." rows="6" style="height:auto" required></textarea>
                    </div>
                </div>
                <div class="form-group col-sm-12">
                    <button class="btn btn__primary" type="submit" name="submit">Envoyer</button>
                    <!-- <div class="btn btn__secondary">Button</div> -->
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('../includes/footer.php') ?>
<?php include('../includes/foot.php') ?>
</body>
</html>