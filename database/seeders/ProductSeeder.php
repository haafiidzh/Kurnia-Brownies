<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryIds = Categories::where('group', 'product')->pluck('id')->toArray();

        // $product = [
        //     [
        //         'name' => 'Croissant Cokelat', 
        //         'slug' => slug('Croissant Cokelat'), 
        //         'image' => 'https://picsum.photos/id/11/800', 
        //         'short_description' => 'Pastry renyah dan mentega dengan isian cokelat yang kaya, sempurna untuk sarapan atau cemilan sore.',
        //         'description' => '<p>Nikmati <strong>Croissant Cokelat</strong> kami, pastry renyah dan mentega yang diisi dengan cokelat yang lembut dan kaya rasa. Setiap gigitan menawarkan kombinasi lapisan luar yang renyah dan bagian dalam cokelat yang lembut, meleleh di mulut.</p><p>Sempurna untuk sarapan atau cemilan sore, croissant ini cocok dipadukan dengan secangkir kopi atau cokelat panas. Anda tidak akan bisa menahan aroma dan rasa dari hidangan yang baru dipanggang ini!</p>', 
        //         'best_seller' => true, 
        //         'category_id' => $this->getRandomCategoryId($categoryIds),
        //     ],
        //     [
        //         'name' => 'Muffin Blueberry', 
        //         'slug' => slug('Muffin Blueberry'), 
        //         'image' => 'https://picsum.photos/id/22/800', 
        //         'short_description' => 'Muffin lezat dengan blueberry segar dan atasnya keemasan, sempurna untuk memulai hari dengan sehat.',
        //         'description' => '<p>Muffin <em>Blueberry</em> kami dipenuhi dengan blueberry yang juicy, dipanggang sempurna dengan bagian atas yang keemasan dan bagian dalam yang lembut. Setiap gigitan memberikan ledakan rasa blueberry segar yang dipadukan dengan kelembutan adonan yang manis.</p><p>Muffin ini bukan hanya camilan, tetapi cara untuk memulai hari Anda dengan dorongan energi yang lezat dan bergizi. Nikmati dengan secangkir teh atau sendirian!</p>', 
        //         'best_seller' => false, 
        //         'category_id' => $this->getRandomCategoryId($categoryIds),
        //     ],
        //     [
        //         'name' => 'Roll Kayu Manis', 
        //         'slug' => slug('Roll Kayu Manis'),
        //         'image' => 'https://picsum.photos/id/33/800', 
        //         'short_description' => 'Roll kayu manis yang hangat dan lembut dengan lapisan manis, sempurna untuk pagi yang dingin atau sebagai pencuci mulut.',
        //         'description' => '<p>Rasakan kehangatan dan rasa manis dari <strong>Roll Kayu Manis</strong> kami, dipanggang segar dengan lapisan adonan yang digulung dengan kayu manis dan gula, kemudian ditambahkan glasir manis yang menggugah selera.</p><p>Roll ini sempurna untuk pagi yang dingin atau sebagai pencuci mulut spesial setelah makan malam. Bagian dalamnya yang lembut dan kenyal akan membuat Anda ketagihan!</p>', 
        //         'best_seller' => true, 
        //         'category_id' => $this->getRandomCategoryId($categoryIds),
        //     ],
        //     [
        //         'name' => 'Roti Pisang', 
        //         'slug' => slug('Roti Pisang'),
        //         'image' => 'https://picsum.photos/id/44/800', 
        //         'short_description' => 'Roti pisang yang lembut dan basah, dibuat dengan pisang matang dan kayu manis, camilan cepat yang sempurna untuk sarapan.',
        //         'description' => '<p><em>Roti Pisang</em> ini adalah klasik sejati, dibuat dengan pisang matang dan sedikit kayu manis untuk menambah rasa manis alami. Lembut, basah, dan penuh dengan rasa pisang, ini sempurna untuk dinikmati kapan saja.</p><p>Nikmati sepotong dengan mentega atau begitu saja sebagai camilan cepat atau sarapan. Aroma roti ini akan mengingatkan Anda pada kebaikan buatan rumah!</p>', 
        //         'best_seller' => false, 
        //         'category_id' => $this->getRandomCategoryId($categoryIds),
        //     ],
        //     [
        //         'name' => 'Pai Apel', 
        //         'slug' => slug('Pai Apel'),
        //         'image' => 'https://picsum.photos/id/55/800', 
        //         'short_description' => 'Pai apel klasik dengan kulit renyah dan isian apel berbumbu, keseimbangan sempurna antara manis dan asam.',
        //         'description' => '<p>Tidak ada yang lebih nikmat dari sepotong <strong>Pai Apel</strong> yang hangat untuk memberikan kenyamanan dan kebahagiaan. Pai apel kami dibuat dengan kulit yang renyah dan diisi dengan apel berbumbu, menciptakan keseimbangan sempurna antara rasa manis dan asam.</p><p>Dihidangkan dengan sejumput es krim atau krim kocok, pai ini pasti akan menjadi favorit di setiap acara atau sebagai camilan untuk diri sendiri!</p>', 
        //         'best_seller' => true, 
        //         'category_id' => $this->getRandomCategoryId($categoryIds),
        //     ],
        //     [
        //         'name' => 'Tart Lemon', 
        //         'slug' => slug('Tart Lemon'),
        //         'image' => 'https://picsum.photos/id/67/800', 
        //         'short_description' => 'Tart lemon yang segar dengan lapisan bawah mentega dan isian citrus yang menyegarkan, sempurna untuk pencuci mulut ringan dan asam.',
        //         'description' => '<p><em>Tart Lemon</em> kami adalah keseimbangan sempurna antara manis dan asam. Lapisan bawah pastry yang mentega melengkapi isian citrus yang lembut, memberikan ledakan rasa dengan setiap gigitan.</p><p>Tart ini ideal bagi mereka yang menyukai pencuci mulut yang menyegarkan. Sajikan dingin untuk camilan musim panas yang sempurna atau nikmati kapan saja sepanjang tahun untuk kelezatan yang asam.</p>', 
        //         'best_seller' => false, 
        //         'category_id' => $this->getRandomCategoryId($categoryIds),
        //     ],
        //     [
        //         'name' => 'Kue Red Velvet', 
        //         'slug' => slug('Kue Red Velvet'),
        //         'image' => 'https://picsum.photos/id/77/800', 
        //         'short_description' => 'Kue red velvet yang lembut dan empuk dengan frosting krim keju yang lezat, sempurna untuk setiap kesempatan.',
        //         'description' => '<p>Kue klasik <strong>Red Velvet</strong> ini sangat mencuri perhatian dengan warna merahnya yang dalam dan frosting krim keju yang lembut. Kue ini lembut, empuk, dan memiliki rasa manis yang tepat.</p><p>Apakah untuk acara spesial atau sekadar untuk memuaskan rasa manis Anda, kue ini pasti akan meninggalkan kesan mendalam di lidah Anda.</p>', 
        //         'best_seller' => true, 
        //         'category_id' => $this->getRandomCategoryId($categoryIds),
        //     ],
        //     [
        //         'name' => 'Biscotti Almond', 
        //         'slug' => slug('Biscotti Almond'),
        //         'image' => 'https://picsum.photos/id/88/800', 
        //         'short_description' => 'Biscotti almond yang renyah, sempurna untuk dicelupkan ke dalam kopi atau teh, dengan rasa tradisional Italia.',
        //         'description' => '<p>Kering dan renyah, <em>Biscotti Almond</em> kami sempurna untuk dicelupkan ke dalam kopi atau teh. Terbuat dari almond panggang dan sedikit vanila, kue ini dipanggang dua kali untuk mendapatkan tekstur khasnya.</p><p>Favorit tradisional Italia, biscotti ini sangat cocok sebagai camilan atau pencuci mulut. Padukan dengan minuman panas favorit Anda untuk camilan yang memanjakan.</p>', 
        //         'best_seller' => false, 
        //         'category_id' => $this->getRandomCategoryId($categoryIds),
        //     ],            


        //     [
        //         'name' => 'Cheesecake', 
        //         'slug' => slug('Cheesecake'),
        //         'image' => 'https://picsum.photos/id/99/800', 
        //         'short_description' => 'Cheesecake yang lembut dengan rasa keju krim yang lezat dan lapisan graham cracker renyah.',
        //         'description' => '<p>Cheesecake kami adalah kenikmatan krimi dan lembut dengan lapisan dasar graham cracker yang renyah dan isian yang kaya serta halus. Setiap gigitan merupakan perpaduan keju krim yang asam dan sentuhan vanilla.</p><p>Ideal untuk acara spesial atau sekadar menikmati makanan penutup yang mewah, cheesecake kami pasti akan disukai banyak orang. Tambahkan topping buah favorit untuk sentuhan manis ekstra!</p>', 
        //         'best_seller' => true, 
        //         'category_id' => $this->getRandomCategoryId($categoryIds),
        //     ],
        //     [
        //         'name' => 'Roti Sourdough', 
        //         'slug' => slug('Roti Sourdough'),
        //         'image' => 'https://picsum.photos/id/101/800', 
        //         'short_description' => 'Roti dengan kerak renyah dan tekstur kenyal serta rasa asam yang khas.',
        //         'description' => '<p>Roti sourdough kami memiliki kulit yang renyah dan isi yang kenyal serta asam. Dibuat dengan starter sourdough alami, roti ini memiliki kedalaman rasa yang hanya didapatkan dari fermentasi yang lambat.</p><p>Roti ini sempurna untuk membuat sandwich, disajikan dengan sup, atau dinikmati dengan mentega. Kemungkinannya tak terbatas dengan roti yang serbaguna dan penuh rasa ini.</p>', 
        //         'best_seller' => false, 
        //         'category_id' => $this->getRandomCategoryId($categoryIds),
        //     ],
        //     [
        //         'name' => 'Kue Latte Rempah Labu', 
        //         'slug' => slug('Kue Latte Rempah Labu'),
        //         'image' => 'https://picsum.photos/id/111/800', 
        //         'short_description' => 'Kue lezat dengan perpaduan rempah hangat dan rasa kopi yang menenangkan.',
        //         'description' => '<p>Untuk pecinta rasa musim gugur, kue <strong>Latte Rempah Labu</strong> kami adalah pilihan yang wajib dicoba. Kue ini memadukan rempah hangat seperti kayu manis, pala, dan cengkeh dengan sentuhan kopi, menciptakan rasa yang kaya dan nyaman.</p><p>Sempurna untuk musim gugur atau kapan saja Anda ingin menikmati rasa hangat yang menenangkan, kue ini akan mengingatkan Anda pada minuman musiman favorit dengan setiap gigitan.</p>', 
        //         'best_seller' => true, 
        //         'category_id' => $this->getRandomCategoryId($categoryIds),
        //     ],
        //     [
        //         'name' => 'Macaron', 
        //         'slug' => slug('Macaron'),
        //         'image' => 'https://picsum.photos/id/121/800', 
        //         'short_description' => 'Kue Prancis yang lembut, berwarna-warni, dengan berbagai rasa.',
        //         'description' => '<p>Delicate dan berwarna-warni, <em>Macaron</em> kami hadir dalam berbagai rasa dan warna. Kue Prancis ini terbuat dari tepung almond, gula, dan putih telur, menciptakan tekstur ringan dan berbusa.</p><p>Dengan bagian luar yang renyah dan isian lembut yang penuh rasa, macarons ini sempurna untuk segala acara. Nikmati dalam sebuah kotak dan rasakan cita rasa kue-kue dari Paris.</p>', 
        //         'best_seller' => false, 
        //         'category_id' => $this->getRandomCategoryId($categoryIds),
        //     ],
        //     [
        //         'name' => 'Kue Wortel', 
        //         'slug' => slug('Kue Wortel'),
        //         'image' => 'https://picsum.photos/id/131/800', 
        //         'short_description' => 'Kue lembut dengan wortel parut segar dan lapisan frosting krim keju yang lezat.',
        //         'description' => '<p>Kue <strong>Wortel</strong> kami terbuat dari wortel parut segar, rempah-rempah hangat, dan diberi lapisan frosting krim keju yang lezat. Kue ini lembut dan penuh rasa, menjadi favorit klasik di segala usia.</p><p>Sempurna untuk perayaan atau sebagai camilan spesial, kue ini menggabungkan kebaikan wortel dengan rasa manis yang nikmat.</p>', 
        //         'best_seller' => true, 
        //         'category_id' => $this->getRandomCategoryId($categoryIds),
        //     ],
        //     [
        //         'name' => 'Kue Chocolate Chip', 
        //         'slug' => slug('Kue Chocolate Chip'),
        //         'image' => 'https://picsum.photos/id/141/800', 
        //         'short_description' => 'Kue lembut dengan chips cokelat yang lumer di setiap gigitan.',
        //         'description' => '<p>Semua orang menyukai <strong>Kue Chocolate Chip</strong> yang lezat, dan kue kami tidak terkecuali. Kue ini lembut, kenyal, dan penuh dengan chips cokelat di setiap gigitan.</p><p>Dipanggang segar setiap hari, kue ini sempurna untuk segala acara atau sekadar menemani segelas susu. Ini adalah makanan kenyamanan terbaik!</p>', 
        //         'best_seller' => true, 
        //         'category_id' => $this->getRandomCategoryId($categoryIds),
        //     ],
        //     [
        //         'name' => 'Brownies', 
        //         'slug' => slug('Brownies'),
        //         'image' => 'https://picsum.photos/id/151/800', 
        //         'short_description' => 'Brownies fudgy dengan rasa cokelat yang kaya dan kenikmatan maksimal.',
        //         'description' => '<p>Brownies kami kaya, fudgy, dan penuh dengan rasa cokelat yang memanjakan. Potongan kue ini sempurna untuk siapa saja yang menyukai manisan cokelat.</p><p>Nikmati sendiri atau tambahkan satu sendok es krim vanila untuk pencuci mulut yang benar-benar menggoda. Brownies ini pasti memuaskan setiap keinginan cokelat.</p>', 
        //         'best_seller' => false, 
        //         'category_id' => $this->getRandomCategoryId($categoryIds),
        //     ],
        //     [
        //         'name' => 'Tart Raspberry', 
        //         'slug' => slug('Tart Raspberry'),
        //         'image' => 'https://picsum.photos/id/161/800', 
        //         'short_description' => 'Tart dengan krust renyah, isian kompot raspberry, dan topping raspberry segar.',
        //         'description' => '<p>Tart <strong>Raspberry</strong> kami memiliki krust yang renyah, diisi dengan kompot raspberry yang lezat dan dihiasi dengan raspberry segar. Kombinasi sempurna antara rasa manis dan asam, dessert ini benar-benar memanjakan indera Anda.</p><p>Ideal untuk acara spesial atau sebagai hidangan penutup yang mewah, tart ini akan memukau baik lidah Anda maupun tamu Anda.</p>', 
        //         'best_seller' => true, 
        //         'category_id' => $this->getRandomCategoryId($categoryIds),
        //     ],
        //     [
        //         'name' => 'Pecan Pie', 
        //         'slug' => slug('Pecan Pie'),
        //         'image' => 'https://picsum.photos/id/171/800', 
        //         'short_description' => 'Pie dengan pecan renyah dan isian manis yang memanjakan.',
        //         'description' => '<p>Pecan Pie kami adalah kombinasi sempurna antara pecan yang renyah dan isian manis yang lengket, semua dipanggang dalam kulit pastry mentega. Dessert klasik ini adalah hidangan wajib di meja perayaan apa pun.</p><p>Disajikan hangat dengan whipped cream atau es krim vanila, pie ini adalah hidangan penutup yang nyaman dan memuaskan yang pasti akan disukai semua orang.</p>', 
        //         'best_seller' => false, 
        //         'category_id' => $this->getRandomCategoryId($categoryIds),
        //     ],
        //     [
        //         'name' => 'Croquembouche', 
        //         'slug' => slug('Croquembouche'), 
        //         'image' => 'https://picsum.photos/id/181/800', 
        //         'short_description' => 'Makanan penutup Prancis yang menakjubkan dengan profiteroles yang diisi, dihias karamel dan gula spun.',
        //         'description' => '<p>Croquembouche kami yang menakjubkan adalah menara profiteroles yang lembut, diisi, diikat dengan karamel dan dihiasi dengan dekorasi gula spun. Dessert tradisional Prancis ini adalah karya seni visual dan kuliner.</p><p>Sempurna untuk pernikahan, perayaan, atau acara spesial lainnya, dessert ini akan menjadi pusat perhatian acara Anda. Kombinasi kue pastry choux yang renyah dan isian krimnya benar-benar tak tertahankan.</p>', 
        //         'best_seller' => true, 
        //         'category_id' => $this->getRandomCategoryId($categoryIds),
        //     ],
        //     [
        //         'name' => 'Tiramisu', 
        //         'slug' => slug('Tiramisu'), 
        //         'image' => 'https://picsum.photos/id/191/800', 
        //         'short_description' => 'Dessert klasik Italia dengan ladyfingers yang direndam kopi dan krim mascarpone yang lezat.',
        //         'description' => '<p>Tiramisu kami adalah dessert klasik Italia yang dibuat dengan lapisan ladyfingers yang direndam kopi dan krim mascarpone yang kaya, diberi taburan bubuk kakao. Ini adalah keseimbangan rasa dan tekstur yang sempurna.</p><p>Desert indulgent ini sempurna untuk pecinta kopi dan mereka yang menghargai camilan manis yang elegan. Setiap gigitan akan membawa Anda ke kafe-kafe di Italia.</p>', 
        //         'best_seller' => false, 
        //         'category_id' => $this->getRandomCategoryId($categoryIds),
        //     ],    
        // ];

        $product = [
            [
                'name' => 'Croissant Cokelat', 
                'slug' => slug('Croissant Cokelat'), 
                'image' => 'assets/images/default/category/snacks.png', 
                'short_description' => 'Pastry renyah dan mentega dengan isian cokelat yang kaya, sempurna untuk sarapan atau cemilan sore.',
                'description' => '<p>Nikmati <strong>Croissant Cokelat</strong> kami, pastry renyah dan mentega yang diisi dengan cokelat yang lembut dan kaya rasa. Setiap gigitan menawarkan kombinasi lapisan luar yang renyah dan bagian dalam cokelat yang lembut, meleleh di mulut.</p><p>Sempurna untuk sarapan atau cemilan sore, croissant ini cocok dipadukan dengan secangkir kopi atau cokelat panas. Anda tidak akan bisa menahan aroma dan rasa dari hidangan yang baru dipanggang ini!</p>', 
                'best_seller' => true, 
                'category_id' => $this->getRandomCategoryId($categoryIds),
            ],
            [
                'name' => 'Muffin Blueberry', 
                'slug' => slug('Muffin Blueberry'), 
                'image' => 'assets/images/default/category/coldbeverages.png', 
                'short_description' => 'Muffin lezat dengan blueberry segar dan atasnya keemasan, sempurna untuk memulai hari dengan sehat.',
                'description' => '<p>Muffin <em>Blueberry</em> kami dipenuhi dengan blueberry yang juicy, dipanggang sempurna dengan bagian atas yang keemasan dan bagian dalam yang lembut. Setiap gigitan memberikan ledakan rasa blueberry segar yang dipadukan dengan kelembutan adonan yang manis.</p><p>Muffin ini bukan hanya camilan, tetapi cara untuk memulai hari Anda dengan dorongan energi yang lezat dan bergizi. Nikmati dengan secangkir teh atau sendirian!</p>', 
                'best_seller' => false, 
                'category_id' => $this->getRandomCategoryId($categoryIds),
            ],
            [
                'name' => 'Roll Kayu Manis', 
                'slug' => slug('Roll Kayu Manis'),
                'image' => 'assets/images/default/category/appetizer.png', 
                'short_description' => 'Roll kayu manis yang hangat dan lembut dengan lapisan manis, sempurna untuk pagi yang dingin atau sebagai pencuci mulut.',
                'description' => '<p>Rasakan kehangatan dan rasa manis dari <strong>Roll Kayu Manis</strong> kami, dipanggang segar dengan lapisan adonan yang digulung dengan kayu manis dan gula, kemudian ditambahkan glasir manis yang menggugah selera.</p><p>Roll ini sempurna untuk pagi yang dingin atau sebagai pencuci mulut spesial setelah makan malam. Bagian dalamnya yang lembut dan kenyal akan membuat Anda ketagihan!</p>', 
                'best_seller' => true, 
                'category_id' => $this->getRandomCategoryId($categoryIds),
            ],
            [
                'name' => 'Roti Pisang', 
                'slug' => slug('Roti Pisang'),
                'image' => 'assets/images/default/category/maincourse.png', 
                'short_description' => 'Roti pisang yang lembut dan basah, dibuat dengan pisang matang dan kayu manis, camilan cepat yang sempurna untuk sarapan.',
                'description' => '<p><em>Roti Pisang</em> ini adalah klasik sejati, dibuat dengan pisang matang dan sedikit kayu manis untuk menambah rasa manis alami. Lembut, basah, dan penuh dengan rasa pisang, ini sempurna untuk dinikmati kapan saja.</p><p>Nikmati sepotong dengan mentega atau begitu saja sebagai camilan cepat atau sarapan. Aroma roti ini akan mengingatkan Anda pada kebaikan buatan rumah!</p>', 
                'best_seller' => false, 
                'category_id' => $this->getRandomCategoryId($categoryIds),
            ],
            [
                'name' => 'Pai Apel', 
                'slug' => slug('Pai Apel'),
                'image' => 'assets/images/default/category/snacks.png', 
                'short_description' => 'Pai apel klasik dengan kulit renyah dan isian apel berbumbu, keseimbangan sempurna antara manis dan asam.',
                'description' => '<p>Tidak ada yang lebih nikmat dari sepotong <strong>Pai Apel</strong> yang hangat untuk memberikan kenyamanan dan kebahagiaan. Pai apel kami dibuat dengan kulit yang renyah dan diisi dengan apel berbumbu, menciptakan keseimbangan sempurna antara rasa manis dan asam.</p><p>Dihidangkan dengan sejumput es krim atau krim kocok, pai ini pasti akan menjadi favorit di setiap acara atau sebagai camilan untuk diri sendiri!</p>', 
                'best_seller' => true, 
                'category_id' => $this->getRandomCategoryId($categoryIds),
            ],
            [
                'name' => 'Tart Lemon', 
                'slug' => slug('Tart Lemon'),
                'image' => 'assets/images/default/category/hotbeverages.png', 
                'short_description' => 'Tart lemon yang segar dengan lapisan bawah mentega dan isian citrus yang menyegarkan, sempurna untuk pencuci mulut ringan dan asam.',
                'description' => '<p><em>Tart Lemon</em> kami adalah keseimbangan sempurna antara manis dan asam. Lapisan bawah pastry yang mentega melengkapi isian citrus yang lembut, memberikan ledakan rasa dengan setiap gigitan.</p><p>Tart ini ideal bagi mereka yang menyukai pencuci mulut yang menyegarkan. Sajikan dingin untuk camilan musim panas yang sempurna atau nikmati kapan saja sepanjang tahun untuk kelezatan yang asam.</p>', 
                'best_seller' => false, 
                'category_id' => $this->getRandomCategoryId($categoryIds),
            ],
            [
                'name' => 'Kue Red Velvet', 
                'slug' => slug('Kue Red Velvet'),
                'image' => 'assets/images/default/category/coldbeverages.png', 
                'short_description' => 'Kue red velvet yang lembut dan empuk dengan frosting krim keju yang lezat, sempurna untuk setiap kesempatan.',
                'description' => '<p>Kue klasik <strong>Red Velvet</strong> ini sangat mencuri perhatian dengan warna merahnya yang dalam dan frosting krim keju yang lembut. Kue ini lembut, empuk, dan memiliki rasa manis yang tepat.</p><p>Apakah untuk acara spesial atau sekadar untuk memuaskan rasa manis Anda, kue ini pasti akan meninggalkan kesan mendalam di lidah Anda.</p>', 
                'best_seller' => true, 
                'category_id' => $this->getRandomCategoryId($categoryIds),
            ],
            [
                'name' => 'Biscotti Almond', 
                'slug' => slug('Biscotti Almond'),
                'image' => 'assets/images/default/category/maincourse.png', 
                'short_description' => 'Biscotti almond yang renyah, sempurna untuk dicelupkan ke dalam kopi atau teh, dengan rasa tradisional Italia.',
                'description' => '<p>Kering dan renyah, <em>Biscotti Almond</em> kami sempurna untuk dicelupkan ke dalam kopi atau teh. Terbuat dari almond panggang dan sedikit vanila, kue ini dipanggang dua kali untuk mendapatkan tekstur khasnya.</p><p>Favorit tradisional Italia, biscotti ini sangat cocok sebagai camilan atau pencuci mulut. Padukan dengan minuman panas favorit Anda untuk camilan yang memanjakan.</p>', 
                'best_seller' => false, 
                'category_id' => $this->getRandomCategoryId($categoryIds),
            ],            


            [
                'name' => 'Cheesecake', 
                'slug' => slug('Cheesecake'),
                'image' => 'assets/images/default/category/appetizer.png', 
                'short_description' => 'Cheesecake yang lembut dengan rasa keju krim yang lezat dan lapisan graham cracker renyah.',
                'description' => '<p>Cheesecake kami adalah kenikmatan krimi dan lembut dengan lapisan dasar graham cracker yang renyah dan isian yang kaya serta halus. Setiap gigitan merupakan perpaduan keju krim yang asam dan sentuhan vanilla.</p><p>Ideal untuk acara spesial atau sekadar menikmati makanan penutup yang mewah, cheesecake kami pasti akan disukai banyak orang. Tambahkan topping buah favorit untuk sentuhan manis ekstra!</p>', 
                'best_seller' => true, 
                'category_id' => $this->getRandomCategoryId($categoryIds),
            ],
            [
                'name' => 'Roti Sourdough', 
                'slug' => slug('Roti Sourdough'),
                'image' => 'assets/images/default/category/snacks.png', 
                'short_description' => 'Roti dengan kerak renyah dan tekstur kenyal serta rasa asam yang khas.',
                'description' => '<p>Roti sourdough kami memiliki kulit yang renyah dan isi yang kenyal serta asam. Dibuat dengan starter sourdough alami, roti ini memiliki kedalaman rasa yang hanya didapatkan dari fermentasi yang lambat.</p><p>Roti ini sempurna untuk membuat sandwich, disajikan dengan sup, atau dinikmati dengan mentega. Kemungkinannya tak terbatas dengan roti yang serbaguna dan penuh rasa ini.</p>', 
                'best_seller' => false, 
                'category_id' => $this->getRandomCategoryId($categoryIds),
            ],
            [
                'name' => 'Kue Latte Rempah Labu', 
                'slug' => slug('Kue Latte Rempah Labu'),
                'image' => 'assets/images/default/category/hotbeverages.png', 
                'short_description' => 'Kue lezat dengan perpaduan rempah hangat dan rasa kopi yang menenangkan.',
                'description' => '<p>Untuk pecinta rasa musim gugur, kue <strong>Latte Rempah Labu</strong> kami adalah pilihan yang wajib dicoba. Kue ini memadukan rempah hangat seperti kayu manis, pala, dan cengkeh dengan sentuhan kopi, menciptakan rasa yang kaya dan nyaman.</p><p>Sempurna untuk musim gugur atau kapan saja Anda ingin menikmati rasa hangat yang menenangkan, kue ini akan mengingatkan Anda pada minuman musiman favorit dengan setiap gigitan.</p>', 
                'best_seller' => true, 
                'category_id' => $this->getRandomCategoryId($categoryIds),
            ],
            [
                'name' => 'Macaron', 
                'slug' => slug('Macaron'),
                'image' => 'assets/images/default/category/hotbeverages.png', 
                'short_description' => 'Kue Prancis yang lembut, berwarna-warni, dengan berbagai rasa.',
                'description' => '<p>Delicate dan berwarna-warni, <em>Macaron</em> kami hadir dalam berbagai rasa dan warna. Kue Prancis ini terbuat dari tepung almond, gula, dan putih telur, menciptakan tekstur ringan dan berbusa.</p><p>Dengan bagian luar yang renyah dan isian lembut yang penuh rasa, macarons ini sempurna untuk segala acara. Nikmati dalam sebuah kotak dan rasakan cita rasa kue-kue dari Paris.</p>', 
                'best_seller' => false, 
                'category_id' => $this->getRandomCategoryId($categoryIds),
            ],
            [
                'name' => 'Kue Wortel', 
                'slug' => slug('Kue Wortel'),
                'image' => 'assets/images/default/category/coldbeverages.png', 
                'short_description' => 'Kue lembut dengan wortel parut segar dan lapisan frosting krim keju yang lezat.',
                'description' => '<p>Kue <strong>Wortel</strong> kami terbuat dari wortel parut segar, rempah-rempah hangat, dan diberi lapisan frosting krim keju yang lezat. Kue ini lembut dan penuh rasa, menjadi favorit klasik di segala usia.</p><p>Sempurna untuk perayaan atau sebagai camilan spesial, kue ini menggabungkan kebaikan wortel dengan rasa manis yang nikmat.</p>', 
                'best_seller' => true, 
                'category_id' => $this->getRandomCategoryId($categoryIds),
            ],
            [
                'name' => 'Kue Chocolate Chip', 
                'slug' => slug('Kue Chocolate Chip'),
                'image' => 'assets/images/default/category/snacks.png', 
                'short_description' => 'Kue lembut dengan chips cokelat yang lumer di setiap gigitan.',
                'description' => '<p>Semua orang menyukai <strong>Kue Chocolate Chip</strong> yang lezat, dan kue kami tidak terkecuali. Kue ini lembut, kenyal, dan penuh dengan chips cokelat di setiap gigitan.</p><p>Dipanggang segar setiap hari, kue ini sempurna untuk segala acara atau sekadar menemani segelas susu. Ini adalah makanan kenyamanan terbaik!</p>', 
                'best_seller' => true, 
                'category_id' => $this->getRandomCategoryId($categoryIds),
            ],
            [
                'name' => 'Brownies', 
                'slug' => slug('Brownies'),
                'image' => 'assets/images/default/category/maincourse.png', 
                'short_description' => 'Brownies fudgy dengan rasa cokelat yang kaya dan kenikmatan maksimal.',
                'description' => '<p>Brownies kami kaya, fudgy, dan penuh dengan rasa cokelat yang memanjakan. Potongan kue ini sempurna untuk siapa saja yang menyukai manisan cokelat.</p><p>Nikmati sendiri atau tambahkan satu sendok es krim vanila untuk pencuci mulut yang benar-benar menggoda. Brownies ini pasti memuaskan setiap keinginan cokelat.</p>', 
                'best_seller' => false, 
                'category_id' => $this->getRandomCategoryId($categoryIds),
            ],
            [
                'name' => 'Tart Raspberry', 
                'slug' => slug('Tart Raspberry'),
                'image' => 'assets/images/default/category/maincourse.png', 
                'short_description' => 'Tart dengan krust renyah, isian kompot raspberry, dan topping raspberry segar.',
                'description' => '<p>Tart <strong>Raspberry</strong> kami memiliki krust yang renyah, diisi dengan kompot raspberry yang lezat dan dihiasi dengan raspberry segar. Kombinasi sempurna antara rasa manis dan asam, dessert ini benar-benar memanjakan indera Anda.</p><p>Ideal untuk acara spesial atau sebagai hidangan penutup yang mewah, tart ini akan memukau baik lidah Anda maupun tamu Anda.</p>', 
                'best_seller' => true, 
                'category_id' => $this->getRandomCategoryId($categoryIds),
            ],
            [
                'name' => 'Pecan Pie', 
                'slug' => slug('Pecan Pie'),
                'image' => 'assets/images/default/category/appetizer.png', 
                'short_description' => 'Pie dengan pecan renyah dan isian manis yang memanjakan.',
                'description' => '<p>Pecan Pie kami adalah kombinasi sempurna antara pecan yang renyah dan isian manis yang lengket, semua dipanggang dalam kulit pastry mentega. Dessert klasik ini adalah hidangan wajib di meja perayaan apa pun.</p><p>Disajikan hangat dengan whipped cream atau es krim vanila, pie ini adalah hidangan penutup yang nyaman dan memuaskan yang pasti akan disukai semua orang.</p>', 
                'best_seller' => false, 
                'category_id' => $this->getRandomCategoryId($categoryIds),
            ],
            [
                'name' => 'Croquembouche', 
                'slug' => slug('Croquembouche'), 
                'image' => 'assets/images/default/category/coldbeverages.png', 
                'short_description' => 'Makanan penutup Prancis yang menakjubkan dengan profiteroles yang diisi, dihias karamel dan gula spun.',
                'description' => '<p>Croquembouche kami yang menakjubkan adalah menara profiteroles yang lembut, diisi, diikat dengan karamel dan dihiasi dengan dekorasi gula spun. Dessert tradisional Prancis ini adalah karya seni visual dan kuliner.</p><p>Sempurna untuk pernikahan, perayaan, atau acara spesial lainnya, dessert ini akan menjadi pusat perhatian acara Anda. Kombinasi kue pastry choux yang renyah dan isian krimnya benar-benar tak tertahankan.</p>', 
                'best_seller' => true, 
                'category_id' => $this->getRandomCategoryId($categoryIds),
            ],
            [
                'name' => 'Tiramisu', 
                'slug' => slug('Tiramisu'), 
                'image' => 'assets/images/default/category/coldbeverages.png', 
                'short_description' => 'Dessert klasik Italia dengan ladyfingers yang direndam kopi dan krim mascarpone yang lezat.',
                'description' => '<p>Tiramisu kami adalah dessert klasik Italia yang dibuat dengan lapisan ladyfingers yang direndam kopi dan krim mascarpone yang kaya, diberi taburan bubuk kakao. Ini adalah keseimbangan rasa dan tekstur yang sempurna.</p><p>Desert indulgent ini sempurna untuk pecinta kopi dan mereka yang menghargai camilan manis yang elegan. Setiap gigitan akan membawa Anda ke kafe-kafe di Italia.</p>', 
                'best_seller' => false, 
                'category_id' => $this->getRandomCategoryId($categoryIds),
            ],

            
        ];

        foreach ($product as $data) {
            Product::updateOrCreate($data);
        }
    }

    private function getRandomCategoryId(array $categoryIds): ?string
    {
        return count($categoryIds) > 0 ? $categoryIds[array_rand($categoryIds)] : null;
    }
}
