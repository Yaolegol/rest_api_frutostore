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
                'en' => ['title' => 'Apple', 'description' => 'Delicious and juicy apples'],
                'ru' => ['title' => 'Яблоко', 'description' => 'Вкусные и сочные яблоки']
            ],
            [
                'en' => ['title' => 'Avocado', 'description' => 'Creamy and nutritious avocados'],
                'ru' => ['title' => 'Авокадо', 'description' => 'Кремовые и питательные авокадо']
            ],
            [
                'en' => ['title' => 'Bananas', 'description' => 'Sweet and ripe bananas'],
                'ru' => ['title' => 'Бананы', 'description' => 'Сладкие и спелые бананы']
            ],
            [
                'en' => ['title' => 'Black-currant', 'description' => 'Tart and flavorful black currants'],
                'ru' => ['title' => 'Черная смородина', 'description' => 'Кислая и ароматная черная смородина']
            ],
            [
                'en' => ['title' => 'Blackberry', 'description' => 'Juicy and sweet blackberries'],
                'ru' => ['title' => 'Ежевика', 'description' => 'Сочные и сладкие ежевики']
            ],
            [
                'en' => ['title' => 'Blueberry', 'description' => 'Sweet and nutritious blueberries'],
                'ru' => ['title' => 'Голубика', 'description' => 'Сладкая и питательная голубика']
            ],
            [
                'en' => ['title' => 'Cherry', 'description' => 'Sweet and tart cherries'],
                'ru' => ['title' => 'Вишня', 'description' => 'Сладкие и кислые вишни']
            ],
            [
                'en' => ['title' => 'Coconut', 'description' => 'Rich and creamy coconuts'],
                'ru' => ['title' => 'Кокос', 'description' => 'Богатые и кремовые кокосы']
            ],
            [
                'en' => ['title' => 'Cranberry', 'description' => 'Tart and healthy cranberries'],
                'ru' => ['title' => 'Клюква', 'description' => 'Кислая и полезная клюква']
            ],
            [
                'en' => ['title' => 'Gooseberry', 'description' => 'Tangy and sweet gooseberries'],
                'ru' => ['title' => 'Крыжовник', 'description' => 'Кисло-сладкий крыжовник']
            ],
            [
                'en' => ['title' => 'Grape', 'description' => 'Sweet and juicy grapes'],
                'ru' => ['title' => 'Виноград', 'description' => 'Сладкий и сочный виноград']
            ],
            [
                'en' => ['title' => 'Grapefruit', 'description' => 'Tart and refreshing grapefruits'],
                'ru' => ['title' => 'Грейпфрут', 'description' => 'Кислый и освежающий грейпфрут']
            ],
            [
                'en' => ['title' => 'Kiwi', 'description' => 'Tangy and sweet kiwis'],
                'ru' => ['title' => 'Киви', 'description' => 'Кисло-сладкие киви']
            ],
            [
                'en' => ['title' => 'Lemon', 'description' => 'Sour and refreshing lemons'],
                'ru' => ['title' => 'Лемон', 'description' => 'Кислый и освежающий лимон']
            ],
            [
                'en' => ['title' => 'Mango', 'description' => 'Sweet and tropical mangoes'],
                'ru' => ['title' => 'Манго', 'description' => 'Сладкие и тропические манго']
            ],
            [
                'en' => ['title' => 'Melon', 'description' => 'Sweet and juicy melons'],
                'ru' => ['title' => 'Дыня', 'description' => 'Сладкая и сочная дыня']
            ],
            [
                'en' => ['title' => 'Orange', 'description' => 'Sweet and tangy oranges'],
                'ru' => ['title' => 'Апельсины', 'description' => 'Сладкие и кислые апельсины']
            ],
            [
                'en' => ['title' => 'Peach', 'description' => 'Sweet and juicy peaches'],
                'ru' => ['title' => 'Персики', 'description' => 'Сладкие и сочные персики']
            ],
            [
                'en' => ['title' => 'Pear', 'description' => 'Sweet and juicy pears'],
                'ru' => ['title' => 'Груша', 'description' => 'Сладкие и сочные груши']
            ],
            [
                'en' => ['title' => 'Persimmon', 'description' => 'Sweet and flavorful persimmons'],
                'ru' => ['title' => 'Хурма', 'description' => 'Сладкая и ароматная хурма']
            ],
            [
                'en' => ['title' => 'Pineapple', 'description' => 'Sweet and tropical pineapples'],
                'ru' => ['title' => 'Ананас', 'description' => 'Сладкие и тропические ананасы']
            ],
            [
                'en' => ['title' => 'Plum', 'description' => 'Sweet and juicy plums'],
                'ru' => ['title' => 'Слива', 'description' => 'Сладкие и сочные сливы']
            ],
            [
                'en' => ['title' => 'Pomegranate', 'description' => 'Juicy and flavorful pomegranates'],
                'ru' => ['title' => 'Гранат', 'description' => 'Сочные и ароматные гранаты']
            ],
            [
                'en' => ['title' => 'Raspberry', 'description' => 'Sweet and tangy raspberries'],
                'ru' => ['title' => 'Малина', 'description' => 'Сладкая и кислая малина']
            ],
            [
                'en' => ['title' => 'Sea buckthorn', 'description' => 'Tart and nutritious sea buckthorn'],
                'ru' => ['title' => 'Облепиха', 'description' => 'Кислая и питательная облепиха']
            ],
            [
                'en' => ['title' => 'Strawberry', 'description' => 'Sweet and juicy strawberries'],
                'ru' => ['title' => 'Клубника', 'description' => 'Сладкая и сочная клубника']
            ],
            [
                'en' => ['title' => 'Sweet cherry', 'description' => 'Sweet and juicy sweet cherries'],
                'ru' => ['title' => 'Черешня', 'description' => 'Сладкая и сочная черешня']
            ],
            [
                'en' => ['title' => 'Tangerines', 'description' => 'Sweet and tangy tangerines'],
                'ru' => ['title' => 'Мандарины', 'description' => 'Сладкие и кислые мандарины']
            ],
            [
                'en' => ['title' => 'Watermelon', 'description' => 'Sweet and refreshing watermelons'],
                'ru' => ['title' => 'Арбуз', 'description' => 'Сладкий и освежающий арбуз']
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
