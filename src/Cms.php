<?php


namespace Naranjhub\Cms;


use Naranjhub\Cms\Models\Admin;

class Cms
{
    public function listAdmin()
    {
        return Admin::all();
    }
}
