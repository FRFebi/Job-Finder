<?php

use Illuminate\Database\Seeder;
use App\Vacancy;

class VacancySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vacancy::create([
    		"job_id" => 1,
    		"organization_id" => 1,
    		"type_id" => 1,
            "about" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia tempore, dolor vero repellendus quas repellat esse praesentium commodi ullam quos nobis, totam cupiditate! Delectus cumque quis officiis, sit pariatur, voluptatibus.",
    	]);
    	Vacancy::create([
    		"job_id" => 2,
    		"organization_id" => 2,
    		"type_id" => 2,
            "about" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus dolorem exercitationem commodi laboriosam itaque accusantium quaerat hic neque a iusto, quidem quasi maiores rerum praesentium ea quia magnam, consectetur ex nulla, inventore optio maxime. Porro nisi deleniti maiores repellendus esse dolorem earum obcaecati adipisci tenetur consequuntur cupiditate enim, veniam blanditiis eius perspiciatis quibusdam ipsam tempora voluptatibus optio doloremque accusantium reiciendis incidunt et excepturi. Neque in laudantium assumenda perspiciatis consectetur consequuntur nobis voluptates, omnis repellat, velit obcaecati voluptate fugit doloremque accusamus facere maxime. Ut, eum veritatis? Molestiae ab magnam, reprehenderit commodi porro error non provident facere libero dolor incidunt eligendi delectus corporis praesentium autem sed iste ea voluptates ut nihil. Vero laudantium temporibus, odit consectetur, nulla culpa assumenda rerum harum vel tenetur nostrum. Eaque autem, veritatis possimus officiis eius officia repellendus tempore dolores quia non. Nulla nisi dolor nemo saepe maiores eligendi, hic, ducimus corporis quasi cupiditate perspiciatis consequuntur eveniet officiis modi quo. Architecto, doloremque perspiciatis. Incidunt corporis aut, praesentium nulla nesciunt ex veritatis ad sapiente doloribus enim placeat ducimus fugiat. Modi minima, nihil quas id. Assumenda dignissimos et ea magni, voluptatem. Nisi molestias corrupti et dolores neque esse, commodi ducimus? Animi facere nostrum laborum quia commodi in voluptatum necessitatibus rerum."
    	]);
    	Vacancy::create([
    		"job_id" => 3,
    		"organization_id" => 3,
    		"type_id" => 3,
            "about" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit esse, quidem accusantium tempora illo, ipsam repellat quae, et laudantium, ipsa debitis deserunt amet nisi dolores ut? Id est ad aut doloribus corrupti tenetur deserunt atque maiores natus, impedit, consectetur sit quia rem error nemo velit alias officia. Laudantium voluptates commodi quibusdam officia architecto, illo porro vitae eligendi sapiente qui nulla nobis eaque rem similique corporis ipsum adipisci, molestias iste doloremque, quam maxime saepe. Ut quaerat aut veniam aliquam cum doloribus at itaque laborum laboriosam vel dolore ad dolores reprehenderit tenetur enim impedit expedita temporibus alias architecto nisi, vero fugiat. Dolorem fugiat nesciunt nihil facere provident numquam quae voluptatum, ipsum nisi, aperiam dignissimos, sapiente minus quidem harum ad quam maxime iure consequuntur atque! At ex suscipit quos obcaecati commodi, facere incidunt quam. Reiciendis quasi accusamus, beatae maxime itaque, voluptatem quod nisi praesentium, quae cum laudantium vitae ipsam, mollitia dolores ad aliquid!"
    	]);

    }
}
