<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product1 = [
            'name' => 'Attack on Titan Figure',
            'price' => 1200,
            'description' => 'Levi Ackerman Action Figure'
        ];

        $product2 = [
            'name' => 'Naruto Headband',
            'price' => 300,
            'description' => 'Konoha Leaf Village Headband'
        ];

        $product3 = [
            'name' => 'Demon Slayer Sword',
            'price' => 2500,
            'description' => 'Tanjiro Kamado’s Nichirin Blade'
        ];

        $product4 = [
            'name' => 'One Piece Hoodie',
            'price' => 1800,
            'description' => 'Luffy’s Straw Hat Pirates Hoodie'
        ];

        $product5 = [
            'name' => 'Jujutsu Kaisen Manga',
            'price' => 500,
            'description' => 'Volume 1 of Jujutsu Kaisen Manga'
        ];

        $allProducts = [$product1, $product2, $product3, $product4, $product5];

        return view('animemerch', ['products' => $allProducts]);
    }
}