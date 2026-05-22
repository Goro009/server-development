<?php
interface CalculateSquare
{
    public function getSquare(): float;
}

class Rectangle implements CalculateSquare
{
    private float $width;
    private float $height;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getSquare(): float
    {
        return $this->width * $this->height;
    }
}

class Circle implements CalculateSquare
{
    private float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function getSquare(): float
    {
        return pi() * $this->radius * $this->radius;
    }
}

class User
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

function showSquareInfo(object $object): string
{
    $className = get_class($object);

    if ($object instanceof CalculateSquare) {
        return 'Объект класса ' . $className . ' реализует интерфейс CalculateSquare. Площадь: ' . $object->getSquare();
    }

    return 'Объект класса ' . $className . ' не реализует интерфейс CalculateSquare.';
}

$rectangle = new Rectangle(10, 5);
$circle = new Circle(3);
$user = new User('Гор');

echo '<pre>';
echo showSquareInfo($rectangle) . PHP_EOL;
echo showSquareInfo($circle) . PHP_EOL;
echo showSquareInfo($user) . PHP_EOL;
echo '</pre>';
?>
