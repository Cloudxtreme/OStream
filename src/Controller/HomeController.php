<?php
/**
 * Created by PhpStorm.
 * User: elodi
 * Date: 23/02/2019
 * Time: 18:47
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


/**

 * @Route("/")

 */

class HomeController extends AbstractController {

    public function read() {
        return $this->render('homepageRead.html.twig');
}




}




