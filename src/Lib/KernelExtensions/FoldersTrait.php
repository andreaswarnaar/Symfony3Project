<?php
namespace Lib\KernelExtensions;

trait FoldersTrait {

    public function getCacheDir()
    {
        return $this->getRootDir().'/../var/cache/'.$this->getEnvironment().'/';
    }

    public function getLogDir()
    {
        return $this->getRootDir().'/../var/logs/'.$this->getEnvironment().'/';
    }
}