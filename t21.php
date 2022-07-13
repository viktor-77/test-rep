<!--Сделайте класс Product, в котором будут приватные свойства name, price и quantity.
Пусть все эти свойства будут доступны только для чтения.-->
<!--Добавьте в класс Product метод getCost,
который будет находить полную стоимость продукта (сумма умножить на количество).-->
<!--Сделайте класс Cart. Данный класс будет хранить список продуктов (объектов класса Product) в виде массива.
Пусть продукты хранятся в свойстве products.-->
<!--Реализуйте в классе Cart метод add для добавления продуктов.-->
<!--Реализуйте в классе Cart метод remove для удаления продуктов.
Метод должен принимать параметром название удаляемого продукта.-->
<!--Реализуйте в классе Cart метод getTotalCost, который будет находить суммарную стоимость продуктов.-->
<?php

class Product
{
    private $name;
    private $price;
    private $quantity;

    public function __construct($name, $price, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCost(): int
    {
        return $this->price * $this->quantity;
    }

}

class Cart
{
    private $products = [];

    public function add(Product $product)
    {
        $this->products[] = $product;
    }

    public function remove(string $name)
    {
        $elementIndex = false;
        $productCount = count($this->products);
        for ($i = 0; $i < $productCount; $i++) {
            if ($this->products[$i]->getName() == $name) {
                $elementIndex = $i;
                break;
            }
        }
        if ($elementIndex !== false) {
            array_splice($this->products, $elementIndex, 1);
        }
    }

    public function getTotalCost()
    {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->getCost();
        }
        return $sum;
    }
}

$product1 = new Product('a',5,5);
$product2 = new Product('b',2,10);
$cart = new Cart;

$cart->add($product1);
$cart->add($product2);
echo $cart->getTotalCost();