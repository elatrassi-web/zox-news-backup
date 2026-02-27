</div><style>
    /* --- DESIGN FOOTER ANGERS INFO --- */
    .ai-footer-wrapper {
        background-color: #1a1a8c; /* Bleu profond */
        color: #ffffff;
        font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        width: 100%;
        margin-top: 40px;
        clear: both;
    }

    .ai-footer-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        display: flex;
        justify-content: center;
        align-items: center; /* Pour que les séparateurs fassent toute la hauteur */
        flex-wrap: wrap;
    }

    .ai-footer-main {
        padding: 60px 0;
    }

    /* Colonnes */
    .ai-footer-col {
        flex: 1;
        min-width: 300px;
        padding: 0 40px;
        box-sizing: border-box;
    }

    /* Séparateurs verticaux */
    .ai-footer-col:not(:first-child) {
        border-left: 1px solid rgba(255, 255, 255, 0.2);
    }

    /* Titres */
    .ai-footer-title {
        font-size: 22px;
        font-weight: 800;
        margin-bottom: 25px;
        margin-top: 0;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: white;
        font-family: 'Oswald', sans-serif;
    }

    /* Colonne 1 : Logo & Social */
    .ai-footer-logo img {
        max-width: 200px;
        height: auto;
        margin-bottom: 35px;
    }

    .ai-social-section {
        margin-top: 20px;
        display: flex;
        flex-direction: column;
        align-items: center; /* Centre horizontalement le titre et les icônes */
        text-align: center;
    }

    .ai-social-icons {
        display: flex;
        gap: 15px;
        margin-top: 15px;
        justify-content: center; /* Centre les icônes entre elles */
    }

    .ai-social-icons a {
        color: #ffffff;
        font-size: 22px;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .ai-social-icons a:hover {
        color: #f39200;
    }

    /* Colonne 2 : Catégories */
    .ai-nav-categories ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .ai-nav-categories ul li {
        margin-bottom: 12px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        padding-bottom: 8px;
    }

    .ai-nav-categories ul li a {
        color: #ffffff;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 15px;
        font-weight: 600;
        transition: padding-left 0.2s;
    }

    .ai-nav-categories ul li a:hover {
        color: #f39200;
        padding-left: 5px;
    }

    /* Colonne 3 : Publicité */
    .ai-ad-box {
        width: 300px;
        height: 250px;
        background-color: transparent; /* On enlève le gris si la pub charge */
        border: 2px solid rgba(255, 255, 255, 0.1); /* Bordure discrète */
        display: block; /* On repasse en block pour laisser le script gérer l'interne */
        margin: 0 auto;
        overflow: hidden; /* Empêche tout débordement */
    }

    /* On s'assure que l'image de la pub remplit bien le carré */
    .ai-ad-box img {
        max-width: 100%;
        display: block;
    }

    /* Si la pub n'est pas encore chargée, on peut garder un style par défaut
       uniquement s'il n'y a pas d'iframe à l'intérieur */
    .ai-ad-box:empty {
        background-color: #cccccc;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .ai-ad-box:empty:before {
        content: "300x250";
        color: #333;
        font-weight: bold;
    }

    .ai-ad-content {
        text-align: center;
        color: #222;
    }

    .ai-ad-label {
        display: block;
        font-weight: 900;
        font-size: 16px;
        text-transform: uppercase;
    }

    .ai-ad-size {
        display: block;
        font-size: 18px;
        margin-top: 5px;
    }

    /* Barre basse Orange */
    .ai-footer-bottom {
        background-color: #f39200; /* Orange du logo */
        padding: 15px 0;
    }

    .ai-copyright-flex {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
    }

    .ai-copyright-flex p, .ai-copyright-flex a {
        margin: 0;
        font-size: 14px;
        font-weight: 600;
        color: #ffffff !important;
        text-decoration: none;
    }

    .ai-copyright-flex a:hover {
        text-decoration: underline;
    }

    /* Mobile Responsive */
    @media (max-width: 992px) {
        .ai-footer-container {
            flex-direction: column;
            align-items: center;
        }
        .ai-footer-col {
            border-left: none !important;
            text-align: center;
            padding: 30px 0;
            width: 100%;
        }
        .ai-social-icons {
            justify-content: center;
        }
        .ai-ad-box {
            margin: 0 auto;
        }
    }
</style>
<footer class="ai-footer-wrapper">
    <div class="ai-footer-main">
        <div class="ai-footer-container">

            <div class="ai-footer-col">
                <div class="ai-footer-logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="https://my-angers.info/wp-content/uploads/2026/02/logo-angers-info-responsive.png" alt="Angers Info">
                    </a>
                </div>
                <div class="ai-social-section">
                    <h3 class="ai-footer-title">SUIVEZ-NOUS</h3>
                    <div class="ai-social-icons">
                        <a href="https://www.facebook.com/angersinfo" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://x.com/angersinfo" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="https://www.instagram.com/angersinfo" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.youtube.com/angersinfo" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                        <a href="https://www.tiktok.com/@angersinfo" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                    </div>
                </div>
            </div>

            <div class="ai-footer-col">
                <h3 class="ai-footer-title">NOS CATÉGORIES</h3>
                <nav class="ai-nav-categories">
                    <?php
                    if (has_nav_menu('footer-menu')) {
                        wp_nav_menu(array('theme_location' => 'footer-menu', 'container' => ''));
                    } else {
                        echo '<ul class="menu">
<li>
<a href="./en-direct">En Direct</a>
</li>
<li>
<a href="./economie">Économie</a>
</li>
<li>
<a href="./sport">Sport</a>
</li>
<li>
<a href="./edition">Édition</a>
</li>
<li>
<a href="./culture">Culture</a></li></ul>';
                    }
                    ?>
                </nav>
            </div>

            <div class="ai-footer-col">
                <h3 class="ai-footer-title">PUBLICITÉS</h3>
                <div class="ai-ad-box">
                    <?php echo adrotate_group(6); ?>
                </div>
            </div>

        </div>
    </div>

    <div class="ai-footer-bottom">
        <div class="ai-footer-container">
            <div class="ai-copyright-flex">
                <p>© <?php echo date('Y'); ?> Angers Info.</p>
                <a href="/mentions-legales">Mentions Légales</a>
                <a href="/politique-de-confidentialite">Politique de Confidentialité</a>
            </div>
        </div>
    </div>
    <script>
        (function($) {
            $(document).on('mvp-alp-load', function() {
                // Cette fonction détecte quand Zox News charge un nouvel article
                $('.adsbygoogle').each(function() {
                    // Si le bloc n'a pas encore été traité par Google
                    if ($(this).attr('data-adsbygoogle-status') !== 'done') {
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    }
                });
            });
        })(jQuery);
    </script>
</footer>

<?php wp_footer(); ?>
</body>
</html>