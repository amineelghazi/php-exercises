<?php
class Product
{
    private int $stock;
    private bool $active;

    public function __construct(int $stock, bool $active)
    {
        $this->stock = $stock;
        $this->active = $active;
    }

    public function isAvailable(): bool
    {
        return $this->active && $this->stock > 0;
    }
}

$syrup = new Product(3,true);
var_dump($syrup->isAvailable()); // bool(true)