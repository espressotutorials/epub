<?php

namespace EspressoTutorials\Epub;

class SimpleXMLElement extends \SimpleXMLElement
{
    public static function fromPath(string $path): self
    {
        return new self(file_get_contents($path));
    }
}
