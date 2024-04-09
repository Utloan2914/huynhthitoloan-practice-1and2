<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password'];

    public static $rules = [
        'name' => 'required|min:3|max:15',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed',
    ];
}
