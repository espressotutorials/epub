<?php

namespace EspressoTutorials\Epub\Elements;

class ItemRef
{
    public function __construct(
        protected string $idRef,
    ) {
    }

    public function idRef(): string
    {
        return $this->idRef;
    }
}
