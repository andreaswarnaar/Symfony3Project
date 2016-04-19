<?php
namespace Lib\KernelExtensions;

use Symfony\Component\Config\Loader\LoaderInterface;

trait ConfigTrait {

    public function loadConfigFromEnvironmentFolder(LoaderInterface $loader){
        $loader->load($this->getRootDir(). '/config/'.$this->getEnvironment() . '/config.yml');
    }

}