<?php
// src/AppBundle/Controller/WineController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WineController extends Controller
{
    /**
     * @Route("/wine/number")
     */
    public function numberAction()
    {
        $number = mt_rand(0, 100);

        return $this->render('wine/number.html.twig', array(
            'number' => $number,
        ));
    }
}
