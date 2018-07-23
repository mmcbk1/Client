<?php

namespace Bkrol\ClientApi\Services;

use GuzzleHttp\Client;

class ProductService
{
    const AVAILABLE_PRODUCTS_URL = 'http://localhost:8080/products/available';
    const UNAVAILABLE_PRODUCTS_URL = 'http://localhost:8080/products/unavailable';
    const PRODUCTS_URL = 'http://localhost:8080/products';
    const PRODUCT_CREATE_URL = 'http://localhost:8080/product';
    const PRODUCT_UPDATE_URL = 'http://localhost:8080/product/';
    const PRODUCT_DELETE_URL = 'http://localhost:8080/product/';
    const PRODUCT_GET_URL = 'http://localhost:8080/product/';

    private $token;
    private $client;


    public function __construct($token)
    {
        $this->token = $token;
        $this->client = new Client([
            'headers' => ['Authorization' => $this->token]
        ]);
    }

    public function getProduct($id)
    {
        $response = $this->client->get(self::PRODUCT_GET_URL . $id);

        return $this->getResponse($response);
    }

    public function getProducts(string $params)
    {
        $response = $this->client->get(self::PRODUCTS_URL.$params);

        return $this->getResponse($response);
    }

    public function getAvailable()
    {
        $response = $this->client->get(self::AVAILABLE_PRODUCTS_URL);

        return $this->getResponse($response);
    }

    public function getUnavailable()
    {
        $response = $this->client->get(self::UNAVAILABLE_PRODUCTS_URL);

        return $this->getResponse($response);
    }


    public function createProduct(array $data)
    {
        $formParams = [
            'form_params' => $data
        ];

        $response = $this->client->post(self::PRODUCT_CREATE_URL, $formParams);

        return $this->getResponse($response);
    }

    public function updateProduct(array $data, int $id)
    {
        $formParams = [
            'form_params' => $data
        ];

        $response = $this->client->put(self::PRODUCT_UPDATE_URL . $id, $formParams);

        return $this->getResponse($response);
    }

    public function deleteProduct(int $id)
    {
        $response = $this->client->delete(self::PRODUCT_DELETE_URL . $id);

        return $this->getResponse($response);
    }

    private function getResponse($response)
    {
        return $response->getBody()->getContents();
    }
}