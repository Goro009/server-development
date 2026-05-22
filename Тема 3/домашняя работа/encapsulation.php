<?php

class Cat
{
    private string $name;
    private string $color;

    public function __construct(string $name, string $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function sayHello(): string
    {
        return 'Мяу! Меня зовут ' . $this->getName() . ', я ' . $this->getColor() . ' цвета.';
    }
}

$cat = new Cat('Барсик', 'рыжего');

echo '<pre>';
echo $cat->sayHello();
echo '</pre>';
?>
