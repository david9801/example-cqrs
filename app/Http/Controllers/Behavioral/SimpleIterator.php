<?php

namespace App\Http\Controllers\Behavioral;

class SimpleIterator implements \Iterator, \Countable
{

    public function __construct(
        private readonly array $elements,
        private int $position = 0
    )
    {
    }

    /**
     * @inheritDoc
     */
    #[\Override] public function current(): mixed
    {
        return $this->elements[$this->position];
    }

    /**
     * @inheritDoc
     */
    #[\Override] public function next(): void
    {
        $this->position++;
    }

    /**
     * @inheritDoc
     */
    #[\Override] public function key(): mixed
    {
        $this->position++;
    }

    /**
     * @inheritDoc
     */
    #[\Override] public function valid(): bool
    {
        return isset($this->elements[$this->position]);
    }

    /**
     * @inheritDoc
     */
    #[\Override] public function rewind(): void
    {
        $this->position = 0;
    }

    #[\Override] public function count(): int
    {
        return count($this->elements);
    }
}
