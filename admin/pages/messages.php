<div class="content">
    <!-- Main Content -->
    <div class="main-content">
        <!-- Head -->
        <div class="head flex">
            <h1><ion-icon name="mail-unread-outline" style="color:yellow"></ion-icon> Messages reçus</h1>
            <div class="box flex">
                <ion-icon name="search-outline"></ion-icon>
            </div>
        </div>
        <!-- End Head -->

        <?php

            $base_name = 'lovesfoo_appxcelerate';
            $username = 'lovesfoo';
            $password = '357a[F-IYY8nbx';
            $host = '/var/run/postgresql';
            //$db = new PDO('mysql:host='.$host.';dbname='.$base_name, $username, $password); // Connexion MYSQL

            // Connexion PostgreSQL
            $dsn = "pgsql:host=$host;port=5432;dbname=$base_name;";
            $db = new PDO($dsn, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

            $messages = $db->prepare("select * FROM contact order by id desc");
            $messages->execute();
            $rows = $messages->fetchAll();
        ?>

        <!-- Stats -->
        <div class="stats">
            <p>Ici, vous avez tous les messages reçus du plus recent au plus ancien.</p>
            <hr>
            <?php foreach ($rows as $row) : ?>
                <div class="stats-box earning" style="width:100%; position:relative">
                    <div class="status is-not-done">Non traité <a href="#">Marquer traité</a></div>
                    <div style="display:flex; flex-wrap:wrap; gap:20px">
                        <div style="background:#4e3c45; padding:10px"><b>Objet :</b> <?= $row['sujet'] ?></div>
                        <!--<div style="background:#4e3c45; padding:10px"><b>Service associé :</b> Site Web</div>-->
                        <div style="background:#4e3c45; padding:10px"><b>Nom :</b> <?= $row['nom'] ?></div>
                        <div style="background:#4e3c45; padding:10px"><b>Email :</b> <?= $row['email'] ?></div>
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