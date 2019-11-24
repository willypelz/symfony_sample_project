<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Json;
use Symfony\Component\HttpFoundation\Request;
//importing the repository
use App\Repository\UserRepository;

class AuthenticationController extends AppController
{

    private $userRepository;

    public function __construct( UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

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
        $data = [
            'first_name' => 'michael',
            'last_name' => 'pelumi',
            'message' => 'users details successfully fetched',
            'status_code' => JsonResponse::HTTP_OK
        ];

        return $this->response($data, JsonResponse::HTTP_OK);

    }
    /**
     * @Route("getusers", name="get_users")
     */

    public function getUsers(){
      $users = $this->userRepository->findAll();
       dd($users);
     }

}