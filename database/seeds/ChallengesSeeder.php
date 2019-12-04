<?php

use App\Challenges;
use Illuminate\Database\Seeder;

class ChallengesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            [
                'name' => 'First Commandment', 'category' => 1
            ],
            [
                'name' => 'Second Commandment', 'category' => 1
            ],
            [
                'name' => 'Third Commandment', 'category' => 1
            ],
            [
                'name' => 'Fourth Commandment', 'category' => 1
            ],
            [
                'name' => 'Fifth Commandment', 'category' => 1
            ],
            [
                'name' => 'Sixth Commandment', 'category' => 1
            ],
            [
                'name' => 'Seventh Commandment', 'category' => 1
            ],
            [
                'name' => 'Eighth Commandment', 'category' => 1
            ],
            [
                'name' => 'Ninth Commandment', 'category' => 1
            ],
            [
                'name' => 'Tenth Commandment', 'category' => 1
            ],
            [
                'name' => 'Close of the Commandments', 'category' => 1
            ],
            [
                'name' => 'First Article: Creation', 'category' => 2
            ],
            [
                'name' => 'Second Article: Redemption', 'category' => 2
            ],
            [
                'name' => 'Third Article: Sanctification', 'category' => 2
            ],
            [
                'name' => 'The Lord\'s Prayer', 'category' => 3
            ],
            [
                'name' => 'Introduction', 'category' => 3
            ],
            [
                'name' => 'First Petition', 'category' => 3
            ],
            [
                'name' => 'Second Petition', 'category' => 3
            ],
            [
                'name' => 'Third Petition', 'category' => 3
            ],
            [
                'name' => 'Fourth Petition', 'category' => 3
            ],
            [
                'name' => 'Fifth Petition', 'category' => 3
            ],
            [
                'name' => 'Sixth Petition', 'category' => 3
            ],
            [
                'name' => 'Seventh Petition', 'category' => 3
            ],
            [
                'name' => 'Conclusion', 'category' => 3
            ],
            [
                'name' => 'First', 'category' => 4
            ],
            [
                'name' => 'Second', 'category' => 4
            ],
            [
                'name' => 'Third', 'category' => 4
            ],
            [
                'name' => 'Fourth', 'category' => 4
            ],
            [
                'name' => 'What is Confession?', 'category' => 5
            ],
            [
                'name' => 'What sins should we confess?', 'category' => 5
            ],
            [
                'name' => 'Which are these?', 'category' => 5
            ],
            [
                'name' => 'What is the Office of the Keys?', 'category' => 5
            ],
            [
                'name' => 'Where is this written?', 'category' => 5
            ],
            [
                'name' => 'What do you believe according to these words?', 'category' => 5
            ],
            [
                'name' => 'What is the Sacrament of the Altar?', 'category' => 6
            ],
            [
                'name' => 'Where is this written?', 'category' => 6
            ],
            [
                'name' => 'What is the benefit of this eating and drinking?', 'category' => 6
            ],
            [
                'name' => 'How can bodily eating and drinking do such great things?', 'category' => 6
            ],
            [
                'name' => 'Who receives this sacrament worthily?', 'category' => 6
            ],
            [
                'name' => 'Old Testament', 'category' => 7
            ],
            [
                'name' => 'New Testament', 'category' => 7
            ],
            [
                'name' => 'Enter a passage: ', 'category' => 8
            ]
        ];

        foreach ($array as $item) {
            Challenges::create([
                'category_id' => $item['category'],
                'challenge_name' => $item['name']
            ]);
        }
    }
}
