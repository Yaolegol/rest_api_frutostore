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
            ['price' => 50, 'image' => 'http://localhost:8000/storage/images/fruits/apple.jpg'],
            ['price' => 60, 'image' => 'http://localhost:8000/storage/images/fruits/avocado.jpg'],
            ['price' => 70, 'image' => 'http://localhost:8000/storage/images/fruits/bananas.jpg'],
            ['price' => 55, 'image' => 'http://localhost:8000/storage/images/fruits/black-currant.jpg'],
            ['price' => 65, 'image' => 'http://localhost:8000/storage/images/fruits/blackberry.jpg'],
            ['price' => 75, 'image' => 'http://localhost:8000/storage/images/fruits/blueberry.jpg'],
            ['price' => 80, 'image' => 'http://localhost:8000/storage/images/fruits/cherry.jpg'],
            ['price' => 45, 'image' => 'http://localhost:8000/storage/images/fruits/coconut.jpg'],
            ['price' => 90, 'image' => 'http://localhost:8000/storage/images/fruits/cranberry.jpg'],
            ['price' => 85, 'image' => 'http://localhost:8000/storage/images/fruits/gooseberry.jpg'],
            ['price' => 95, 'image' => 'http://localhost:8000/storage/images/fruits/grape.jpg'],
            ['price' => 100, 'image' => 'http://localhost:8000/storage/images/fruits/grapefruit.jpg'],
            ['price' => 110, 'image' => 'http://localhost:8000/storage/images/fruits/kiwi.jpg'],
            ['price' => 120, 'image' => 'http://localhost:8000/storage/images/fruits/lemon.jpg'],
            ['price' => 130, 'image' => 'http://localhost:8000/storage/images/fruits/mango.jpg'],
            ['price' => 140, 'image' => 'http://localhost:8000/storage/images/fruits/melon.jpg'],
            ['price' => 150, 'image' => 'http://localhost:8000/storage/images/fruits/orange.jpg'],
            ['price' => 160, 'image' => 'http://localhost:8000/storage/images/fruits/peach.jpg'],
            ['price' => 170, 'image' => 'http://localhost:8000/storage/images/fruits/pear.jpg'],
            ['price' => 180, 'image' => 'http://localhost:8000/storage/images/fruits/persimmon.jpg'],
            ['price' => 190, 'image' => 'http://localhost:8000/storage/images/fruits/pineapple.jpg'],
            ['price' => 200, 'image' => 'http://localhost:8000/storage/images/fruits/plum.jpg'],
            ['price' => 210, 'image' => 'http://localhost:8000/storage/images/fruits/pomegranate.jpg'],
            ['price' => 220, 'image' => 'http://localhost:8000/storage/images/fruits/raspberry.jpg'],
            ['price' => 230, 'image' => 'http://localhost:8000/storage/images/fruits/sea-buckthorn.jpg'],
            ['price' => 240, 'image' => 'http://localhost:8000/storage/images/fruits/strawberry.jpg'],
            ['price' => 250, 'image' => 'http://localhost:8000/storage/images/fruits/sweet-cherry.jpg'],
            ['price' => 260, 'image' => 'http://localhost:8000/storage/images/fruits/tangerines.jpg'],
            ['price' => 270, 'image' => 'http://localhost:8000/storage/images/fruits/watermelon.jpg'],
        ];

        $translations = [
            [
                'en' => ['title' => 'Apple', 'description' => ''],
                'ru' => ['title' => 'Яблоко', 'description' => '']
            ],
            [
                'en' => ['title' => 'Avocado', 'description' => ''],
                'ru' => ['title' => 'Авокадо', 'description' => '']
            ],
            [
                'en' => ['title' => 'Bananas', 'description' => ''],
                'ru' => ['title' => 'Бананы', 'description' => '']
            ],
            [
                'en' => ['title' => 'Black-currant', 'description' => ''],
                'ru' => ['title' => 'Черная смородина', 'description' => '']
            ],
            [
                'en' => ['title' => 'Blackberry', 'description' => ''],
                'ru' => ['title' => 'Ежевика', 'description' => '']
            ],
            [
                'en' => ['title' => 'Blueberry', 'description' => ''],
                'ru' => ['title' => 'Голубика', 'description' => '']
            ],
            [
                'en' => ['title' => 'Cherry', 'description' => ''],
                'ru' => ['title' => 'Вишня', 'description' => '']
            ],
            [
                'en' => ['title' => 'Coconut', 'description' => ''],
                'ru' => ['title' => 'Кокос', 'description' => '']
            ],
            [
                'en' => ['title' => 'Cranberry', 'description' => ''],
                'ru' => ['title' => 'Клюква', 'description' => '']
            ],
            [
                'en' => ['title' => 'Gooseberry', 'description' => ''],
                'ru' => ['title' => 'Крыжовник', 'description' => '']
            ],
            [
                'en' => ['title' => 'Grape', 'description' => ''],
                'ru' => ['title' => 'Виноград', 'description' => '']
            ],
            [
                'en' => ['title' => 'Grapefruit', 'description' => ''],
                'ru' => ['title' => 'Грейпфрут', 'description' => '']
            ],
            [
                'en' => ['title' => 'Kiwi', 'description' => ''],
                'ru' => ['title' => 'Киви', 'description' => '']
            ],
            [
                'en' => ['title' => 'Lemon', 'description' => ''],
                'ru' => ['title' => 'Лемон', 'description' => '']
            ],
            [
                'en' => ['title' => 'Mango', 'description' => ''],
                'ru' => ['title' => 'Манго', 'description' => '']
            ],
            [
                'en' => ['title' => 'Melon', 'description' => ''],
                'ru' => ['title' => 'Дыня', 'description' => '']
            ],
            [
                'en' => ['title' => 'Orange', 'description' => ''],
                'ru' => ['title' => 'Апельсины', 'description' => '']
            ],
            [
                'en' => ['title' => 'Peach', 'description' => ''],
                'ru' => ['title' => 'Персики', 'description' => '']
            ],
            [
                'en' => ['title' => 'Pear', 'description' => ''],
                'ru' => ['title' => 'Груша', 'description' => '']
            ],
            [
                'en' => ['title' => 'Persimmon', 'description' => ''],
                'ru' => ['title' => 'Хурма', 'description' => '']
            ],
            [
                'en' => ['title' => 'Pineapple', 'description' => ''],
                'ru' => ['title' => 'Ананас', 'description' => '']
            ],
            [
                'en' => ['title' => 'Plum', 'description' => ''],
                'ru' => ['title' => 'Слива', 'description' => '']
            ],
            [
                'en' => ['title' => 'Pomegranate', 'description' => ''],
                'ru' => ['title' => 'Гранат', 'description' => '']
            ],
            [
                'en' => ['title' => 'Raspberry', 'description' => ''],
                'ru' => ['title' => 'Малина', 'description' => '']
            ],
            [
                'en' => ['title' => 'Sea buckthorn', 'description' => ''],
                'ru' => ['title' => 'Облепиха', 'description' => '']
            ],
            [
                'en' => ['title' => 'Strawberry', 'description' => ''],
                'ru' => ['title' => 'Клубника', 'description' => '']
            ],
            [
                'en' => ['title' => 'Sweet cherry', 'description' => ''],
                'ru' => ['title' => 'Черешня', 'description' => '']
            ],
            [
                'en' => ['title' => 'Tangerines', 'description' => ''],
                'ru' => ['title' => 'Мандарины', 'description' => '']
            ],
            [
                'en' => ['title' => 'Watermelon', 'description' => ''],
                'ru' => ['title' => 'Арбуз', 'description' => '']
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
