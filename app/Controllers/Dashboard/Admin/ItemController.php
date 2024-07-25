<?php

namespace App\Controllers\Dashboard\Admin;
use App\Models\Item;
use App\Models\Category;
use App\Middleware\CheckLoginUser;
use App\Controllers\BaseController;

class ItemController extends BaseController
{
    private $items;
    private $categories;

    public function __construct()
    {
        helper('form');  
        $this->items = new Item();
        $this->categories = new Category();
    }

    public function index()
    {
        if(CheckLoginUser::execute()){
            return redirect()->to(route_to('login'));
        }

        $allItems = $this->items->get()->getResult();
       
        $data = [
            "pageTitle" => "Inventory",
            "items" => $allItems,
            "categories" => $this->categories->get()->getResult()
        ];
        return view('dashboard/admin/items/all', $data);
    }
    

}
