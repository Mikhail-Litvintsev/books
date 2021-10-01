<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\PasswordRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordUpdateController extends Controller
{
    public function __invoke(PasswordRequest $request)
    {
        $data = $request->validated();
        User::where('name', 'admin')->first()->update(['password' => Hash::make($data['password'])]);
        return redirect()->route('admin.settings.index')->with('announce', 'пароль изменен');
    }
}
