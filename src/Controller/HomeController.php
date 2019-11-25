<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {

    /**
     * @Route("/bonjour/{prenom}/age/{age}", name="hello")
     * @Route("/salut", name="hello_base")
     * @Route("/bonjour/{prenom}", name="hello_prenom")
     * 
     * Route qui montre la page bonjour
     * tjrs nommé ces routes
     *
     * @return void
     */
    public function hello($prenom = "anonyme", $age = 0) {
        return $this->render(
            'hello.html.twig',
            [
                'prenom' => $prenom,
                'age' => $age
            ]
            );
    }

    /**
     * @Route("/", name="homepage")
     */

    public function home(){
        $prenoms = ["hassan" => 36, "jean" => 26, "bob" => 16];

        return $this->render(
                'home.html.twig',

                [ 'title' => 'Aurevoir à tous',
                  'age' => 12,
                  'tableau' => $prenoms 
                ]
        );
    }
}