<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'title' => 'Naruto Shippuden Box Set',
                'price' => 150.00,
                'image' => 'https://placehold.co/300x400/FF5733/white?text=Naruto'
            ],
            [
                'title' => 'One Piece Volume 1-50',
                'price' => 250.00,
                'image' => 'https://placehold.co/300x400/33FF57/white?text=One+Piece'
            ],
            [
                'title' => 'Attack on Titan Blu-Ray',
                'price' => 80.00,
                'image' => 'https://placehold.co/300x400/3357FF/white?text=AOT'
            ],
            [
                'title' => 'Demon Slayer Figure',
                'price' => 45.00,
                'image' => 'https://placehold.co/300x400/FF33A8/white?text=Demon+Slayer'
            ]
        ];

        return view('products.index', compact('products'));
    }
}