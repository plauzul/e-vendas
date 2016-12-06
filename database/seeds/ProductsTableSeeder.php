<?php

use Illuminate\Database\Seeder;
use App\Products;

class ProductsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Products::create([
            'categoria' => 'valentino',
            'img' => 'images/product1.jpg',
            'price' => '60',
            'title' => 'Camisa Azul-Escuro - Longa - Valentino',
            'description' => 'Linda camisa asil, longa, para momentos inesqueciveis de sua vida',
            'brand' => 'valentino',
            'state' => 'new'
        ]);

        Products::create([
            'categoria' => 'polo',
            'img' => 'images/product2.jpg',
            'price' => '135',
            'title' => 'Polo White Edition',
            'description' => 'Camisa polo super descolada, para não deixar escapar nenhuma novinha na sua vida',
            'brand' => 'polo',
            'state' => 'sale'
        ]);

        Products::create([
            'categoria' => 'gucci',
            'img' => 'images/product3.jpg',
            'price' => '89,90',
            'title' => 'Vestido Preto - Gucci',
            'description' => 'Vestido preto para você arrasa na pista, nao deixe escapar aquele lindo que você ta querendo',
            'brand' => 'gucci',
            'state' => 'sale'
        ]);

        Products::create([
            'categoria' => 'dolce-e-cabbana',
            'img' => 'images/product4.jpg',
            'price' => '182,90',
            'title' => 'Vestido Style Good - Dolce e Cabbana',
            'description' => 'Compre já essa perfeição de vestido da dolce e cabbana e arrase',
            'brand' => 'dolce-e-cabbana',
            'state' => ''
        ]);

        Products::create([
            'categoria' => 'gucci',
            'img' => 'images/product6.jpg',
            'price' => '50',
            'title' => 'Camiseta Branca - Gucci',
            'description' => 'Linda camisa branca, para você mostra a perfeição das roupas Gucci',
            'brand' => 'gucci',
            'state' => ''
        ]);
    }
}
