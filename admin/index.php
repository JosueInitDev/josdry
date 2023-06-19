<?php
require_once('../includes/constants.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_name ?></title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Dashboard// -->
    <div class="dashboard">
        <!-- Menu// -->
        <div class="menu flex-c">
            <div class="logo">
                <div class="icon">
                    <a href="?p=home"><img src="../img/logo.png" alt="" class="img-fluid"></a>
                </div>
            </div>

            <div class="navigation">
                <div class="icon" title="Accueil & stats" data-toggle="tooltip">
                    <a href="?p=home" style="color:#ccc"><ion-icon name="pulse-outline"></ion-icon></a>
                </div>

                <div class="icon" title="Messages reçus" data-toggle="tooltip">
                    <a href="?p=messages" style="color:#ccc"><ion-icon name="mail-unread-outline"></ion-icon></a>
                </div>

                <div class="icon" title="Projets réalisées" data-toggle="tooltip">
                    <a href="#" style="color:#ccc"><ion-icon name="storefront-outline"></ion-icon></a>
                </div>
            </div>

            <div class="settings">
                <div class="icon" title="Paramètres" data-toggle="tooltip">
                    <a href="?p=params" style="color:#ccc"><ion-icon name="settings-outline"></ion-icon></a>
                </div>
            </div>
        </div>
        <!-- End Menu -->
        <?php
        $page = (isset($_GET['p']))?(htmlspecialchars_decode($_GET['p'])):'home';
        switch ($page) {
            case 'home':
                include('pages/home.php');
            break;
            case 'messages':
                include('pages/messages.php');
            break;
            case 'params':
                include('pages/settings.php');
            break;
        }
        ?>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script
      type="module"
      src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</body>
</html>