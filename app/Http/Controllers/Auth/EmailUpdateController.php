<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\EmailRequest;
use App\Models\User;
use Illuminate\Http\Request;

class EmailUpdateController extends Controller
{
    public function __invoke(EmailRequest $request)
    {
        $data = $request->validated();
        User::where('name', 'admin')->first()->update($data);
        return redirect()->route('admin.settings.index')->with('announce', 'email обновлен!');
    }
}
