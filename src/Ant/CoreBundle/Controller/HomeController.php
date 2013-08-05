<?php

namespace Ant\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function homeAction()
    {
        return $this->render('AntCoreBundle:Home:home.html.twig');
    }
}
