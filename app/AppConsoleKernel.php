<?php

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Routing\RouteCollectionBuilder;
use Doctrine\Common\Annotations\AnnotationRegistry;

$loader = require __DIR__ . '/../vendor/autoload.php';
AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

class AppConsoleKernel extends Kernel
{
    use MicroKernelTrait;
    use \Lib\KernelExtensions\ConfigTrait;
    use \Lib\KernelExtensions\FoldersTrait;
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle(),
            new \Infrastructure\Cli\CliBundle\CliBundle(),
            new \Infrastructure\Repository\RepositoryBundle\RepositoryBundle(),
            new \Infrastructure\Email\EmailBundle\EmailBundle(),
        );

        return $bundles;
    }

    protected function configureContainer(ContainerBuilder $c, LoaderInterface $loader)
    {
        $this->loadConfigFromEnvironmentFolder($loader);
    }

    protected function configureRoutes(RouteCollectionBuilder $routes)
    {

    }
}