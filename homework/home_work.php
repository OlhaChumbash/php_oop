<?php
require_once 'Animal.php';


$animalTypes = ['Dog', 'Cat', 'Tiger', 'Leon'];
// rand = генурує случайне число
for($i=0; rand(0, 100); $i++) {
    // array_rand - поверне случайний елемент масива
    $currentAnimalType = $animalTypes[array_rand($animalTypes)];
    $animal = new Animal($currentAnimalType);
}

// Бажано код що вище не змінювати
// Реалізувати клас Animal (клас реалізовувати в новому файлі) щоб
// 1. Вивести Загальну кількість створених тварин
// 2. Вивести кількість тварин по типу

$animal->getTypes();
$animal->getCounter();