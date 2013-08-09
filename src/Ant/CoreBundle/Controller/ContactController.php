<?php

namespace Ant\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    public function contactAction()
    {
        return $this->render('AntCoreBundle:Contact:contact.html.twig');
    }
}
