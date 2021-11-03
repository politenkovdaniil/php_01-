<?php
$is_image = $url == '/reyna/image'; //фиксируем в переменные признаки страниц
$is_info = $url == '/reyna/info';
$is_choice = $url == '/reyna/choice';
?>

<h1>Рейна</h1>

<ul class="list-group">
    <li class="list-group-item">
        <h5>Тут мы Вам расскажем о таком персонаже из игры Valorant, как Рейна</h5>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link <?= $is_image ? "active" : '' ?>" href="/reyna/image">Картинка</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $is_info ? "active" : '' ?>" href="/reyna/info">Описание</a>
            </li>
        </ul>
    </li>

    <?php if ($is_image) { ?>
        <li class="list-group-item"> <img src="\images\Reyna.png" style="width: 300px;" alt=""> </li>
    <?php }
    if ($is_info) { ?>
        <li class="list-group-item"> Reyna (кодовое имя Вампир) — мексиканский контрактный агент-дуэлянт из игры VALORANT. Reyna — дуэлянт, полностью сосредоточенный на атаке. Она способна победить практически в любой схватке один на один при равных условиях, а в умелых руках этот агент может стать худшим кошмаром для соперников. </li>
    <?php } ?>
    </ul>