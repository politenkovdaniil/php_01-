<?php
$is_image1 = $url == '/killjoy/image';
$is_info1 = $url == '/killjoy/info';
$is_choice1 = $url == '/killjoy/choice';
$is_image = $url == '/reyna/image';
$is_info = $url == '/reyna/info';
$is_choice = $url == '/reyna/choice';
?>

<h1>Главная</h1>

<ul class="list-group">
    <li class="list-group-item">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link <?= $is_choice ?>" href="/reyna/choice"><button type="button" class="btn btn-dark">Рейна</button></a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?= $is_image ?>" href="/reyna/image"><button type="button" class="btn btn-light">Картинка</button></a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?= $is_info ?>" href="/reyna/info"><button type="button" class="btn btn-light">Описание</button></a>
            </li>
        </ul>
    </li>

    <li class="list-group-item">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link <?= $is_choice1 ?>" href="/killjoy/choice"><button type="button" class="btn btn-dark">Киллджой</button> </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?= $is_image1 ?>" href="/killjoy/image"><button type="button" class="btn btn-light">Картинка</button></a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?= $is_info1 ?>" href="/killjoy/info"><button type="button" class="btn btn-light">Описание</button></a>
            </li>
        </ul>
    </li>