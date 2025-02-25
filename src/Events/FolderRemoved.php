<?php

namespace Grayloon\Filemanager\Events;

use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Queue\SerializesModels;

class FolderRemoved
{
    use SerializesModels;

    /**
     * @var mixed
     */
    public $storage;

    /**
     * @var mixed
     */
    public $folderPath;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(FilesystemAdapter $storage, string $folderPath)
    {
        $this->storage = $storage;
        $this->folderPath = $folderPath;
    }
}
