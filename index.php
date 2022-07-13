<meta charset="utf-8">
<?php
mb_internal_encoding('UTF-8');
error_reporting(E_ALL);
ini_set('display_errors', 'on');

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