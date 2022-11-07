<?php
require 'php/header.php';
?>

<div class="home"></div>

<section>
    <h2>Contactez-nous</h2>
    <section class="form">
        <form action="php/form.php" method="post">
            <section>
                <div class="p">
                    <div class="form-g">
                        <label for="select" class="label-c label1">sujet* :</label>
                        <select required name="select" id="select">
                            <option value="" selected disabled hidden>--Choisir une demande--</option>
                            <option value="Demande professionnelle">Demande professionnelle</option>
                            <option value="Partenariat">Partenariat</option>
                            <option value="Contacte presse">Contacte presse</option>
                            <option value="Problème technique">Problème technique</option>
                        </select>
                    </div>
                    <div class="form-g">
                        <label for="surname" class="label-c label2">Nom* :</label>
                        <input type="text" placeholder="Ex : Dubroca" required name="surname" id="surname">
                    </div>
                    <div class="form-g">
                        <label for="name" class="label-c label3">Prenom :</label>
                        <input type="text" placeholder="Ex : Nicolas" name="name" id="name">
                    </div>
                    <div class="form-g">
                        <label for="email" class="label-c label4">e-mail* :</label>
                        <input type="email" placeholder="Ex : Bonjour@cestmoi24.com" required name="email" id="email">
                    </div>
                    <div class="form-g">
                        <label for="message" class="label-c label5">message* :</label>
                        <textarea spellcheck="true" placeholder="Ex : écrire un petit commentaire ;D" required name="message" id="message"></textarea>
                    </div>
                    <div class="form-g">
                        <label for="file" class="label-c label6">document joint (PNG, JPG, PDF):</label>
                        <input type="file" accept=".png, .jpg, .jpeg, .pdf" name="file" id="file">
                    </div>
                    <p>Les champs indiqués par une * sont obligatoires</p>
                    <div class="form-g">
                        <input type="checkbox" id="checkbox">
                        <label for="checkbox" required class="label-last">J'accepte les termes et conditions et la
                            politique de confidentialité&ensp;<a href="Politique.php"><b>lire les termes et
                                    conditions d'utilisation</b></a>.</label>
                    </div>
                </div>
                <input type="submit" value="Envoyer" name="sub" id="sub">
            </section>
        </form>
    </section>
</section>

<?php
require 'php/footer.php';
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
<script src="../Js/main.js"></script>
<script src="Js/contact.js"></script>


</body>

</php>