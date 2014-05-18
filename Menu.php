<?php

echo <<< LABEL
        <li><a href="pistol.php">Пистолеты и револьверы</a></li>
        <li><a href="submachine_guns.php">Пистолеты-пулеметы</a></li>
        <li><a href="rifle.php">Винтовки</a></li>
        <li><a href="automat.php">Автоматы, штурм.винтовки</a></li>
        <li><a href="sniper.php">Снайперские винтовки</a></li>
        <li><a href="shotgun.php">Дробовики</a></li>
        <li><a href="gun.php">Пулеметы</a></li>
        <li><a href="travmat.php">Травматическое оружие</a></li>
LABEL;


if ($_SESSION['user']) {

    echo "
	<div class='aut'>
		<form name='auto_user' method='POST' action='action.php' class = 'form_auto radial'>
			" . $_SESSION['user'] . "</b> <br>
			";

    if ($_SESSION['type_user'] == 0) {
        echo "

        <input type = 'submit' name = 'add_rec' value = 'Добавить пистолеты и револьверы' class = 'auto_btn radial'><br>
        <input type = 'submit' name = 'add_rec' value = 'Добавить пистолеты-пулеметы' class = 'auto_btn radial'><br>
        <input type = 'submit' name = 'add_rec' value = 'Добавить винтовки' class = 'auto_btn radial'><br>
        <input type = 'submit' name = 'add_rec' value = 'Добавить автоматы, штурм.винтовки' class = 'auto_btn radial'><br>
        <input type = 'submit' name = 'add_rec' value = 'Добавить снайперские винтовки' class = 'auto_btn radial'><br>
        <input type = 'submit' name = 'add_rec' value = 'Добавить дробовики' class = 'auto_btn radial'><br>
        <input type = 'submit' name = 'add_rec' value = 'Добавить пулеметы' class = 'auto_btn radial'><br>
        <input type = 'submit' name = 'add_rec' value = 'Добавить травматическое оружие' class = 'auto_btn radial'><br>

	<input type = 'submit' name = 'exit' value = 'Выход' class = 'auto_btn radial'>
		</form>
	</div>
";
    }

    if ($_SESSION['type_user'] == 1) {
        echo "
	<input type = 'submit' name = 'add_rec' value = 'Добавить пистолеты и револьверы' class = 'auto_btn radial'><br>
        <input type = 'submit' name = 'add_rec' value = 'Добавить пистолеты-пулеметы' class = 'auto_btn radial'><br>
        <input type = 'submit' name = 'add_rec' value = 'Добавить винтовки' class = 'auto_btn radial'><br>
        <input type = 'submit' name = 'add_rec' value = 'Добавить автоматы, штурм.винтовки' class = 'auto_btn radial'><br>
        <input type = 'submit' name = 'add_rec' value = 'Добавить снайперские винтовки' class = 'auto_btn radial'><br>
        <input type = 'submit' name = 'add_rec' value = 'Добавить дробовики' class = 'auto_btn radial'><br>
        <input type = 'submit' name = 'add_rec' value = 'Добавить пулеметы' class = 'auto_btn radial'><br>
        <input type = 'submit' name = 'add_rec' value = 'Добавить травматическое оружие' class = 'auto_btn radial'><br>

	<input type = 'submit' name = 'add_rec' value = 'Пользователи' class = 'auto_btn radial'><br>
	<input type = 'submit' name = 'exit' value = 'Выход' class = 'auto_btn radial'>
		</form>
	</div>
";
    }
} else {
    echo "
	<div >
		<form name='auto' method='POST' action='action.php' class = 'radial'>
			<b>Логин:</b><br>
			<input  type='text' size='20' class = 'inp radial' spellcheck='false'  name = 'login'><br>
			<b>Пароль:</b><br>
			<input  type='password' size='20' class = 'inp radial' name = 'password'><br>
			<input type = 'submit' name = 'autoriz_btn' value = 'Вход' size = '40' class = 'radial'>
                        <input type = 'submit' name = 'autoriz_btn' value = 'Регистрация' size = '40' class = 'radial'>
                       	</form>
	</div>

";
}
// <input type = 'submit' name = 'autoriz_btn' value = 'Регистрация' size = '40' class = 'radial'>
	
//<a href = 'reg.php' >Регистрация</a>
