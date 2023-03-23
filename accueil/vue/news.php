<body>
    <div class="home"></div>

    <!-- template pour afficher news -->
    <section>
    <div class="regroup">
            <?php $objet = afficheObj($db, $id); ?>
            <?php foreach ($objet as $objet) : ?>
                <div class="Titre_card">
                    <div>
                        <h1><?= $objet["nom_Objet"] ?></h1>
                    </div>
                    <div class="card">
                        <div class="circle"></div>
                        <div class="content">
                            <h3><?= $objet["nom_Objet"] ?></h3>
                            <p><?= $objet["resum"] ?></p>
                            <a href="controller_Page.php?page=planete_profil">En savoir plus</a>
                        </div>
                        <img src="<?= $objet["url_img_Objet"] ?>" alt="<?= $objet["nom_Objet"] ?>">
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </section>
</body>

</html>