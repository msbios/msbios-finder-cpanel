<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Finder\CPanel\Factory;

use Interop\Container\ContainerInterface;
use MSBios\Finder\CPanel\Controller\FileManagerController;
use MSBios\Finder\Module;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class FileManagerControllerFactory
 * @package MSBios\Finder\CPanel\Factory
 */
class FileManagerControllerFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return FileManagerController
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new FileManagerController($container->get(Module::class));
    }
}
