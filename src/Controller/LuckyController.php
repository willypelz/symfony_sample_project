<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class LuckyController extends AppController
{
    /**
     * @Route("/lucky/numbefr/{max}", name="app_luffcky_number")
     */
    public function number($max)
    {
        $number = random_int(0, $max);

        return new Response(
            [
                'success'=> 'lohin'
            ], 200
        );
    }

        /**
         * @Route("/signin", name="fatffty")
         */
        public function number1()
        {
            return new Response('login successful', 200
            );
        }
}
