<?php

namespace CipherBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
    public function indexAction()
    {
      $session = new Session();
      if($session->get('logIn'))
      {
        return $this->redirectToRoute('home_homepage');
      }
      return $this->redirectToRoute('welcome_homepage');
    }
}
