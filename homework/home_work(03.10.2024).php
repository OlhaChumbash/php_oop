<?php

class Person 
{
    private string $name;  
    private int $age;      

   
    public function __get($property) 
    {       
            return $this->$property;
          }

   
    public function __set($property, $value) 
    {
        
        if (property_exists($this, $property)) {       
            if ($property === 'age' && !is_numeric($value)) {
                echo "Method exept only numbers";
            }
            $this->$property = $value; 

    }
}
}

    $person = new Person();
    $person->name = "Olha "; 
    $person->age = "33";  

    echo $person->name; 
    echo $person->age;  
