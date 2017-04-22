<?php
/**
 * Created by PhpStorm.
 * User: sammmium
 * Date: 23.04.17
 * Time: 0:12
 */

namespace CipherBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;

class FooterController extends Controller
{
  public function indexAction()
  {
    return new Response('I am cipher book FOOTER');
  }
}