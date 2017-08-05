<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Finder\CPanel\Controller;

use CKSource\CKFinder\CKFinder;
use MSBios\CPanel\Mvc\Controller\ActionControllerInterface;
use Zend\Config\Config;
use Zend\Mvc\Controller\AbstractActionController;

/**
 * Class FileManagerController
 * @package MSBios\Finder\CPanel\Controller
 */
class FileManagerController extends AbstractActionController implements ActionControllerInterface
{
    /** @var Config */
    protected $options;

    /**
     * FileManagerController constructor.
     * @param Config $options
     */
    public function __construct(Config $options)
    {
        $this->options = $options;
    }

    /**
     * @return \Zend\Http\Response
     */
    public function connectorAction()
    {
        if (empty($this->params()->fromQuery('command'))) {
            return $this->redirect()->toRoute('home/cpanel/file-manager');
        }

        /** @var CKFinder $ckfinder */
        $ckfinder = new CKFinder($this->options->toArray());
        $ckfinder->run();
        die();
    }
}
