<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            ['price' => 50, 'image' => 'http://localhost:8000/storage/images/fruits/apple-min.jpg'],
            ['price' => 100, 'image' => 'http://localhost:8000/storage/images/fruits/bananas-min.jpg'],
            ['price' => 80, 'image' => 'http://localhost:8000/storage/images/fruits/oranges-min.jpg'],
            ['price' => 120, 'image' => 'http://localhost:8000/storage/images/fruits/grape-min.jpg'],
            ['price' => 70, 'image' => 'http://localhost:8000/storage/images/fruits/pear-min.jpg'],
            ['price' => 150, 'image' => 'http://localhost:8000/storage/images/fruits/peach-min.jpg'],
            ['price' => 200, 'image' => 'http://localhost:8000/storage/images/fruits/pineapple-min.jpg'],
            ['price' => 90, 'image' => 'http://localhost:8000/storage/images/fruits/kiwi-min.jpg'],
            ['price' => 60, 'image' => 'http://localhost:8000/storage/images/fruits/coconut-min.jpg'],
            ['price' => 180, 'image' => 'http://localhost:8000/storage/images/fruits/mango-min.jpg'],
        ];

        $translations = [
            [
                'en' => ['title' => 'Apple', 'description' => 'Delicious and juicy apples'],
                'ru' => ['title' => 'Яблоко', 'description' => 'Очень вкусные и сочные яблоки']
            ],
            [
                'en' => ['title' => 'Banana', 'description' => 'Sweet and ripe bananas'],
                'ru' => ['title' => 'Банан', 'description' => 'Сладкие и спелые бананы']
            ],
            [
                'en' => ['title' => 'Orange', 'description' => 'Fresh and tangy oranges'],
                'ru' => ['title' => 'Апельсин', 'description' => 'Свежие и кислые апельсины']
            ],
            [
                'en' => ['title' => 'Grape', 'description' => 'Juicy and sweet grapes'],
                'ru' => ['title' => 'Виноград', 'description' => 'Сочные и сладкие виноградины']
            ],
            [
                'en' => ['title' => 'Pear', 'description' => 'Crisp and fresh pears'],
                'ru' => ['title' => 'Груша', 'description' => 'Хрустящие и свежие груши']
            ],
            [
                'en' => ['title' => 'Peach', 'description' => 'Soft and sweet peaches'],
                'ru' => ['title' => 'Персик', 'description' => 'Мягкие и сладкие персики']
            ],
            [
                'en' => ['title' => 'Pineapple', 'description' => 'Tropical and tangy pineapples'],
                'ru' => ['title' => 'Ананас', 'description' => 'Тропические и кислые ананасы']
            ],
            [
                'en' => ['title' => 'Kiwi', 'description' => 'Exotic and refreshing kiwis'],
                'ru' => ['title' => 'Киви', 'description' => 'Экзотические и освежающие киви']
            ],
            [
                'en' => ['title' => 'Coconut', 'description' => 'Sweet and juicy coconuts'],
                'ru' => ['title' => 'Кокос', 'description' => 'Сладкие и сочные кокосы']
            ],
            [
                'en' => ['title' => 'Mango', 'description' => 'Rich and tropical mangoes'],
                'ru' => ['title' => 'Манго', 'description' => 'Богатые и тропические манго']
            ],
        ];

        foreach ($products as $index => $productData) {
            $product = Product::create($productData);

            ProductTranslation::create([
                'product_id' => $product->id,
                'locale' => 'en',
                'title' => $translations[$index]['en']['title'],
                'description' => $translations[$index]['en']['description'],
            ]);

            ProductTranslation::create([
                'product_id' => $product->id,
                'locale' => 'ru',
                'title' => $translations[$index]['ru']['title'],
                'description' => $translations[$index]['ru']['description'],
            ]);
        }
    }
}
