<?php session_start(); ?>

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


                            <?php
                            header("Content-Type: text/html;charset=utf-8");

                            $id = $_GET["id"];
                            $table = $_GET["table"];
                            $type = $_GET["type"];
                            include('./DataBase.php');
                            $db = new Database();
                            $db->connect();
                            if ($type == 1) {
                                $delete = 'DELETE FROM  ' . $table . ' WHERE ' . "id = " . $id;
                                $del = mysql_query($delete);
                                echo '<script type="text/javascript">
                                        window.location = "index.php";
                                        </script>';
                            } else {
                                $resultat = $db->select($table);
                                while ($data = mysql_fetch_array($resultat)) {
                                    if ($data['id'] == $id) {
                                        echo "<h1>Редактирование записи</h1><br>
                                            <form name='add_breed' enctype='multipart/form-data' method='POST' action='action_update.php?id=" . $id . "&table=" . $table . "' class = ' radial'>
                                            <b>Введите Название:</b><br>
                                            <input value=" . $data['name'] . " required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'name'><br>
                                            <b>Введите калибр:</b><br>
                                            <input value=" . $data['calibr'] . " required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'calibr'><br>
                                            <b>Введите вес:</b><br>
                                            <input value=" . $data['weight'] . " required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'weight'><br>
                                            <b>Введите длину ствола:</b><br>
                                            <input value=" . $data['length'] . " required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'length'><br>
                                            <b>Введите колличество патронов:</b><br>
                                            <input  value=" . $data['capacity'] . " required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'capacity'><br>
                                            <b>Введите Описание:</b><br>
                                            <textarea   name='description' cols='40' rows='10' class = 'inp radial'>" . $data['description'] . "</textarea><br>
                                            <input type = 'submit' name = 'autoriz_btn' value = 'Обновить' size = '40' class = 'auto_btn radial'>
                                            </form>";
                                    }
                                }
                            }
                            ?> 
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