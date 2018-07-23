<?php

namespace Bkrol\ClientApi\Controllers;

use Bkrol\ClientApi\Services\ProductService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ClientApiController extends Controller
{
    private $productService;

    public function __construct()
    {
        $token = env('CLIENT_API_TOKEN');
        $this->productService = new ProductService($token);
    }

    public function getProduct(int $id)
    {
        $product = json_decode($this->productService->getProduct($id));

        return view('client::single', compact('product'));
    }

    public function getProducts()
    {
        $params = '';
        $gt = Input::get('gt');

        if ($gt) {
            $params = '?gt=' . $gt;
        }


        $products = json_decode($this->productService->getProducts($params));
        $products = $products->data;

        return view('client::list', compact(['products']));
    }

    public function getAvailableProducts()
    {
        $products = json_decode($this->productService->getAvailable());
        $products = $products->data;
        return view('client::list', compact(['products']));
    }

    public function getUnavailableProducts()
    {
        $products = json_decode($this->productService->getUnavailable());
        $products = $products->data;
        return view('client::list', compact(['products']));
    }

    public function create()
    {
        return view('client::create');
    }

    public function update(Request $request, int $id)
    {
        $params = [
            'name' => $request->input('name'),
            'amount' => $request->input('amount')
        ];
        $this->productService->updateProduct($params, $id);

        return back();

    }

    public function store(Request $request)
    {
        $params = [
            'name' => $request->input('name'),
            'amount' => $request->input('amount')
        ];
        $this->productService->createProduct($params);

        return back();
    }

    public function delete(int $id)
    {
        $this->productService->deleteProduct($id);
        return back();

    }


}
