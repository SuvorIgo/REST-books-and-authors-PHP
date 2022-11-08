<?php
use yii\helpers\Html;
?>
<h1>Books and Authors</h1>
<?php foreach($authors as $author) :?>
<p>
    <?php
        if($author->nickname) echo $author->nickname.' => <br>';
        else 
        {
            $surname = $author->surname;
            echo $surname.' => <br>';
        }
        
        foreach($books as $book)
        {
            echo $book->bname.'<br>';
        }
    ?>
</p>
<?php endforeach; ?>