<?php

namespace EspressoTutorials\Epub;

class Epub
{
    protected \ZipArchive $archive;

    protected ?Container $container = null;

    protected ?Content $content = null;

    protected string $extractionPath;

    public function __construct(
        protected string $path
    ) {
    }

    public function container(): Container
    {
        if ($this->container) {
            return $this->container;
        }

        return $this->container = new Container(
            $this->extractionPath . '/META-INF/container.xml',
        );
    }

    public function content(): Content
    {
        if ($this->content) {
            return $this->content;
        }

        return $this->content = new Content(
            $this->container()->rootFile()->path()
        );
    }

    public function extractTo(string $path): bool
    {
        $this->archive = new \ZipArchive();

        if (!$this->archive->open($this->path)) {
            return false;
        }

        if (!$this->archive->extractTo($path)) {
            return false;
        }

        $this->extractionPath = $path;

        return true;
    }
}
