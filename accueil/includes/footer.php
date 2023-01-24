<footer class="contact" id="ancre_5">
    <hr class="hr-contact">
    <div class="services">
        <div class="part_1">
            <div class="service">
                <h3>Catégories</h3>
                <nav>
                    <ul>
                        <li><a href="<?= $path ?>/news.php">News</a></li>
                        <li><a href="<?= $path ?>/Planetes.php">Planètes</a></li>
                        <li><a href="<?= $path ?>/Satellites.php">Satellites</a></li>
                        <li><a href="<?= $path ?>/Asteroides.php">Asteroïde</a></li>
                    </ul>
                </nav>
            </div>

            <div class="service">
                <h3>aide & information</h3>
                <nav>
                    <ul>
                        <li><a href="<?= $path ?>/Mention.php">Mention légales</a></li>
                        <li><a href="<?= $path ?>/Politique.php">Politique de confidentialité</a></li>
                        <li><a href="<?= $path ?>/Contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>

            <div class="service">
                <h3>nous suivre</h3>
                <nav>
                    <ul>
                        <li><a href="https://www.facebook.com/profile.php?id=100089621671053">Facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Linkedin</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div>
            <form action="" method="post">
                <div class="service">
                    <h3>restez informé</h3>
                    <input type="email" class="inp-form">
                    <input type="checkbox" id="ch1">
                    <label for="ch1">En vous inscrivant, vous acceptez de vous conformer à la <a href="Politique.php">Politique de Confidentialité</a>.</label>
                    <input type="submit" value="S'ABONNER" class="inp-form">
                </div>
            </form>
        </div>
        <div id="reseaux">
            <a href="https://www.facebook.com/profile.php?id=100089621671053">
                <div><img src="<?= $pathIcon ?>/FacebookIcon.png"></div>
            </a>
            <a href="">
                <div><img src="<?= $pathIcon ?>/InstagramIcon.png"></div>
            </a>
            <a href="">
                <div><img src="<?= $pathIcon ?>/TwitterIcon.png"></div>
            </a>
            <a href="">
                <div><img src="<?= $pathIcon ?>/LinkedInIcon.png"></div>
            </a>
        </div>
    </div>
</footer>
<script src="<?= $js ?>/gsap.min.js"></script>
<script src="<?= $js ?>/main.js"></script>