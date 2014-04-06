<?php

echo <<< LABEL
<form name='auto' action="reg.php" align = "center" class="aut">
    <p ><b>Логин:</b> <br><input type="text" maxlength="20" size="30" name="text"></p>
    <p><b>Пароль:</b> <br><input type="password" maxlength="15" size="30" name="pass"></p>
    <p><input type = 'submit' name = 'autoriz_btn' value = 'Вход' size = '40'>
    <input type = 'submit' name = 'autoriz_btn' value = 'Регистрация' size = '40'></p>
</form> 


<li><a href="pistol.php">Пистолеты и револьверы</a></li>
<li><a href="submachine_guns.php">Пистолеты-пулеметы</a></li>
<li><a href="rifle.php">Винтовки</a></li>
<li><a href="automat.php">Автоматы, штурм.винтовки</a></li>
<li><a href="sniper.php">Снайперские винтовки</a></li>
<li><a href="shotgun.php">Дробовики</a></li>
<li><a href="gun.php">Пулеметы</a></li>
<li><a href="travmat.php">Травматическое оружие</a></li>
LABEL;



?>
