<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <title>Энциклопедия оружия</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="style.css" rel="stylesheet">
        <style>
            .leftimg {
                float:left; /* Выравнивание по левому краю */
                margin: 7px 7px 7px 0; /* Отступы вокруг картинки */
            }
            .rightimg  {
                float: right; /* Выравнивание по правому краю  */ 
                margin: 7px 0 7px 7px; /* Отступы вокруг картинки */
            }
        </style>
    </head>

    <body>
        <div class="wrapper">

            <header class="header">
                <a href="index.php"><img src="images/header.jpg" alt="Header" width="999" align="middle"></a>
            </header><!-- .header-->

            <div class="middle">

                <div class="container">
                    <main class="content">
                        <article class="size_text">
                            <p class="content_block">
                            <p>В современном XXI веке уже никого не удивишь понятием «оружие».  С самого своего рождения человек  сталкивается с этим смертельным понятием. Уже в раннем детстве детишки играют в своеобразные «войнушки» при помощи игрушечного оружия или используют для этих целей подручные предметы. Каждый из нас помнит водяные пистолеты, самострелы, рогатки,  самопалы… А потом обиды, синяки, ссадины, <span class="content_block"><img src="images/Weapon1.jpg" alt="Оружие" width="225" height="202" class="leftimg"></span>переломы…  Да, скажем мы, были времена. Есть, что вспомнить. Но уже в зрелом возрасте эти почтибезобидные забавы превращаются в настоящее кровопролитие, но уже при помощи иного вида оружия – оружия смертельного действия. И, велико счастье, если последствия сих «забав» будут лишь синяки, ссадины или переломы. Так бывает только в фильмах.Реальность диктует другой исход.</p> 
                            <p>Можно смело сказать, что оружие возникло почти одновременно с появлением сознания у человека. С того момента оно сильно изменилось, пройдя разные стадии развития: от примитивных дубин и палиц  до сверхсовременного огнестрельного оружия и оружия массового поражения. Современное оружие мало что имеет общее со своим предшественником. Оружие – это устройства, предметы, средства, используемые для уничтожения или подавления живой силы, техники, коммуникаций, строений противостоящей стороны (противника). Разновидностей оружия на сегодняшний день есть множество: от холодного до оружия массового поражения.<!-- .content --></p>
                        </article>
                    </main>
                </div><!-- .container-->

                <aside class="left-sidebar">
                    <ul class="main-menu">
                        
                        <?php
                        include('./Menu.php');
                        ?>
                    </ul>
                </aside><!-- .left-sidebar -->

            </div><!-- .middle-->

        </div><!-- .wrapper -->

        <footer class="footer">
            <p><strong>Одесса 2014 ©</strong></p>
        </footer><!-- .footer -->

    </body>
</html>