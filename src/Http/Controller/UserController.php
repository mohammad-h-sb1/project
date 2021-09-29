<?php


namespace Naranjhub\Cms\Http\Controller;


use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return \Cms::listAdmin();
    }
}
