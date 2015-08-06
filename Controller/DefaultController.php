<?php

namespace Rofil\Template\MasterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/congek/{name}")
     * @Template()
     */
    public function indexAction($name = "Rofilde Hasudungan Sitorus")
    {
        return array( 'name' => $name );
    }
}
