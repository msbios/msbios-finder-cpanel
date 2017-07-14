<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Finder\CPanel;

/**
 * Class Module
 * @package MSBios\Finder\CPanel
 */
class Module
{
    /** @const */
    const VERSION = '0.0.1dev';

    /**
     * @return mixed
     */
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}
