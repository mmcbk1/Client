<?php
namespace Bkrol\ClientApi\Builders;

interface ProductBuilderInterface
{
    public function setId(int $id);
    public function setName(string $name);
    public function setAmount(int $amount);
}