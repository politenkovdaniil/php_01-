<?php
$is_image1 = $url == '/killjoy/image'; //фиксируем в переменные признаки страниц
$is_info1 = $url == '/killjoy/info';
$is_choice1 = $url == '/killjoy/choice';
?>

<h1>Киллджой</h1>

<ul class="list-group">
    <li class="list-group-item">
        <h5>Тут мы Вам расскажем о таком персонаже из игры Valorant, как Киллджой</h5>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link <?= $is_image1 ? "active" : '' ?>" href="/killjoy/image">Картинка</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $is_info1 ? "active" : '' ?>" href="/killjoy/info">Описание</a>
            </li>
        </ul>
    </li>

    <?php if ($is_image1) { ?>
        <li class="list-group-item"><img src="\images\Killjoy.png" style="width: 200px;" alt=""></li>
    <?php }
    if ($is_info1) { ?>
        <li class="list-group-item">Killjoy (кодовое имя Бомба) — немецкий контрактный агент-страж из игры VALORANT, базирующийся на сборе информации и отвлечения противника. Ее способности помогают контролировать самые неудобные места на карте. Благодаря им шанс победы команды Killjoy сильно возрастает.</li>
    <?php } ?>
</ul>