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
                    <p>1 552 messages reçus</p>
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
                    <tr>
                        <td>68231</td>
                        <td>
                            <div class="product-name flex">
                                <div class="icon">
                                <ion-icon name="logo-amazon"></ion-icon>
                                </div>
                                <p>Amazon Kindle 4th Gen</p>
                            </div>
                        </td>
                        <td>Non traité</td>
                    </tr>
                    <tr>
                        <td>68231</td>
                        <td>
                            <div class="product-name iphone flex">
                                <div class="icon">
                                <ion-icon name="logo-apple"></ion-icon>
                                </div>
                                <p>Iphone 11 Pro</p>
                            </div>
                        </td>
                        <td>Non traité</td>
                    </tr>
                    <tr>
                        <td>68231</td>
                        <td>
                            <div class="product-name windows flex">
                                <div class="icon">
                                <ion-icon name="logo-microsoft"></ion-icon>
                                </div>
                                <p>WIndows 11</p>
                            </div>
                        </td>
                        <td>Traité</td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- End Product Stats -->

        <!-- End Stats -->
    </div>
    <!-- End Main Content -->
</div>
