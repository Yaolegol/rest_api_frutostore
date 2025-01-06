<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductTranslation;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            ['category_id' => 1, 'price' => 50, 'image' => '/public/images/fruits/apple.jpg'],
            ['category_id' => 1, 'price' => 60, 'image' => '/public/images/fruits/avocado.jpg'],
            ['category_id' => 1, 'price' => 70, 'image' => '/public/images/fruits/bananas.jpg'],
            ['category_id' => 2, 'price' => 55, 'image' => '/public/images/fruits/black-currant.jpg'],
            ['category_id' => 2, 'price' => 65, 'image' => '/public/images/fruits/blackberry.jpg'],
            ['category_id' => 2, 'price' => 75, 'image' => '/public/images/fruits/blueberry.jpg'],
            ['category_id' => 2, 'price' => 80, 'image' => '/public/images/fruits/cherry.jpg'],
            ['category_id' => 1, 'price' => 45, 'image' => '/public/images/fruits/coconut.jpg'],
            ['category_id' => 2, 'price' => 90, 'image' => '/public/images/fruits/cranberry.jpg'],
            ['category_id' => 2, 'price' => 85, 'image' => '/public/images/fruits/gooseberry.jpg'],
            ['category_id' => 1, 'price' => 95, 'image' => '/public/images/fruits/grape.jpg'],
            ['category_id' => 1, 'price' => 100, 'image' => '/public/images/fruits/grapefruit.jpg'],
            ['category_id' => 1, 'price' => 110, 'image' => '/public/images/fruits/kiwi.jpg'],
            ['category_id' => 1, 'price' => 120, 'image' => '/public/images/fruits/lemon.jpg'],
            ['category_id' => 1, 'price' => 130, 'image' => '/public/images/fruits/mango.jpg'],
            ['category_id' => 1, 'price' => 140, 'image' => '/public/images/fruits/melon.jpg'],
            ['category_id' => 1, 'price' => 150, 'image' => '/public/images/fruits/orange.jpg'],
            ['category_id' => 1, 'price' => 160, 'image' => '/public/images/fruits/peach.jpg'],
            ['category_id' => 1, 'price' => 170, 'image' => '/public/images/fruits/pear.jpg'],
            ['category_id' => 1, 'price' => 180, 'image' => '/public/images/fruits/persimmon.jpg'],
            ['category_id' => 1, 'price' => 190, 'image' => '/public/images/fruits/pineapple.jpg'],
            ['category_id' => 1, 'price' => 200, 'image' => '/public/images/fruits/plum.jpg'],
            ['category_id' => 1, 'price' => 210, 'image' => '/public/images/fruits/pomegranate.jpg'],
            ['category_id' => 2, 'price' => 220, 'image' => '/public/images/fruits/raspberry.jpg'],
            ['category_id' => 2, 'price' => 230, 'image' => '/public/images/fruits/sea-buckthorn.jpg'],
            ['category_id' => 2, 'price' => 240, 'image' => '/public/images/fruits/strawberry.jpg'],
            ['category_id' => 2, 'price' => 250, 'image' => '/public/images/fruits/sweet-cherry.jpg'],
            ['category_id' => 1, 'price' => 260, 'image' => '/public/images/fruits/tangerines.jpg'],
            ['category_id' => 2, 'price' => 270, 'image' => '/public/images/fruits/watermelon.jpg'],
        ];

        $translations = [
            [
                'en-US' => ['title' => 'Apple', 'description' => 'Delicious and juicy apples'],
                'ru-RU' => ['title' => 'Яблоко', 'description' => 'Вкусные и сочные яблоки']
            ],
            [
                'en-US' => ['title' => 'Avocado', 'description' => 'Creamy and nutritious avocados'],
                'ru-RU' => ['title' => 'Авокадо', 'description' => 'Кремовые и питательные авокадо']
            ],
            [
                'en-US' => ['title' => 'Bananas', 'description' => 'Sweet and ripe bananas'],
                'ru-RU' => ['title' => 'Бананы', 'description' => 'Сладкие и спелые бананы']
            ],
            [
                'en-US' => ['title' => 'Black-currant', 'description' => 'Tart and flavorful black currants'],
                'ru-RU' => ['title' => 'Черная смородина', 'description' => 'Кислая и ароматная черная смородина']
            ],
            [
                'en-US' => ['title' => 'Blackberry', 'description' => 'Juicy and sweet blackberries'],
                'ru-RU' => ['title' => 'Ежевика', 'description' => 'Сочные и сладкие ежевики']
            ],
            [
                'en-US' => ['title' => 'Blueberry', 'description' => 'Sweet and nutritious blueberries'],
                'ru-RU' => ['title' => 'Голубика', 'description' => 'Сладкая и питательная голубика']
            ],
            [
                'en-US' => ['title' => 'Cherry', 'description' => 'Sweet and tart cherries'],
                'ru-RU' => ['title' => 'Вишня', 'description' => 'Сладкие и кислые вишни']
            ],
            [
                'en-US' => ['title' => 'Coconut', 'description' => 'Rich and creamy coconuts'],
                'ru-RU' => ['title' => 'Кокос', 'description' => 'Богатые и кремовые кокосы']
            ],
            [
                'en-US' => ['title' => 'Cranberry', 'description' => 'Tart and healthy cranberries'],
                'ru-RU' => ['title' => 'Клюква', 'description' => 'Кислая и полезная клюква']
            ],
            [
                'en-US' => ['title' => 'Gooseberry', 'description' => 'Tangy and sweet gooseberries'],
                'ru-RU' => ['title' => 'Крыжовник', 'description' => 'Кисло-сладкий крыжовник']
            ],
            [
                'en-US' => ['title' => 'Grape', 'description' => 'Sweet and juicy grapes'],
                'ru-RU' => ['title' => 'Виноград', 'description' => 'Сладкий и сочный виноград']
            ],
            [
                'en-US' => ['title' => 'Grapefruit', 'description' => 'Tart and refreshing grapefruits'],
                'ru-RU' => ['title' => 'Грейпфрут', 'description' => 'Кислый и освежающий грейпфрут']
            ],
            [
                'en-US' => ['title' => 'Kiwi', 'description' => 'Tangy and sweet kiwis'],
                'ru-RU' => ['title' => 'Киви', 'description' => 'Кисло-сладкие киви']
            ],
            [
                'en-US' => ['title' => 'Lemon', 'description' => 'Sour and refreshing lemons'],
                'ru-RU' => ['title' => 'Лемон', 'description' => 'Кислый и освежающий лимон']
            ],
            [
                'en-US' => ['title' => 'Mango', 'description' => 'Sweet and tropical mangoes'],
                'ru-RU' => ['title' => 'Манго', 'description' => 'Сладкие и тропические манго']
            ],
            [
                'en-US' => ['title' => 'Melon', 'description' => 'Sweet and juicy melons'],
                'ru-RU' => ['title' => 'Дыня', 'description' => 'Сладкая и сочная дыня']
            ],
            [
                'en-US' => ['title' => 'Orange', 'description' => 'Sweet and tangy oranges'],
                'ru-RU' => ['title' => 'Апельсины', 'description' => 'Сладкие и кислые апельсины']
            ],
            [
                'en-US' => ['title' => 'Peach', 'description' => 'Sweet and juicy peaches'],
                'ru-RU' => ['title' => 'Персики', 'description' => 'Сладкие и сочные персики']
            ],
            [
                'en-US' => ['title' => 'Pear', 'description' => 'Sweet and juicy pears'],
                'ru-RU' => ['title' => 'Груша', 'description' => 'Сладкие и сочные груши']
            ],
            [
                'en-US' => ['title' => 'Persimmon', 'description' => 'Sweet and flavorful persimmons'],
                'ru-RU' => ['title' => 'Хурма', 'description' => 'Сладкая и ароматная хурма']
            ],
            [
                'en-US' => ['title' => 'Pineapple', 'description' => 'Sweet and tropical pineapples'],
                'ru-RU' => ['title' => 'Ананас', 'description' => 'Сладкие и тропические ананасы']
            ],
            [
                'en-US' => ['title' => 'Plum', 'description' => 'Sweet and juicy plums'],
                'ru-RU' => ['title' => 'Слива', 'description' => 'Сладкие и сочные сливы']
            ],
            [
                'en-US' => ['title' => 'Pomegranate', 'description' => 'Juicy and flavorful pomegranates'],
                'ru-RU' => ['title' => 'Гранат', 'description' => 'Сочные и ароматные гранаты']
            ],
            [
                'en-US' => ['title' => 'Raspberry', 'description' => 'Sweet and tangy raspberries'],
                'ru-RU' => ['title' => 'Малина', 'description' => 'Сладкая и кислая малина']
            ],
            [
                'en-US' => ['title' => 'Sea buckthorn', 'description' => 'Tart and nutritious sea buckthorn'],
                'ru-RU' => ['title' => 'Облепиха', 'description' => 'Кислая и питательная облепиха']
            ],
            [
                'en-US' => ['title' => 'Strawberry', 'description' => 'Sweet and juicy strawberries'],
                'ru-RU' => ['title' => 'Клубника', 'description' => 'Сладкая и сочная клубника']
            ],
            [
                'en-US' => ['title' => 'Sweet cherry', 'description' => 'Sweet and juicy sweet cherries'],
                'ru-RU' => ['title' => 'Черешня', 'description' => 'Сладкая и сочная черешня']
            ],
            [
                'en-US' => ['title' => 'Tangerines', 'description' => 'Sweet and tangy tangerines'],
                'ru-RU' => ['title' => 'Мандарины', 'description' => 'Сладкие и кислые мандарины']
            ],
            [
                'en-US' => ['title' => 'Watermelon', 'description' => 'Sweet and refreshing watermelons'],
                'ru-RU' => ['title' => 'Арбуз', 'description' => 'Сладкий и освежающий арбуз']
            ],
        ];

        $categories = [
            ['code' => 'fruit'],
            ['code' => 'berry'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        foreach ($products as $index => $productData) {
            $product = Product::create($productData);

            ProductTranslation::create([
                'product_id' => $product->id,
                'locale' => 'en-US',
                'title' => $translations[$index]['en-US']['title'],
                'description' => $translations[$index]['en-US']['description'],
            ]);

            ProductTranslation::create([
                'product_id' => $product->id,
                'locale' => 'ru-RU',
                'title' => $translations[$index]['ru-RU']['title'],
                'description' => $translations[$index]['ru-RU']['description'],
            ]);
        }
    }
}
