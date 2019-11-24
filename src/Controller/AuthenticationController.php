<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Json;
use Symfony\Component\HttpFoundation\Request;

class AuthenticationController extends AppController
{
    /**
     * @Route("login", name="mac_login")
     */

    public function Login()
    {
        return $this->response('login successful');
    }

    /**
     * @Route("register", name="mac_register")
     */

    public function register(Request $request)
    {
      dd($request->request->all());
//        return $this->response([
//            'first_name' => 'michael',
//            'last_name' => 'pelumi',
//            'message' => 'users details successfully fetched',
//            'status_code' => JsonResponse::HTTP_OK
//        ], JsonResponse::HTTP_OK);

    }

}