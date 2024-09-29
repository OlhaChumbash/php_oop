<?php
include_once 'Post.php';

// Cтворення обєкту типу Post та присвоїти його зміні.
$post1 = new Post(['title' => 'Init Title1', 'text' => 'Init Text 1', 'author' => 'Author 1']);
$post2 = new Post(['title' => 'Init Title2', 'text' => 'Init Text 2', 'author' => 'Author 2'], true);

// $post1->getNumber() - доступ до публічного методу обєкта
echo 'Порядковий номер обєкта $post1 '  . $post1->getNumber() . '</br>';
echo 'Порядковий номер обєкта $post2 '  . $post2->getNumber() . '</br>';
// $post1->number; //Fatal error. Cannot access private property

// Post::getClassCounter() - доступ до публічного методу класу. до таких зміних можна звертатися без створення обєкту
echo 'Кількість створенних постів '  . Post::getClassCounter() . '</br>';
// Post::$counter;  //Fatal error. Cannot access private property
exit;

if(!empty($_POST['title']) && !empty($_POST['text']))
{
    $post = new Post($_POST);
    $writer = new Writer();
    $fileName = $writer->save($post);

    echo 'Result ' .  '<br>';

    echo 'Post Title  : '     . $post->getTitle()       . '<br>';
    echo 'Post Text   : '     . $post->getText()        . '<br>';
    echo 'Post Created At : ' . $post->getCreateAt()    . '<br>';
    echo 'Post Published : '  . $post->getPublished()   . '<br>';
    echo 'Post Author : '     . $post->getAuthor()      . '<br>';
    echo 'Save into file  : ' . $fileName               . '<br>';
}

?>

<!--<html>-->
<!--    <head>-->
<!--    </head>-->
<!--    <body>-->
<!--        <form method="post">-->
<!--            Title:     <input type="text" name="title">-->
<!--            </br>-->
<!--            Text:      <input type="text" name="text">-->
<!--            </br>-->
<!--            Writer Name<input type="text" name="author">-->
<!--            <input type="submit" value="submit" name="submit">-->
<!--        </form>-->
<!--    </body>-->
<!--</html>-->

