<?php

namespace App\Controllers\Dashboard\Admin;
use App\Controllers\BaseController;
use App\Middleware\CheckLoginUser;

class OverviewController extends BaseController
{
    public function __construct()
    {
        helper('form');  
    }

    public function index()
    {
        if(CheckLoginUser::execute()){
            return redirect()->to(route_to('login'));
        }

        $data = [
            "page_title" => "Overview"
        ];
        return view('dashboard/admin/index', $data);
    }
    

}
