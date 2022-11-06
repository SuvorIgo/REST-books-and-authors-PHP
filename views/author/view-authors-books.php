<?php
use yii\helpers\Html;
?>
<h1>Books and Authors</h1>
<?php foreach($authors as $author) :?>
<p>
    <?php
        $author = $author->nickname;
        $books = $author->books;
        /*$books = $item->$books;
        echo $item->name;
        foreach($books as $book)
        {
            echo $book->name;
        }*/

        echo $author.' => ';
        foreach($books as $book)
        {
            echo $book->bname;
        }

    ?>
</p>
<?php endforeach; ?>