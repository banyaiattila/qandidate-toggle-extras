<?php

namespace Polisys\QandidateToggleExtras;

class Site
{
    /**
     * @var string
     */
    protected $site;


    protected $assetDirectory;

    function __construct($key, $assetDirectory)
    {
        $this->key = $key;
        $this->assetDirectory = $assetDirectory;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @return string
     */
    public function getAssetDirectory()
    {
        return $this->assetDirectory;
    }

    /**
     * @param string $assetDirectory
     */
    public function setAssetDirectory($assetDirectory)
    {
        $this->assetDirectory = $assetDirectory;
    }
}
