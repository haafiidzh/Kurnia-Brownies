<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = [
            [
                'name' => 'Chocolate Croissant', 
                'slug' => 'chocolate-croissant', 
                'image' => 'https://picsum.photos/id/11/800', 
                'description' => '<p>Indulge in our <strong>Chocolate Croissant</strong>, a flaky, buttery pastry filled with rich, velvety chocolate. Each bite offers a delightful combination of crisp outer layers and a soft, melt-in-your-mouth chocolate center.</p><p>Perfect for breakfast or an afternoon treat, this croissant pairs well with a cup of coffee or hot cocoa. You won\'t be able to resist the aroma and taste of this freshly baked delight!</p>', 
                'recommended' => true, 
                'category_id' => rand(1, 5)
            ],
            [
                'name' => 'Blueberry Muffin', 
                'slug' => 'blueberry-muffin', 
                'image' => 'https://picsum.photos/id/22/800', 
                'description' => '<p>Our <em>Blueberry Muffin</em> is packed with juicy blueberries, baked to perfection with a golden top and a moist center. Every bite brings you a burst of fresh berries combined with the subtle sweetness of the batter.</p><p>This muffin is not just a snack; it’s a way to start your day with a delicious and nutritious boost. Enjoy it with a cup of tea or on its own!</p>', 
                'recommended' => false, 
                'category_id' => rand(1, 5)
            ],
            [
                'name' => 'Cinnamon Roll', 
                'slug' => 'cinnamon-roll', 
                'image' => 'https://picsum.photos/id/33/800', 
                'description' => '<p>Experience the warmth and sweetness of our <strong>Cinnamon Roll</strong>, freshly baked with layers of dough rolled up with cinnamon and sugar, and topped with a delightful sweet glaze.</p><p>This roll is perfect for those chilly mornings or as a special dessert after dinner. Its soft, gooey center will make you come back for more!</p>', 
                'recommended' => true, 
                'category_id' => rand(1, 5)
            ],
            [
                'name' => 'Banana Bread', 
                'slug' => 'banana-bread', 
                'image' => 'https://picsum.photos/id/44/800', 
                'description' => '<p>This <em>Banana Bread</em> is a true classic, made with ripe bananas and a dash of cinnamon to enhance its natural sweetness. Soft, moist, and packed with banana flavor, it’s perfect for any time of the day.</p><p>Enjoy a slice with butter or on its own as a quick snack or breakfast. The aroma alone will remind you of homemade goodness!</p>', 
                'recommended' => false, 
                'category_id' => rand(1, 5)
            ],
            [
                'name' => 'Apple Pie', 
                'slug' => 'apple-pie', 
                'image' => 'https://picsum.photos/id/55/800', 
                'description' => '<p>There’s nothing like a warm slice of <strong>Apple Pie</strong> to bring comfort and joy. Our apple pie is made with a flaky crust and filled with spiced apples, creating the perfect balance of sweet and tart.</p><p>Served with a dollop of ice cream or whipped cream, this pie is sure to be a crowd-pleaser during any gathering or as a treat for yourself!</p>', 
                'recommended' => true, 
                'category_id' => rand(1, 5)
            ],
            [
                'name' => 'Lemon Tart', 
                'slug' => 'lemon-tart', 
                'image' => 'https://picsum.photos/id/67/800', 
                'description' => '<p>Our <em>Lemon Tart</em> is the perfect balance between sweet and tangy. The buttery pastry base complements the creamy, citrusy filling, giving you a burst of flavor with each bite.</p><p>This tart is ideal for those who love refreshing desserts. Serve chilled for a perfect summer treat or enjoy it any time of the year for a zesty delight.</p>', 
                'recommended' => false, 
                'category_id' => rand(1, 5)
            ],
            [
                'name' => 'Red Velvet Cake', 
                'slug' => 'red-velvet-cake', 
                'image' => 'https://picsum.photos/id/77/800', 
                'description' => '<p>The classic <strong>Red Velvet Cake</strong> is a showstopper with its deep red color and luscious cream cheese frosting. This cake is moist, tender, and just the right amount of sweet.</p><p>Whether for a special occasion or simply to satisfy your sweet tooth, this cake is sure to leave a lasting impression on your taste buds.</p>', 
                'recommended' => true, 
                'category_id' => rand(1, 5)
            ],
            [
                'name' => 'Almond Biscotti', 
                'slug' => 'almond-biscotti', 
                'image' => 'https://picsum.photos/id/88/800', 
                'description' => '<p>Crisp and crunchy, our <em>Almond Biscotti</em> is perfect for dipping in coffee or tea. Made with toasted almonds and a hint of vanilla, these cookies are baked twice to achieve their signature texture.</p><p>A traditional Italian favorite, these biscotti are great as a snack or dessert. Pair them with your favorite hot beverage for an indulgent treat.</p>', 
                'recommended' => false, 
                'category_id' => rand(1, 5)
            ],
            [
                'name' => 'Cheesecake', 
                'slug' => 'cheesecake', 
                'image' => 'https://picsum.photos/id/99/800', 
                'description' => '<p>Our <strong>Cheesecake</strong> is a creamy, dreamy delight with a buttery graham cracker crust and a rich, smooth filling. Every bite is a balance of tangy cream cheese and a hint of vanilla.</p><p>Perfect for special occasions or simply to indulge in a decadent dessert, our cheesecake is sure to please any crowd. Add your favorite fruit topping for an extra touch of sweetness!</p>', 
                'recommended' => true, 
                'category_id' => rand(1, 5)
            ],
            [
                'name' => 'Sourdough Bread', 
                'slug' => 'sourdough-bread', 
                'image' => 'https://picsum.photos/id/101/800', 
                'description' => '<p>Our <em>Sourdough Bread</em> features a crispy crust and a chewy, tangy interior. Made with a natural sourdough starter, this bread has a depth of flavor that only comes from slow fermentation.</p><p>It’s perfect for making sandwiches, serving alongside soup, or enjoying with a simple spread of butter. The possibilities are endless with this versatile and flavorful bread.</p>', 
                'recommended' => false, 
                'category_id' => rand(1, 5)
            ],
            [
                'name' => 'Pumpkin Spice Latte Cake', 
                'slug' => 'pumpkin-spice-latte-cake', 
                'image' => 'https://picsum.photos/id/111/800', 
                'description' => '<p>For lovers of fall flavors, our <strong>Pumpkin Spice Latte Cake</strong> is a must-try. This cake combines the warm spices of cinnamon, nutmeg, and cloves with a hint of coffee, creating a rich and cozy flavor experience.</p><p>Perfect for the autumn season or any time you crave those comforting flavors, this cake will remind you of your favorite seasonal drink with every bite.</p>', 
                'recommended' => true, 
                'category_id' => rand(1, 5)
            ],
            [
                'name' => 'Macarons', 
                'slug' => 'macarons', 
                'image' => 'https://picsum.photos/id/121/800', 
                'description' => '<p>Delicate and colorful, our <em>Macarons</em> come in a variety of flavors and colors. These French pastries are made with almond flour, sugar, and egg whites, creating a light and airy texture.</p><p>With a crisp exterior and a soft, flavorful filling, these macarons are perfect for any occasion. Treat yourself to a box and enjoy the delightful taste of Parisian pâtisseries.</p>', 
                'recommended' => false, 
                'category_id' => rand(1, 5)
            ],
            [
                'name' => 'Carrot Cake', 
                'slug' => 'carrot-cake', 
                'image' => 'https://picsum.photos/id/131/800', 
                'description' => '<p>Our <strong>Carrot Cake</strong> is made with freshly grated carrots, warm spices, and topped with a luscious cream cheese frosting. This moist and flavorful cake is a classic favorite for all ages.</p><p>Perfect for any celebration or as a special treat, this cake combines the wholesome goodness of carrots with a deliciously sweet finish.</p>', 
                'recommended' => true, 
                'category_id' => rand(1, 5)
            ],
            [
                'name' => 'Chocolate Chip Cookies', 
                'slug' => 'chocolate-chip-cookies', 
                'image' => 'https://picsum.photos/id/141/800', 
                'description' => '<p>Everyone loves a good <strong>Chocolate Chip Cookie</strong>, and ours are no exception. These cookies are soft, chewy, and packed with chocolate chips in every bite.</p><p>Baked fresh daily, these cookies are perfect for any occasion or just to enjoy with a glass of milk. They’re the ultimate comfort food!</p>', 
                'recommended' => true, 
                'category_id' => rand(1, 5)
            ],
            [
                'name' => 'Brownies', 
                'slug' => 'brownies', 
                'image' => 'https://picsum.photos/id/151/800', 
                'description' => '<p>Our <em>Brownies</em> are rich, fudgy, and packed with chocolatey goodness. These squares of decadence are perfect for anyone with a serious sweet tooth.</p><p>Enjoy them on their own or with a scoop of vanilla ice cream for a truly indulgent dessert. These brownies are guaranteed to satisfy any chocolate craving.</p>', 
                'recommended' => false, 
                'category_id' => rand(1, 5)
            ],
            [
                'name' => 'Raspberry Tart', 
                'slug' => 'raspberry-tart', 
                'image' => 'https://picsum.photos/id/161/800', 
                'description' => '<p>Our <strong>Raspberry Tart</strong> features a buttery, flaky crust filled with a luscious raspberry compote and topped with fresh raspberries. The perfect combination of sweet and tart, this dessert is a feast for the senses.</p><p>Ideal for special occasions or as a fancy treat, this tart will impress both your taste buds and your guests.</p>', 
                'recommended' => true, 
                'category_id' => rand(1, 5)
            ],
            [
                'name' => 'Pecan Pie', 
                'slug' => 'pecan-pie', 
                'image' => 'https://picsum.photos/id/171/800', 
                'description' => '<p>Our <em>Pecan Pie</em> is the perfect combination of crunchy pecans and a sweet, gooey filling, all baked into a buttery crust. This classic dessert is a must-have for any holiday table.</p><p>Served warm with a dollop of whipped cream or a scoop of vanilla ice cream, this pie is a comforting, satisfying dessert that everyone will love.</p>', 
                'recommended' => false, 
                'category_id' => rand(1, 5)
            ],
            [
                'name' => 'Croquembouche', 
                'slug' => 'croquembouche', 
                'image' => 'https://picsum.photos/id/181/800', 
                'description' => '<p>Our stunning <strong>Croquembouche</strong> is a tower of delicate, filled profiteroles, held together with caramel and finished with a spun sugar decoration. This traditional French dessert is both a visual and culinary masterpiece.</p><p>Perfect for weddings, celebrations, or any special occasion, this dessert will be the centerpiece of your event. The combination of crisp choux pastry and creamy filling is irresistible.</p>', 
                'recommended' => true, 
                'category_id' => rand(1, 5)
            ],
            [
                'name' => 'Tiramisu', 
                'slug' => 'tiramisu', 
                'image' => 'https://picsum.photos/id/191/800', 
                'description' => '<p>Our <em>Tiramisu</em> is a classic Italian dessert made with layers of coffee-soaked ladyfingers and a rich mascarpone cream, dusted with cocoa powder. It’s a perfect balance of flavors and textures.</p><p>This indulgent dessert is perfect for coffee lovers and those who appreciate a sophisticated sweet treat. Each bite will transport you to the cafés of Italy.</p>', 
                'recommended' => false, 
                'category_id' => rand(1, 5)
            ],
        ];

        foreach ($product as $data) {
            Product::updateOrCreate($data);
        }
    }
}
