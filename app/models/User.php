<?php

class User
{
    use Model;
    protected $table = 'users';

    // columns allowed to be editable
    protected $allowedColumns = ['name', 'age'];
}
