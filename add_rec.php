<?php session_start(); ?>
<?php
print_r($_SESSION);

include('./DataBase.php');
$db = new Database();
$db->connect();
?>

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
                        if (($_SESSION['qOk']) == 1) {
                            echo "<h3>Запись была успешно вставлена</h3><br>";
                        }

                        if ($_GET['type'] == 1) {
                            echo "<h1>Вставка записей</h1><br>
			<form name='add_breed' enctype='multipart/form-data' method='POST' action='action_add.php?add=1' class = ' radial'>
                        <b>Введите Название:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f1'><br>
                        <b>Введите калибр:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f2'><br>
                        <b>Введите вес:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f3'><br>
                        <b>Введите длину ствола:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f4'><br>
                        <b>Введите колличество патронов:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f5'><br>
                        <b>Введите Описание:</b><br>
                        <textarea name='f6' cols='40' rows='10' class = 'inp radial'></textarea><br>
                        <b>Выберите фотографию:</b><br>
                        <input required type='file' class = 'inp radial' name = 'img'><br>
                        <input type = 'submit' name = 'autoriz_btn' value = 'Добавить' size = '40' class = 'auto_btn radial'>
                        </form>";
                        }

                        if ($_GET['type'] == 2) {
                            echo "<h1>Вставка записей</h1><br>
			<form name='add_breed' enctype='multipart/form-data' method='POST' action='action_add.php?add=2' class = ' radial'>
                        <b>Введите Название:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f1'><br>
                        <b>Введите калибр:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f2'><br>
                        <b>Введите вес:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f3'><br>
                        <b>Введите длину ствола:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f4'><br>
                        <b>Введите колличество патронов:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f5'><br>
                        <b>Введите Описание:</b><br>
                        <textarea name='f6' cols='40' rows='10' class = 'inp radial'></textarea><br>
                        <b>Выберите фотографию:</b><br>
                        <input required type='file' class = 'inp radial' name = 'img'><br>
                        <input type = 'submit' name = 'autoriz_btn' value = 'Добавить' size = '40' class = 'auto_btn radial'>
                        </form>";
                        }

                        if ($_GET['type'] == 3) {
                            echo "<h1>Вставка записей</h1><br>
			<form name='add_breed' enctype='multipart/form-data' method='POST' action='action_add.php?add=3' class = ' radial'>
                        <b>Введите Название:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f1'><br>
                        <b>Введите калибр:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f2'><br>
                        <b>Введите вес:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f3'><br>
                        <b>Введите длину ствола:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f4'><br>
                        <b>Введите колличество патронов:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f5'><br>
                        <b>Введите Описание:</b><br>
                        <textarea name='f6' cols='40' rows='10' class = 'inp radial'></textarea><br>
                        <b>Выберите фотографию:</b><br>
                        <input required type='file' class = 'inp radial' name = 'img'><br>
                        <input type = 'submit' name = 'autoriz_btn' value = 'Добавить' size = '40' class = 'auto_btn radial'>
                        </form>";
                        }

                        if ($_GET['type'] == 4) {
                            echo "<h1>Вставка записей</h1><br>
			<form name='add_breed' enctype='multipart/form-data' method='POST' action='action_add.php?add=4' class = ' radial'>
                        <b>Введите Название:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f1'><br>
                        <b>Введите калибр:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f2'><br>
                        <b>Введите вес:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f3'><br>
                        <b>Введите длину ствола:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f4'><br>
                        <b>Введите колличество патронов:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f5'><br>
                        <b>Введите Описание:</b><br>
                        <textarea name='f6' cols='40' rows='10' class = 'inp radial'></textarea><br>
                        <b>Выберите фотографию:</b><br>
                        <input required type='file' class = 'inp radial' name = 'img'><br>
                        <input type = 'submit' name = 'autoriz_btn' value = 'Добавить' size = '40' class = 'auto_btn radial'>
                        </form>";
                        }

                        if ($_GET['type'] == 5) {
                            echo "<h1>Вставка записей</h1><br>
			<form name='add_breed' enctype='multipart/form-data' method='POST' action='action_add.php?add=5' class = ' radial'>
                        <b>Введите Название:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f1'><br>
                        <b>Введите калибр:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f2'><br>
                        <b>Введите вес:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f3'><br>
                        <b>Введите длину ствола:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f4'><br>
                        <b>Введите колличество патронов:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f5'><br>
                        <b>Введите Описание:</b><br>
                        <textarea name='f6' cols='40' rows='10' class = 'inp radial'></textarea><br>
                        <b>Выберите фотографию:</b><br>
                        <input required type='file' class = 'inp radial' name = 'img'><br>
                        <input type = 'submit' name = 'autoriz_btn' value = 'Добавить' size = '40' class = 'auto_btn radial'>
                        </form>";
                        }

                        if ($_GET['type'] == 6) {
                            echo "<h1>Вставка записей</h1><br>
			<form name='add_breed' enctype='multipart/form-data' method='POST' action='action_add.php?add=6' class = ' radial'>
                        <b>Введите Название:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f1'><br>
                        <b>Введите калибр:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f2'><br>
                        <b>Введите вес:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f3'><br>
                        <b>Введите длину ствола:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f4'><br>
                        <b>Введите колличество патронов:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f5'><br>
                        <b>Введите Описание:</b><br>
                        <textarea name='f6' cols='40' rows='10' class = 'inp radial'></textarea><br>
                        <b>Выберите фотографию:</b><br>
                        <input required type='file' class = 'inp radial' name = 'img'><br>
                        <input type = 'submit' name = 'autoriz_btn' value = 'Добавить' size = '40' class = 'auto_btn radial'>
                        </form>";
                        }

                        if ($_GET['type'] == 7) {
                            echo "<h1>Вставка записей</h1><br>
			<form name='add_breed' enctype='multipart/form-data' method='POST' action='action_add.php?add=7' class = ' radial'>
                        <b>Введите Название:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f1'><br>
                        <b>Введите калибр:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f2'><br>
                        <b>Введите вес:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f3'><br>
                        <b>Введите длину ствола:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f4'><br>
                        <b>Введите колличество патронов:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f5'><br>
                        <b>Введите Описание:</b><br>
                        <textarea name='f6' cols='40' rows='10' class = 'inp radial'></textarea><br>
                        <b>Выберите фотографию:</b><br>
                        <input required type='file' class = 'inp radial' name = 'img'><br>
                        <input type = 'submit' name = 'autoriz_btn' value = 'Добавить' size = '40' class = 'auto_btn radial'>
                        </form>";
                        }

                        if ($_GET['type'] == 8) {
                            echo "<h1>Вставка записей</h1><br>
			<form name='add_breed' enctype='multipart/form-data' method='POST' action='action_add.php?add=8' class = ' radial'>
                        <b>Введите Название:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f1'><br>
                        <b>Введите калибр:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f2'><br>
                        <b>Введите вес:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f3'><br>
                        <b>Введите длину ствола:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f4'><br>
                        <b>Введите колличество патронов:</b><br>
                        <input required type='text' size='40' class = 'inp radial' spellcheck='false'  name = 'f5'><br>
                        <b>Введите Описание:</b><br>
                        <textarea name='f6' cols='40' rows='10' class = 'inp radial'></textarea><br>
                        <b>Выберите фотографию:</b><br>
                        <input required type='file' class = 'inp radial' name = 'img'><br>
                        <input type = 'submit' name = 'autoriz_btn' value = 'Добавить' size = '40' class = 'auto_btn radial'>
                        </form>";
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
<?php $_SESSION['qOk'] = 0; ?>
