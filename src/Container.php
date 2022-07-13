<?php

namespace EspressoTutorials\Epub;

use EspressoTutorials\Epub\Elements\RootFile;

class Container
{
    protected SimpleXMLElement $element;

    protected ?RootFile $rootFile = null;

    public function __construct(
        protected string $file,
    ) {
        $this->element = SimpleXMLElement::fromPath($this->file);
    }

    public function rootFile(): RootFile
    {
        if ($this->rootFile) {
            return $this->rootFile;
        }

        return $this->rootFile = new RootFile(
            dirname($this->file, 2) . '/' . (string) $this->element->rootfiles->rootfile->attributes()['full-path'],
        );
    }
}
