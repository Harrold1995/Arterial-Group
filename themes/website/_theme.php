<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta http-equiv="Cache-control" content="public">
        <meta name="robots" content="noindex, nofollow" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <meta name="theme-color" content="#fd8009">
        <meta name="msapplication-navbutton-color" content="#fd8009">
        <meta name="apple-mobile-web-app-status-bar-style" content="#fd8009">
        <link rel="shortcut icon" type="image/jpg" href="<?= theme("/assets/images/icons/favicon.png"); ?>" />


        <?= $head; ?>

        <link href="<?= theme("/dist/css/style.css") ?>" rel="stylesheet">

        <?= $v->section("styles"); ?>


        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-61693371-1"></script>
        <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-61693371-1', {
            'allowAnchor': true
        });
        ga('send', 'pageview', {
            'page': location.pathname + location.search + location.hash
        });
        </script>

    </head>


    <body class="<?= (isset($body_tag_class) ? $body_tag_class : '') ?>">
        <div class="loader" id="loader">
            <div class="spinner-container d-flex justify-content-center align-items-center">

                <div class="el-holder text-center">
                    <div class="logo mb-5">
                        <img src="<?= theme('/assets/images/Arterial_Group_logo.png') ?>" alt="Arterial Group logo">
                    </div>
                    <div class="spinner-grow text-light" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>

            </div>
        </div>

        <?= $v->section("content"); ?>



        <?= $v->insert("inc/footer"); ?>

    </body>


    <script src="<?= theme("/dist/js/script.js"); ?>"></script>


    <?= $v->section("scripts"); ?>

</html>
