<?php

namespace App\Http\Controllers;

use App\Argaam\Facades\Sso;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * ProfileController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Profile.
     *
     * @return mixed
     */
    public function index()
    {
        $user = Sso::user(auth()->user()->apiToken());

        return $user;
    }
}
