<?php

namespace EspressoTutorials\Epub;

use EspressoTutorials\Epub\Elements\RootFile;

class Container
{
    protected ?RootFile $rootFile = null;

    public function __construct(
        protected SimpleXMLElement $element,
    ) {
    }

    public function rootFile(): RootFile
    {
        if ($this->rootFile) {
            return $this->rootFile;
        }

        return $this->rootFile = new RootFile(
            (string) $this->element->rootfiles->rootfile->attributes()['full-path']
        );
    }
}
