<?php
use yii\helpers\Html;
?>
<h1>Books</h1>
<ul>
    <?php foreach ($books as $book) : ?>
        <li>
            <? Html::encode("{$book->id} ({$country->name})") ?> :
            <? $book->numberOfPages ?>
        </li>
    <?php endforeach; ?>
</ul>