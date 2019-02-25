<?php
/**
 * Created by PhpStorm.
 * User: elodi
 * Date: 24/02/2019
 * Time: 21:48
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**

 * @Route("/registration")

 */

class RegistrationController extends AbstractController
{
    public function readRegister() {
        return $this->render('registrationRead.html.twig');
    }

}