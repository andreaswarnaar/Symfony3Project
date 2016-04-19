<?php
namespace Infrastructure\Web\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
class IndexController extends Controller{

    /**
     * @Route("/home")
     */
    public function indexAction(){
        return $this->render('index/home.html.twig',['kip' => 'ei']);
    }
    
}
