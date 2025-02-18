<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    private int $id ;
    private string $firstname;
    private string $lastname ;
    private string $email ;
    private string $password ;
    private string $phone_number;
    private Role $role ;

}
