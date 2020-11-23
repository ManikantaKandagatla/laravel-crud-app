<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $service;

    protected $dao;

    protected function service()
    {
        if ($this->service !== null)
        {
            $class = $this->service;
        }
        return new $class;
    }
}
