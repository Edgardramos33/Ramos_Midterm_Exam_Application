<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'Attack on Titan Figure', 'price' => 1200, 'description' => 'Levi Ackerman Action Figure'],
            ['name' => 'Naruto Headband', 'price' => 300, 'description' => 'Konoha Leaf Village Headband'],
            ['name' => 'Demon Slayer Sword', 'price' => 2500, 'description' => 'Tanjiro Kamado’s Nichirin Blade'],
            ['name' => 'One Piece Hoodie', 'price' => 1800, 'description' => 'Luffy’s Straw Hat Pirates Hoodie'],
            ['name' => 'Jujutsu Kaisen Manga', 'price' => 500, 'description' => 'Volume 1 of Jujutsu Kaisen Manga']
        ];

        return view('products', compact('products'));
    }
}
