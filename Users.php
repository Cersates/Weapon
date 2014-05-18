<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <title>Пулеметы</title>
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



                                <?php
                                include('./DataBase.php');
                                $db = new DataBase();
                                $db->connect();
                                $resultat = $db->select('user');


//$data = mysql_fetch_array($resultat)

                                while ($data = mysql_fetch_array($resultat)) {

                                    echo '<p><strong class = "big">Пользователь: </strong>' . $data['login'] . '</p>';
                                    if ($data['type']) {
                                        $t = "Администратор";
                                    } else {
                                        $t = "Пользователь";
                                    }
                                    echo '<p><strong class = "big">Тип: </strong>' . $t . '</p>';
                                    echo"
                                    <a href = 'DropUser.php?id=" . $data['id'] . "' >Удалить</a>
                                    ";

                                    echo '<hr>';
                                }
                                ?>

                            </p>

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