<?php

class Animal {
    private static $types = []; 
    private static $objCounter = 0;

    public function __construct($currentAnimalType)
    {
        self::$objCounter++;
        self::typesCounter($currentAnimalType);
    }

    public static function getCounter()
    {
        echo "Загальна кількість об'єктів: " . self::$objCounter;
    }
    
    private static function typesCounter($currentAnimalType)
    {         
        foreach (self::$types as $key => $value) {
            
            if ($value['animal'] === $currentAnimalType) {
                self::$types[$key]['counter']++;
                return self::$types[$key]['counter']; 
            }
        }
        
        
        $typeElem = ["animal" => $currentAnimalType, "counter" => 1];
        array_push(self::$types, $typeElem);
        
        return 1;
    }

    public static function getTypes()
    {
        foreach (self::$types as $type) {
            echo "Тип: " . $type['animal'] . ", Кількість: " . $type['counter'] . "<br>";
        }       
      
    }
}

