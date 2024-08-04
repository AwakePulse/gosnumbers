<ul>
    <li><a class="active" id="main_url" href="main.php">Главная</a></li>
        <?php
            if($_SESSION['user']) {
                echo '<li><a id="addnum_url" href="addnum.php">Добавить номер</a></li>';
            }
        ?>
        <?php
            if($_SESSION['user']) {
                echo '<li class="nav__right"><a href="../controller/logout.php">Выход</a></li>';
            } else {
                echo '<li class="nav__right"><a href="autorize.php">Войти</a></li>';
            }
        ?>
        <?php
            if(!$_SESSION['user']) {
                echo '<li class="nav__right"><a href="registration.php">Зарегистрироваться</a></li>';
            } else {
                echo '<li class="nav__right"><a href="profile.php">Профиль</a></li>';
            }
        ?>
    </li>
</ul>