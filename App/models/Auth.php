<?php


namespace App;
use App\User;



class Auth {

    private  $redirectUrl = "/";
    private  $user;

    public function __construct()
    {
        session_start();
    }


    public function attempt($email,$password)
    {

        $user = User::where('email', '=', $email )->first();
        if ($user && $password == $user->password)
        {
            $_SESSION['user'] = $user;
            return true;
        }
        else
        {
            return false;
        }

    }

    public function logout()
    {
        session_destroy();
        $this->redirect();
    }

    private function redirect()
    {
        header('location: ' .$this->redirectUrl);
    }

    public function authorize($redirect = true)
    {
        if (isset($_SESSION['user']))
        {
           $this->user = $_SESSION['user'];
            return true;
        }
        else
        {
            if($redirect) {
                $this->redirect();
            }
        }
    }

    public function user($redirect = true)
    {
        $this->authorize($redirect);
        return $this->user;

    }

    public function register($array)
    {
        $user = User::where('email', '=', $array['email'] )->first();

        if (!$user)
        {
            $user = User::create($array);
            $user->save();
            $_SESSION['user'] = $user;
            return true;
        }

        return false;
    }
}

