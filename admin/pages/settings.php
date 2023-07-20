<div class="content">
    <!-- Main Content -->
    <div class="main-content">
        <!-- Head -->
        <div class="head flex">
            <h1><ion-icon name="settings-outline"></ion-icon> Paramètres</h1>
            <div class="box flex">
                <ion-icon name="search-outline"></ion-icon>
            </div>
        </div>
        <!-- End Head -->

        <?php
            require_once '../includes/db/dbConnect.php';

            $query = $db->prepare('SELECT * FROM users');
            $query->execute();
            $rows = $query->fetchAll();
        ?>

        <!-- Stats -->
        <div class="stats">
            <p>Liste des admins :</p>
            <hr>
            <div class="stats-box earning" style="width:100%; height:100px; position:relative">
                <div style="display:flex; flex-wrap:wrap; gap:20px">
                    <?php foreach ($rows as $row) : ?>
                        <div style="background:#4e3c45; padding:10px">
                            Nom : <b><?= $row['nom'] ?></b><br>
                            Username : <i><?= $row['username'] ?></i><br>
                            Rôle : <i><?= $row['roles'] ?></i><br>
                            <a href="#" data-toggle="modal" data-target="#editPassModal<?= $row['id'] ?>">Modifier mon compte</a>
                        </div>




                        <!-- Modal -->
                        <div class="modal fade " id="editPassModal<?= $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="editPassModalLabel<?= $row['id'] ?>" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form action="traitement.php?id=<?= $row['id'] ?>" method="post">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editPassModalLabel<?= $row['id'] ?>">Modifier mot de passe : <?= $row['username'] ?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group mb-3">
                                                <label for="lastPass"></label>
                                                <input type="password" placeholder="Ancien mot de passe" name="lastPass" required id="lastPass" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="password1"></label>
                                                <input type="password" placeholder="Nouveau mot de passe" name="password1" required id="password1" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="password2"></label>
                                                <input type="password" placeholder="Confirmez nouveau mot de passe" name="password2" required id="password2" class="form-control">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" name="editPass" class="btn btn-primary">Modifier</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- End Stats -->
    </div>
    <!-- End Main Content -->
</div>

