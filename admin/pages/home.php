<div class="content">
    <!-- Main Content -->
    <div class="main-content">
        <!-- Head -->
        <div class="head flex">
            <h1>Bonjour <?= $_SESSION['username']; ?> 👋</h1>
            <button type="button" data-toggle="modal" data-target="#ajoutAdminModal" class="heading btn btn-primary btn-lg mr-3">Inscrire admin</button>
            <div class="box flex">
                <ion-icon name="search-outline"></ion-icon>
            </div>
        </div>
        <!-- End Head -->
        <?php
        require '../includes/db/dbConnect.php';

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


        $resTotalVisiteDevis = $db->prepare("select count(*) as totalVisiteDevis FROM visite WHERE page = ?");
        $resTotalVisiteDevis->bindValue(1, "devis", PDO::PARAM_STR);
        $resTotalVisiteDevis->execute();
        $totalVisiteDevis = $resTotalVisiteDevis->fetchColumn();

        $resTotalVisiteContact = $db->prepare("select count(*) as totalVisiteContact FROM visite WHERE page = ?");
        $resTotalVisiteContact->bindValue(1, "contact", PDO::PARAM_STR);
        $resTotalVisiteContact->execute();
        $totalVisiteContact = $resTotalVisiteContact->fetchColumn();

        $resTotalVisiteLanding = $db->prepare("select count(*) as totalVisiteLanding FROM visite WHERE page = ?");
        $resTotalVisiteLanding->bindValue(1, "landing", PDO::PARAM_STR);
        $resTotalVisiteLanding->execute();
        $totalVisiteLanding = $resTotalVisiteLanding->fetchColumn();

        ?>
        <!-- Stats -->
        <div class="stats flex">

            <!-- Modal -->
            <div class="modal fade " id="ajoutAdminModal" tabindex="-1" role="dialog" aria-labelledby="ajoutAdminModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action="traitement.php" method="post">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ajoutAdminModalLabel">Inscription</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group mb-3">
                                    <label for="nom"></label>
                                    <input type="text" placeholder="Nom" name="nom" required id="nom" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="username"></label>
                                    <input type="text" placeholder="Username" name="username" required id="username" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="password"></label>
                                    <input type="password" placeholder="Password" name="password" required id="password" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="role"></label>
                                    <select name="roles" id="" required class="form-control">
                                        <option value="">Veuillez choisir un rôle</option>
                                        <option value="ROLE_ADMIN">Rôle admin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="addAdmin" class="btn btn-primary">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="stats box sales">
                <h2 class="heading">Visites landing page (<?= $totalVisiteLanding ?>)</h2>
                <canvas id="sales"></canvas>
            </div>

            <div class="stats-box earning">
                <h2 class="heading">Visites page contact (<?= $totalVisiteContact + $totalVisiteDevis ?>)</h2>
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
                        <td>
                            <?php
                            if ($row['etat']){ ?>
                                Non traité
                            <?php }else{ ?>
                                Traité
                            <?php } ?>
                        </td>
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
