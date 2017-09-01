<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProfileController extends Controller
{
    public function editProfileAction()
    {
        return $this->render('UserBundle:Profile:edit.html.twig');
    }
}
