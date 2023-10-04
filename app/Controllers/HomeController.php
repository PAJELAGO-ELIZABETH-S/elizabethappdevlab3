<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
    private $product;
    public function __construct()
    {
      $this->product = new \App\Models\ProductModel();
    }
    public function productDetails($id)
    {
      $product = $this->product->find($id);
      if ($product) {
        $data = [
          'product' => $product
        ];
        return view('productDetails', $data);
      } else {
        return redirect()->to('/home');
      }
    }
    public function contact()
    {
      return view('contact');
    }

    public function about()
    {
      return view('about');
    }
    public function index()
    {
        $data = [
            'items' => $this->product->findAll()
          ];
          return view('index', $data);
    }
}
