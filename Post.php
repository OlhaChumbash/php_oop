<?php

/**
 * Оголошується клас за домомогою ключового слова class і далі унікальне імя в CamelCase
 */
class Post
{
    // Оголошення змінних класу/ змінних обєкта

    // Змінні обєкта
    // Зміні обєкта оголошуються: модифікатор дотупу на назва змінної
    // Модифікатори доступу
    //    private - зміні/методи доступні тільки в тілі цього класу
    //    public  - зміні/методи домтупні в будьякому місці
    //    PS: є ще модивікатори доступу про них пізніше
    private $title;

    // Можемо вказати тип зміної (php version > 7.4)
    private string $text;

    private $createAt;

    private $author;

    private $published;

    // Порядковий номер обєкта при створенні
    private $number;

    // Статична зміна класу оголошується за домопомогою клочового слова static!
    // Це зміна класу не обєкта
    // інкрементуємо його в конструкторі. Тобто рахуємо кількість створенних обєктів
    private static $counter = 0;

    // Метод конструктор, який викликається при створені обєкта ($object = new Class() )
    // Може приймати аргументи які потрібні для створення обєкту
    // Тут аргумент $published = false - не обовязковий аргумент
    public function __construct(array $post, $published = false)
    {
        // $this - це внутрішня змінна яка використовується у методах для змернення до зміних або методів обєкта
        $this->title = $post['title'];
        $this->text = $post['text'];
        // присвоїти зміні обєкту author значення
        $this->author = $post['author'];
        $this->published = $published;
        $this->createAt = date("Y-m-d H:i:s");

        // self - це внутрішня змінна яка використовується у методах для змернення до зміних або методів класу
        // для кожного створеного обєкту інкрементуємо зміну $counter класу
        self::increment();
        $this->number = self::$counter;
    }

    // Оголошення метода обєкта. Оголошується за домопогою модифікатора доступу, ключового слова function та назва метода
    public function getNumber()
    {
        return $this->number;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getText()
    {
        return $this->text;
    }

    public function getCreateAt()
    {
        return $this->createAt;
    }

    public function getPublished()
    {
        return $this->published;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    // Оголошення метода класу. Оголошується за домопогою модифікатора доступу, ключових слів static function та назва метода
    public static function getClassCounter()
    {
        return self::$counter;
    }

    public static function increment()
    {
        self::$counter++;
    }
}