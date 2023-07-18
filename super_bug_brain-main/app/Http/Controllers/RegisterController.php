<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Account as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use App\Http\Controllers\Validator;
class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(Request $req){
        
        $rules = [
            'name' => 'required|string',
            'email' => 'required|string|unique:accounts',
            'password' => 'required|string|min:6'
        ];
        
        $user = Account::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'role'=> 0,
            'status'=> 1
        ]);
        $user->save();
        $token = $user->createToken('Personal Access Token')->plainTextToken;
        return redirect('/sign-in');
    }
}