<?php

namespace App\Controllers\Dashboard\Admin;
use App\Controllers\BaseController;
use App\Middleware\CheckLoginUser;
use App\Models\Account;
use App\Models\Category;
use App\Models\Item;
use App\Models\Sale;

class OverviewController extends BaseController
{
    private $items;
    private $categories;
    private $accounts;
    private $sales;

    public function __construct()
    {
        helper('form');  
        $this->items = new Item();
        $this->categories = new Category();
        $this->accounts = new Account();
        $this->sales = new Sale();
    }

    public function index()
    {
        if(CheckLoginUser::execute()){
            return redirect()->to(route_to('login'));
        }

        $totalItems = count($this->items->findAll());
        $totalAccounts = count($this->accounts->findAll());
        $totalSales = count($this->sales->findAll());
        $totalCategories = count($this->categories->findAll());

        $data = [
            "pageTitle" => "Overview",
            "totalItems" => $totalItems,
            "totalAccounts" => $totalAccounts,
            "totalSales" => $totalSales,
            "totalCategories" => $totalCategories
        ];
        return view('dashboard/admin/index', $data);
    }
    

}
