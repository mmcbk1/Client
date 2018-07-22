<?php
namespace Bkrol\ClientApi\Builders;

class ProductBuilder
{
    private $product = null;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function setId(int $id): self
    {
        $this->product->setId($id);

        return $this;
    }

    public function setName(string $name): self
    {
        $this->product->setName($name);

        return $this;
    }

    public function setAmount(string $amount): self
    {
        $this->product->setAmount($amount);

        return $this;
    }

    public function build()
    {
        return $this->product;
    }

}