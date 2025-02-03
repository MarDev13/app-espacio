<?php

namespace App\Controller;

use App\Model\Usuarios;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function home(): Response
    {
        $juan = new Usuarios('Pepe', 'Martin', 'Nuñez');
        
        return $this->render('home/inicio.html.twig', [
            'nombre' => $juan->getNombre(),
            'apellido1' => $juan->getApellido1(),
            'apellido2' => $juan->getApellido2()

        ]);
    }
}
