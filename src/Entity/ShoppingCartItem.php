<?php

declare(strict_types=1);

namespace Coolblue\Interview\Entity;

final class ShoppingCartItem
{
    /** @var string */
    public const PRODUCTCLASS_PHYSICAL = 'physical';

    /** @var string */
    public const PRODUCTCLASS_INSURANCE = 'insurance';

    /** @var string */
    public const PRODUCTLCASS_SERVICE = 'service';

    public function __construct(
        private int $shoppingCartItemId,
        private int $quantity,
        private int $unitPrice,
        private string $productName,
        private string $productClass)
    {
    }

    public function getShoppingCartItemId(): int
    {
        return $this->shoppingCartItemId;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getUnitPrice(): int
    {
        return $this->unitPrice;
    }

    public function getProductName(): string
    {
        return $this->productName;
    }

    public function getProductClass(): string
    {
        return $this->productClass;
    }

    public function getSubtotal(): int
    {
        return $this->quantity * $this->unitPrice;
    }
}
