<?php
namespace MyApp\User\Http;
use MyApp\User\Services\UserService;
use Sparks\Http\Controller;

class UserController extends Controller
{
    protected $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    public function index()
    {
        $users = $this->userService->all();
        return $this->view("users.index", ['users' => $users]);
    }
}