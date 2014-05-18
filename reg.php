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
                            <p class="content_block">
                                <?php
                                if ($_SESSION['qOk'] == 3) {
                                    echo "Пароли из двух полей не совпадают. Введите еще раз";
                                } else if ($_SESSION['qOk'] == 1) {
                                    echo '<script type="text/javascript">
				window.alert("Пользователь успешно зарегистрирован");

				 function func() {
				 	window.location = "index.php";
				 }
				setTimeout(func, 200);
				

				</script>';
                                } else if ($_SESSION['qOk'] == 2) {
                                    echo "Такой пользователь уже существует. Введите еще раз";
                                }
                                ?>
                            <form name='reg' method='POST' action='reg_action.php' class = ' radial' >
                                <b>Введите логин:</b><br>
                                <input required type='text' size='20' class = 'inp radial' spellcheck='false'  name = 'login'><br>
                                <b>Введите пароль:</b><br>
                                <input required type='password' size='20' class = 'inp radial' name = 'password'><br>
                                <b>Повторите пароль:</b><br>
                                <input required type='password' size='20' class = 'inp radial' name = 'password2'><br>
                                <input type = 'submit' name = 'reg' value = 'Зарегистрироватся' class = 'auto_btn radial'>
                            </form>   

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
            <p><strong>Одесса 2014</strong></p>
        </footer><!-- .footer -->

    </body>
</html>
<?php $_SESSION['qOk'] == 0; ?>