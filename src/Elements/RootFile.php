<?php

namespace EspressoTutorials\Epub\Elements;

class RootFile
{
    public function __construct(
        protected string $path
    ) {
    }

    public function path(): string
    {
        return $this->path;
    }
}
