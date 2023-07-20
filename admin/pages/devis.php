<div class="content">
    <!-- Main Content -->
    <div class="main-content">
        <!-- Head -->
        <div class="head flex">
            <h1><ion-icon name="mail-unread-outline" style="color:yellow"></ion-icon> Devis reçus</h1>
            <div class="box flex">
                <ion-icon name="search-outline"></ion-icon>
            </div>
        </div>
        <!-- End Head -->

        <?php
        require_once '../includes/db/dbConnect.php';
        $messages = $db->prepare("select * FROM devis order by id desc");
            $messages->execute();
            $rows = $messages->fetchAll();
        ?>
        <!-- Stats -->
        <div class="stats">
            <p>Ici, vous avez tous les devis reçus du plus recent au plus ancien.</p>
            <hr>
            <?php foreach ($rows as $row) : ?>
                <div class="stats-box earning" style="width:100%; position:relative">
                    <div class="status is-not-done">
                        <?php
                        if ($row['etat']){ ?>
                            <p style="color: orange">Non traité <a href="traitement.php?id=<?= $row['id']; ?>&action=devis">Marquer non traité</a></p>
                        <?php }else{ ?>
                            <p style="color: forestgreen">Traité <a href="traitement.php?id=<?= $row['id']; ?>&action=devis">Marquer non traité</a></p>
                        <?php } ?>
                    </div>
                    <div style="display:flex; flex-wrap:wrap; gap:20px">
                        <div style="background:#4e3c45; padding:10px"><b>Objet :</b> <?= $row['sujet'] ?></div>
                        <!--<div style="background:#4e3c45; padding:10px"><b>Service associé :</b> Site Web</div>-->
                        <div style="background:#4e3c45; padding:10px"><b>Nom :</b> <?= $row['nom'] ?></div>
                        <div style="background:#4e3c45; padding:10px"><b>Email :</b> <?= $row['email'] ?></div>
                        <div style="background:#4e3c45; padding:10px"><b>Service :</b> <?= $row['domaine'] ?></div>
                        <div style="background:#4e3c45; padding:10px"><b>Téléphone :</b> <?= $row['telephone'] ?></div>
                    </div>
                    <p><?= $row['content'] ?></p>
                </div>
                <hr>
            <?php endforeach; ?>

        </div>
        <!-- End Stats -->
    </div>
    <!-- End Main Content -->
</div>
