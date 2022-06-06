<?php

declare(strict_types=1);

namespace Coolblue\Interview\Entity;

final class ShoppingCartLine
{
    private int $shoppingCartLineId;
    /** @var ShoppingCartItem[] */
    private array $items = [];

    /**
     * @param ShoppingCartItem[] $items
     */
    public function __construct(int $shoppingCartLineId, array $items)
    {
        $this->shoppingCartLineId = $shoppingCartLineId;
        array_walk($items, [$this, 'addItem']);
    }

    public function getShoppingCartLineId(): int
    {
        return $this->shoppingCartLineId;
    }

    /**
     * @return ShoppingCartItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    public function addItem(ShoppingCartItem $item): self
    {
        $this->items[] = $item;

        return $this;
    }
}
