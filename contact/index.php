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
                <form action="#" method="post" class="row">
                    <div class="form-group col-sm-6">
                        <label>Entrez votre nom <b style="color:red">*</b></label>
                        <div class="form">
                            <input type="text" class="form__input form-control" placeholder="Prénom et nom ..." required>
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Entrez votre adresse email <b style="color:red">*</b></label>
                        <div class="form">
                            <input type="email" class="form__input form-control" placeholder="Adresse email ..." required>
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Entrez votre numéro de téléphone</label>
                        <div class="form">
                            <input type="number" class="form__input form-control" placeholder="Téléphone (ex : +33601010101)">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Objet de votre demande <b style="color:red">*</b></label>
                        <div class="form">
                            <input type="text" class="form__input form-control" placeholder="Sujet ..." required>
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label>Service <b style="color:red">*</b></label>
                        <div class="form">
                            <select class="form__input form-control">
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
                            <textarea class="form__input form-control" placeholder="Expliquez-nous votre demande ici. Pour les documents, vous pourrez nous les partager plus tard ..." required rows="6" style="height:auto"></textarea>
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <button class="btn btn__primary" type="submit">Envoyer</button>
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