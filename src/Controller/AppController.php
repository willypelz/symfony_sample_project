<?php
namespace App\Controller;

 use Symfony\Component\HttpFoundation\JsonResponse;
 use Symfony\Component\HttpFoundation\Response;
 use Symfony\Component\Routing\Annotation\Route;
 use Symfony\Component\Validator\Constraints\Json;

 class AppController
{

     protected function response($data){
         return new JsonResponse($data);
     }

 }


