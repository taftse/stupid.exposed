<?php

namespace SKE\Users\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SKE\Posts\Http\Resources\PostResource;
use SKE\Users\Http\Resources\UserResource;

class MeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        return new UserResource(Auth::User());
    }
}
