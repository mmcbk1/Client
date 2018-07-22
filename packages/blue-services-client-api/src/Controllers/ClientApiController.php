<?php
namespace Bkrol\ClientApi\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ClientApiController extends Controller
{
    private $productService;

    public function __construct(\ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function getProduct(int $id)
    {
       return  $this->productService->getProduct($id);
    }

    public function getProducts()
    {
        $params = [
            'gt' => Input::get('gt')
        ];

       return $this->productService->getProducts($params);
    }

    public function getAvailableProducts()
    {
        return $this->productService->getAvailable();
    }

    public function getUnavailableProducts()
    {
        return $this->productService->getUnavailable();
    }

    public function create()
    {
        return view('create');
    }

    public function update(Request $request, int $id)
    {
        $params = [
            'name' => $request->input('name'),
            'amount' => $request->input('amount')
        ];

        return $this->productService->updateProduct($params, $id);

    }

    public function store(Request $request)
    {
        $params = [
            'name' => $request->input('name'),
            'amount' => $request->input('amount')
        ];

        return $this->productService->createProduct($params);
    }

    public function delete(int $id)
    {
       return $this->productService->deleteProduct($id);
    }


}
