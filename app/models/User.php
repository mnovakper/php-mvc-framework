<?php

class User
{
    use Model;
    protected $table = 'users'; // odabrana tablica

    // stupci koji se smiju mijenjati
    protected $allowedColumns = ['email', 'password'];

    // provjera input podataka
    public function validate($data)
    {
        $this->errors = [];

        if (empty($data['email']))
        {
            $this->errors['email'] = "Email is required";
        }else

        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL))
        {
            $this->errors['email'] = "Email is not valid";
        }

        if (empty($data['password']))
        {
            $this->errors['password'] = "Password is required";
        }

        if (empty($data['terms']))
        {
            $this->errors['terms'] = "Please accept the terms and conditions";
        }

        if(empty($this->errors))
        {
            return true;
        }

        return false;
    }
}
