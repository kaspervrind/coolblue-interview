<?php

declare(strict_types=1);

namespace Coolblue\Interview\Entity;

final class ShoppingCart
{
    private int $shoppingCartId;

    /** @var ShoppingCartLine[] */
    private array $lines = [];

    /**
     * @param ShoppingCartLine[] $lines
     */
    public function __construct(int $shoppingCartId, array $lines)
    {
        $this->shoppingCartId = $shoppingCartId;
        array_walk($lines, [$this, 'addLine']);
    }

    public function getShoppingCartId(): int
    {
        return $this->shoppingCartId;
    }

    public function getLines(): array
    {
        return $this->lines;
    }

    public function addLine(ShoppingCartLine $line): self
    {
        $this->lines[] = $line;

        return $this;
    }

    public function getTotal(): int
    {
        $total = 0;

        foreach ($this->getLines() as $line) {
            /** @var ShoppingCartLine $line */
            foreach ($line->getItems() as $item) {
                /* @var ShoppingCartItem $item */
                $total += $item->getSubtotal();
            }
        }

        return $total;
    }
}
