<?php

namespace App\Model;

class BookCategoryListResponse
{
    /**
     * @var array|BookCategoryListItem[]
     */
    public array $items;

    /**
     * @param BookCategoryListItem[] $items
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }

    /**
     * @return BookCategoryListItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }


}