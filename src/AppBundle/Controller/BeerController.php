<?php
// src/AppBundle/Controller/BeerController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class BeerController
{
  /**
  * @Route("/beer/number")
  */
  public function numberAction()
  {
    $number = mt_rand(0,100);

    return new Response(
      '<html><body>beer number: '.$number.'</body></html>'
    );
  }
}
