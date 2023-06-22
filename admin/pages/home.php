<div class="content">
    <!-- Main Content -->
    <div class="main-content">
        <!-- Head -->
        <div class="head flex">
            <h1>Bonjour "nom celui connecté" 👋</h1>
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

            $resCountContact = $db->prepare("select count(*) as total FROM contact");
            $resCountDevis = $db->prepare("select count(*) as totalDevis FROM devis");
            $resCountContact->execute();
            $resCountDevis->execute();
            $totalContact = $resCountContact->fetchColumn();
            $totalDevis = $resCountDevis->fetchColumn();

            $total = $totalContact + $totalDevis;

            $messages = $db->prepare("select * FROM contact where etat = ? order by id desc LIMIT 3");
            $messages->bindValue(1, true, PDO::PARAM_BOOL);
            $messages->execute();
            $rows = $messages->fetchAll();

        ?>
        <!-- Stats -->
        <div class="stats flex">
            <div class="stats box sales">
                <h2 class="heading">Visites landing page</h2>
                <canvas id="sales"></canvas>
            </div>

            <div class="stats-box earning">
                <h2 class="heading">Visites page contact</h2>
                <div class="earning-amount flex-c">
                    <div class="earning-icon flex">
                        <ion-icon name="mail-unread-outline"></ion-icon>
                    </div>
                    <p>
                        <?php
                            if ($total > 1){
                                echo $total." messages reçus";
                            }else{
                                echo $total." message reçu";
                            }

                        ?>
                    </p>
                </div>
                <canvas id="earning"></canvas>
            </div>
        </div>

        <!-- Product Stats -->
        <div class="product-stats flex">
            <div class="product-sales stats-box">
                <h2 class="heading">Messages reçus par service</h2>
                <canvas id="products"></canvas>
            </div>

            <div class="top-selling stats-box">
                <h2 class="heading">Derniers messages reçus</h2>
                <table class="top-selling-products" height="100%" width="100%">
                    <tr>
                        <th>ID</th>
                        <th>Objet</th>
                        <th>Statut</th>
                    </tr>
                    <?php foreach ($rows as $row) : ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td>
                            <div class="product-name flex">
                                <div class="icon">
                                <ion-icon name="logo-amazon"></ion-icon>
                                </div>
                                <p><?= $row['sujet'] ?></p>
                            </div>
                        </td>
                        <td>Non traité</td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
        <!-- End Product Stats -->

        <!-- End Stats -->
    </div>
    <!-- End Main Content -->
</div>
