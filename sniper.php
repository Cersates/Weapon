<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <title>Снайперские винтовки</title>
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
//                                $r = $db->select('pistol');
//                                $db->select('pistol');
//                                $res = $db->getResult();
//                                print_r($res);
//                                print_r($r);
//                               
                                $resultat = $db->select('sniper');


//$data = mysql_fetch_array($resultat)

                                while ($data = mysql_fetch_array($resultat)) {

                                    echo '<p><strong class = "big">Название: </strong>' . $data['name'] . '</p>';
                                    echo '<p><img class="a" src="photo/' . $data['photo'] . '"   height="300" align="middle"></p>';
                                    echo '<p><strong class = "big"><br>Калибр: </strong>' . $data['calibr'] . '</p>';
                                    echo '<p><strong class = "big">Вес: </strong>' . $data['weight'] . '</p>';
                                    echo '<p><strong class = "big">Длина ствола: </strong>' . $data['length'] . '</p>';
                                    echo '<p><strong class = "big">Колличество патронов: </strong>' . $data['capacity'] . '</p>';
                                    echo '<p><strong class = "big">Описание: </strong>' . $data['description'] . '</p>';
                                    $tab = "sniper";
                                    if ($_SESSION['type_user'] == 1) {
                                        echo '<p align = "right"><a href="DropData.php?id=' . $data['id'] . '&table=' . $tab . '&type=1">Удалить</a></p>';
                                        echo '<p align = "right"><a href="DropData.php?id=' . $data['id'] . '&table=' . $tab . '&type=2">Редактировать</a></p>';
                                    }
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