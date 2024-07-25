<?php

namespace App\Controllers\Dashboard\Admin;
use App\Controllers\BaseController;

class OverviewController extends BaseController
{
    public function index(): string
    {
        $data = [
            "page_title" => "Overview"
        ];
        return view('dashboard/admin/index', $data);
    }
}
