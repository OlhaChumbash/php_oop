<?php
include_once 'Post.php';
// Клонування обєктів

// присвоювання значення зміної
// Cтандартні php типи (string, boolean, int, float, array ...) присвоють значення
echo '------------ Присвоювання стандартних типів   ----------------------- '. '</br>';
$val = 'First string';
$copyVal = $val;
$val = 'Updated string';
echo 'Val:     ' . $val . '</br>';     // Val:     Updated string
echo 'CopyVal: ' . $copyVal . '</br>'; // CopyVal: First string
// $copyVal не змінилося після зміни $val,
// Тому що $copyVal = $val; присвоіли значенне $val змінні $copyVal
$array = ['1' => 2, '2' => 3];
$copyArray = $array;
$array['1'] = 100;
print_r($copyArray);
echo '</br>';

// Array
// (
//    [1] => 2
//    [2] => 3
// )

echo '------------ Присвоювання обєктів   ----------------------- '. '</br>';
// присвоювання cилки на обект
// При присвоюванні обектів присвоюється ссилка на обєкт.
$post = new Post(['title' => 'Init Title', 'text' => 'Init Text', 'author' => 'Init Author']);
$copyPost = $post;

$post->setTitle('Updated Title');
echo 'Post     title: ' . $post->getTitle() . '</br>';      // Post     title: Updated Title
echo 'CopyPost title: ' . $copyPost->getTitle() . '</br>';  // CopyPost title: Updated Title
// тобто не створили новий обєкт

echo '------------ clone object   ----------------------- '. '</br>';
$post = new Post(['title' => 'Init Title', 'text' => 'Init Text', 'author' => 'Init Author']);
// Клонування обєктів викоростовують функцію clone()
$copyPost = clone($post);
$post->setTitle('Updated Title');
echo 'Post     title: ' . $post->getTitle() . '</br>';      // Post     title: Updated Title
echo 'CopyPost title: ' . $copyPost->getTitle() . '</br>';  // CopyPost title: Init Title
// тобто створили новий обєкт

echo '------------ Передача по значенню/силці в функцію -------------------' . '</br>';

function updateCommonTypes($valueArray)
{
    // встановлюємо нове значення індексу 0
    $valueArray[0] = 'Updated value';
}

$val = ['Init val', 'Init val'];
updateCommonTypes($val);

echo '$val[0]:     ' . $val[0] . '</br>';     // Val[0]:     'Init val'
// $val[0] - не змінився
// Висновок стандатні типи передаються в функцію по значенню

$post = new Post(['title' => 'Init Title', 'text' => 'Init Text', 'author' => 'Init Author']);
function updatePost(Post $post) {
    // встановлюємо нове значення
    $post->setTitle('Updated Title');
}
updatePost($post);
echo 'Post     title: ' . $post->getTitle() . '</br>'; // 'Post     title: Updated Title'
// $post->getTitle() змінився
// Висновок: Обєкти передаються в функцію по ссилці
