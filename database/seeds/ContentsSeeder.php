<?php

use App\Content;
use Illuminate\Database\Seeder;

class ContentsSeeder extends Seeder
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
                'challenge' => 1,
                'init_question' =>  null,
                'statement' => 'You shall have no other gods.',
                'follow_question' => 'What does this mean?',
                'answer' => 'We should fear, love, and trust in God above all things.'
            ],
            [
                'challenge' => 2,
                'init_question' =>  null,
                'statement' => 'You shall not misuse the name of the Lord your God.',
                'follow_question' => 'What does this mean?',
                'answer' => 'We should fear and love God so that we do not curse, swear, use satanic arts, lie, or deceive by His name,
                but call upon it in every trouble, pray, praise, and give thanks.'
            ],
            [
                'challenge' => 3,
                'init_question' =>  null,
                'statement' => 'Remember the Sabbath day by keeping it holy.',
                'follow_question' => 'What does this mean?',
                'answer' => 'We should fear and love God so that we do not despise preaching and His Word, but hold it sacred and
                gladly hear and learn it.'
            ],
            [
                'challenge' => 4,
                'init_question' =>  null,
                'statement' => 'Honor your father and your mother.',
                'follow_question' => 'What does this mean?',
                'answer' => 'We should fear and love God so that we do not despise or anger our parents and other authorities, but honor
                them, serve and obey them, love and cherish them.'
            ],
            [
                'challenge' => 5,
                'init_question' =>  null,
                'statement' => 'You shall not murder.',
                'follow_question' => 'What does this mean?',
                'answer' => 'We should fear and love God so that we do not hurt or harm our neighbor in his body, but help and support
                him in every physical need.'
            ],
            [
                'challenge' => 6,
                'init_question' =>  null,
                'statement' => 'You shall not commit adultery.',
                'follow_question' => 'What does this mean?',
                'answer' => 'We should fear and love God so that we lead a sexually pure and decent life in what we say and do, and
                husband and wife love and honor each other.'
            ],
            [
                'challenge' => 7,
                'init_question' =>  null,
                'statement' => 'You shall not steal.',
                'follow_question' => 'What does this mean?',
                'answer' => 'We should fear and love God so that we do not take our neighbor’s money or possessions, or get them in
                any dishonest way, but help him to improve and protect his possessions and income.'
            ],
            [
                'challenge' => 8,
                'init_question' =>  null,
                'statement' => 'You shall not give false testimony against your neighbor.',
                'follow_question' => 'What does this mean?',
                'answer' => 'We should fear and love God so that we do not tell lies about our neighbor, betray him, slander him, or hurt
                his reputation, but defend him, speak well of him, and explain everything in the kindest way.'
            ],
            [
                'challenge' => 9,
                'init_question' =>  null,
                'statement' => 'You shall not covet your neighbor’s house.',
                'follow_question' => 'What does this mean?',
                'answer' => 'We should fear and love God so that we do not scheme to get our neighbor’s inheritance or house, or get it
                in a way which only appears right, but help and be of service to him in keeping it.'
            ],
            [
                'challenge' => 10,
                'init_question' =>  null,
                'statement' => 'You shall not covet your neighbor’s wife, or his manservant or maidservant, his ox or donkey, or anything
                that belongs to your neighbor.',
                'follow_question' => 'What does this mean?',
                'answer' => 'We should fear and love God so that we do not entice or force away our neighbor’s wife, workers, or
                animals, or turn them against him, but urge them to stay and do their duty.'
            ],
            [
                'challenge' => 11,
                'init_question' =>  'What does God say about all these commandments?',
                'statement' => `He says, “I, the Lord your God, am a jealous God, punishing the children for the sin of the fathers to the
                third and fourth generation of those who hate Me, but showing love to a thousand generations of those who
                love Me and keep My commandments.”`,
                'follow_question' => 'What does this mean?',
                'answer' => 'God threatens to punish all who break these commandments. Therefore, we should fear His wrath and not
                do anything against them. But He promises grace and every blessing to all who keep these commandments.
                Therefore, we should also love and trust in Him and gladly do what He commands.'
            ],
            [
                'challenge' => 12,
                'init_question' =>  null,
                'statement' => 'I believe in God, the Father Almighty, Maker of heaven and earth.',
                'follow_question' => 'What does this mean?',
                'answer' => 'I believe that God has made me and all creatures; that He has given me my body and soul, eyes, ears, and
                all my members, my reason and all my senses, and still takes care of them. He also gives me clothing and shoes, food and drink, house and home, wife and children, land, animals,
                and all I have. He richly and daily provides me with all that I need to support this body and life. He defends me against all danger and guards and protects me from all evil. All this He does only out of fatherly, divine goodness and mercy, without any merit or worthiness in me. For all this it is my duty to thank and praise, serve and obey Him. This is most certainly true.'
            ],
            [
                'challenge' => 13,
                'init_question' =>  null,
                'statement' => 'And in Jesus Christ, His only Son, our Lord, who was conceived by the Holy Spirit, born of the Virgin
                Mary, suffered under Pontius Pilate, was crucified, died and was buried. He descended into hell. The third
                day He rose again from the dead. He ascended into heaven and sits at the right hand of God, the Father
                Almighty. From thence He will come to judge the living and the dead.',
                'follow_question' => 'What does this mean?',
                'answer' => 'I believe that Jesus Christ, true God, begotten of the Father from eternity, and also true man, born of the
                Virgin Mary, is my Lord, who has redeemed me, a lost and condemned person, purchased and won me from all sins, from death, and from the power of the devil; not with gold or silver, but with His holy, precious blood and with His innocent suffering and death, that I may be His own and live under Him in His kingdom and serve Him in everlasting righteousness, innocence, and blessedness, just as He is risen from the dead, lives and reigns to all eternity. This is most certainly true.'
            ],
            [
                'challenge' => 14,
                'init_question' =>  null,
                'statement' => 'I believe in the Holy Spirit, the holy Christian church, the communion of saints, the forgiveness of sins, the
                resurrection of the body, and the life everlasting. Amen.',
                'follow_question' => 'What does this mean?',
                'answer' => 'I believe that I cannot by my own reason or strength believe in Jesus Christ, my Lord, or come to Him; but
                the Holy Spirit has called me by the Gospel, enlightened me with His gifts, sanctified and kept me in the true faith. In the same way He calls, gathers, enlightens, and sanctifies the whole Christian church on earth, and keeps it with Jesus Christ in the one true faith. In this Christian church He daily and richly forgives all my sins and the sins of all believers. On the Last Day He will raise me and all the dead, and give eternal life to me and all believers in Christ. This is most certainly true.'
            ]
            
        ];

        foreach ($array as $item) {
            Content::create([
                'challenge_id' => $item['challenge'],
                'initial_question' => $item['init_question'],
                'statement' => $item['statement'],
                'following_question' => $item['follow_question'],
                'answer' => $item['answer']
            ]);
        }
    }
}

