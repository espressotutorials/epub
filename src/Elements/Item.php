<?php

namespace EspressoTutorials\Epub\Elements;

class Item
{
    public function __construct(
        protected string $id,
        protected string $path,
        protected string $mimetype
    ) {
    }

    public function id(): string
    {
        return $this->id;
    }

    public function path(): string
    {
        return $this->path;
    }

    public function mimeType(): string
    {
        return $this->mimetype;
    }
}
