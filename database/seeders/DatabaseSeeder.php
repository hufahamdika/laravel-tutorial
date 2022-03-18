<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        Article::factory(20)->create();

        // User::create([
        //     "name" => "Russia Today",
        //     "email" => "russiatodaymag@gmail.com",
        //     "password" => bcrypt("russiatoday12345")
        // ]);

        // User::create([
        //     "name" => "Hufa Hamdika",
        //     "email" => "hufahamdika@gmail.com",
        //     "password" => bcrypt("ganteng banget")
        // ]);

        // User::create([
        //     "name" => "Pemuda Pancasila Bogor",
        //     "email" => "pepebogor@gmail.com",
        //     "password" => bcrypt("pemudapancasilajuara")
        // ]);

        // User::create([
        //     "name" => "Joko Amanto",
        //     "email" => "mrjokokoko@gmail.com",
        //     "password" => bcrypt("masjuoko")
        // ]);

        // Article::create([
        //     "title" => "Ukraine vs Russia",
        //     "category_id" => 4,
        //     "user_id" => 1,
        //     "slug" => "ukraine-rusia",
        //     "excerpt" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad error porro aut dolores dolor perspiciatis deleniti, hic et assumenda culpa sapiente veniam. Totam, quas in.",
        //     "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium repellat velit reiciendis, magni veniam sit sapiente dicta soluta quis delectus minima ipsum sed modi aperiam corrupti voluptatum hic illo. Sint rerum facere quae! Dolorum dolorem amet aliquam consequuntur, nihil, minima eius autem, culpa sint mollitia modi ipsa quas. Consequatur harum voluptate, aperiam, accusamus quisquam ipsa repudiandae quidem ipsum neque, omnis corporis dolore tempore nemo minima illum. Error nobis ea magnam possimus reprehenderit magni dolor enim? Exercitationem totam harum numquam saepe dolorem, eligendi eveniet amet, repudiandae quo quibusdam itaque, sit aspernatur possimus id reiciendis accusamus rem odit nesciunt modi! Non, veniam!"
        // ]);

        // Article::create([
        //     "title" => "Omicron di Indonesia",
        //     "category_id" => 4,
        //     "user_id" => 3,
        //     "slug" => "omicron-di-indonesia",
        //     "excerpt" => "Omicron - Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem corrupti vel cumque enim odio ratione.",
        //     "body" => "Omicron - Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae, ducimus. Odit maxime sint sunt mollitia totam pariatur natus autem, voluptatum itaque, reiciendis a quidem nulla est ducimus magni saepe libero."
        // ]);
            
        // Article::create([
        //     "title" => "Judul Ketiga",
        //     "category_id" => 2,
        //     "user_id" => 4,
        //     "slug" => "judul-ketiga",
        //     "excerpt" => "Tiga - Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem corrupti vel cumque enim odio ratione.",
        //     "body" => "Tiga - Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae, ducimus. Odit maxime sint sunt mollitia totam pariatur natus autem, voluptatum itaque, reiciendis a quidem nulla est ducimus magni saepe libero."
        // ]);
            
        // Article::create([
        //     "title" => "Judul Keempat",
        //     "category_id" => 3,
        //     "user_id" => 4,
        //     "slug" => "judul-keempat",
        //     "excerpt" => "Empat - Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem corrupti vel cumque enim odio ratione.",
        //     "body" => "Empat - Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae, ducimus. Odit maxime sint sunt mollitia totam pariatur natus autem, voluptatum itaque, reiciendis a quidem nulla est ducimus magni saepe libero."
        // ]);
                     
        // Article::create([
        //     "title" => "Judul Kelima",
        //     "category_id" => 1,
        //     "user_id" => 4,
        //     "slug" => "judul-kelima",
        //     "excerpt" => "Lima - Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem corrupti vel cumque enim odio ratione.",
        //     "body" => "<p><b>Lima</b> - 
        //     Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum sequi minima ipsa qui accusamus quae, sed facilis placeat unde incidunt fugiat ad, molestias consequuntur, odit neque nihil est eaque deleniti voluptatem accusantium excepturi vitae porro? Quia fugiat, rem veritatis fuga dignissimos praesentium minus architecto ea ducimus. Ex dolorum nobis alias, qui itaque aut et earum tenetur culpa voluptates veniam. Nesciunt, tempore? Dicta impedit, delectus ipsum dolor nostrum distinctio corporis inventore possimus vel omnis odit, tenetur accusamus veritatis quasi, nihil deserunt. Odit distinctio unde consequuntur saepe alias neque nisi aperiam deserunt non minus beatae et eaque nulla vel molestiae, provident fuga aliquid dolorem esse quam mollitia illo obcaecati! Officia commodi fuga dolorem doloribus mollitia rem sapiente error nostrum, et molestias saepe provident dolor quo maiores, vero laborum est, nisi non? Eaque reiciendis laudantium aliquam perspiciatis numquam est molestiae nostrum. Quibusdam odit accusantium laudantium doloremque qui quis assumenda quasi distinctio, natus blanditiis ab dicta eos magnam. Asperiores quaerat earum at tempore, a explicabo itaque maiores autem perspiciatis fuga accusamus. Reprehenderit, eligendi maxime. Aperiam voluptatum natus sunt debitis distinctio mollitia voluptates deleniti ut expedita? Numquam velit, delectus voluptates ipsum ipsa in assumenda odit atque commodi at perferendis, pariatur et fugiat, illo officiis repellat exercitationem ratione ab quam nulla odio ad eligendi! Quos praesentium eos cumque accusamus perspiciatis sunt magnam consequuntur minus, animi fugit doloribus soluta illo, provident dolor nostrum maxime mollitia, molestiae eum nisi vero blanditiis dolorum sequi? Alias a reiciendis repellat saepe pariatur, magnam aliquid. Architecto atque impedit magnam quibusdam iste
        //     </p><p>ab ullam, officia, natus ad ducimus vero! Ratione, error. Necessitatibus iusto eum excepturi consequuntur, ut commodi ea suscipit eos fugiat sit possimus ipsam illo maiores laboriosam doloremque. Laborum velit omnis dolorem praesentium, modi neque qui quasi ab minus nobis ullam dignissimos illum maxime, totam iusto suscipit quos sunt consequatur molestias recusandae eveniet a porro quis labore! Natus blanditiis, odit praesentium esse suscipit deserunt est non consectetur inventore in distinctio consequuntur. Ex fugit architecto accusantium possimus fuga quas esse? Ab maiores exercitationem corporis tenetur. Aut repudiandae error, ea sed odio cupiditate, cumque earum quia vitae iusto saepe, voluptates maiores aperiam quibusdam amet tempora consectetur at deserunt ad! Hic, dolor consequatur illo voluptate amet animi dolores porro nobis aliquam nostrum nemo quisquam est nihil laudantium sapiente dolorum corrupti reiciendis, recusandae accusamus dolore praesentium id similique temporibus placeat! Et incidunt unde libero, sit voluptas nulla! Labore, inventore. Cupiditate, iure veniam minima placeat nemo velit omnis architecto non dolore, quaerat consequuntur dicta facere quo vero quasi. Veniam sapiente vitae corporis culpa adipisci eius earum ad repellat dicta repellendus provident quia quis eos odio voluptate natus, quae commodi fugiat cupiditate nam sed rerum iste minima id! Dolorem explicabo non minus? Aperiam provident aliquid itaque dignissimos asperiores cum aut ipsam quos, aliquam iste reprehenderit velit hic. Fugiat velit officiis sint, adipisci vitae voluptatum, eius aliquam fuga maxime asperiores minima beatae a libero. Quas alias nulla blanditiis rerum atque aut harum delectus placeat ad? Debitis molestias ipsa numquam ipsum alias cupiditate, atque incidunt maxime quae eligendi dolorem aperiam!</p>"
        // ]);

        Category::create([
            "name" => "Programming",
            "slug" => "programming"
        ]);
            
        Category::create([
            "name" => "Web Design",
            "slug" => "web-design"
        ]);

        Category::create([
            "name" => "Daily Life",
            "slug" => "daily-life"
        ]);
            
        Category::create([
            "name" => "Politics",
            "slug" => "politics"
        ]);       
    }
}
