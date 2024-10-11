<?php

namespace App\Controller;

use App\Utility\PythagoreUtility;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PythagoreController extends AbstractController
{
    public $pythagoreUtility;

    public function __construct(PythagoreUtility $pythagoreUtility)
    {
        $this->pythagoreUtility = $pythagoreUtility;
    }
    /**
     * @Route("/pythagore/view", name="pythagore_view")
     */
    #[Route('/pythagore/view', name: 'app_pythagore', )]
    public function DisplayPythagoreAction(): Response
    { 
        return $this->render('pythagore/displayPythagore.html.twig', [
            'controller_name'=> 'PythagoreController',
            'table' => $this->pythagoreUtility->display(),
        ]);
    }
}
