<?php
use yii\helpers\Html;
?>
<h1>Books and Authors</h1>
<?php foreach($model as $item) :?>
<p>
    <?php
        $books = $item->$books;
        echo $item->name;
        foreach($books as $book)
        {
            echo $book->name;
        }
    ?>
</p>
<?php endforeach; ?>