<header>
    <ul class="flexible justify-content-space-evenly">
        <?php if (isset($_SESSION["user"])) : ?>
            <li class="menu"><a href="/">Acceuil</a></li>
            <li class="menu"><a href="modCree">Vos Mods</a></li>
            <li class="menu"><a href="updateProfil">Profil</a></li>
            <li class="menu"><a href="deconnexion">Déconnexion</a></li>
        <?php else : ?>
            <li class="menu"><a href="inscription">Inscription</a></li>
            <li class="menu"><a href="connexion">Connexion</a></li>
        <?php endif ?>
    </ul>
</header>