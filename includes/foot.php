<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $site_url ?>/js/three.min.js"></script>
<script src="<?php echo $site_url ?>/js/main.js"></script>

<?php

$ipinfo = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp"));

$pays_user= $ipinfo->geoplugin_countryName . "\n";
//$ville =  $ipinfo->geoplugin_city . "\n";
//$continent =  $ipinfo->geoplugin_continentName . "\n";
    require_once 'includes/db/dbConnect.php';
    $insertVisite = $db->prepare('INSERT INTO visite(pays, page, annee) VALUES (:pays, :page, :annee)');

    $insertVisite->bindValue(':pays', $pays_user, PDO::PARAM_STR);
    $insertVisite->bindValue(':page', 'landing-page', PDO::PARAM_STR);
    $insertVisite->bindValue(':annee', date('Y'), PDO::PARAM_STR);
    $insertVisite->execute();
?>