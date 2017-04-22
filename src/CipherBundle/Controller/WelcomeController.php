<?php
/**
 * Created by PhpStorm.
 * User: sammmium
 * Date: 22.04.17
 * Time: 19:05
 */

namespace CipherBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class WelcomeController extends Controller
{
  private $namePage = 'Приветствие';
  private $content;
  public function __construct()
  {
    $this->content = 'Здесь Вы можете ...';
  }

  public function indexAction()
  {
    return $this->render('CipherBundle::welcome.html.twig', [
      'namePage' => $this->namePage,
      'content' => $this->content,
    ]);
  }
}