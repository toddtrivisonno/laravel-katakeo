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
                'petition' => null,
                'init_question' =>  null,
                'statement' => 'You shall have no other gods.',
                'follow_question' => 'What does this mean?',
                'answer' => 'We should fear, love, and trust in God above all things.'
            ],
            [
                'challenge' => 2,
                'petition' => null,
                'init_question' =>  null,
                'statement' => 'You shall not misuse the name of the Lord your God.',
                'follow_question' => 'What does this mean?',
                'answer' => 'We should fear and love God so that we do not curse, swear, use satanic arts, lie, or deceive by His name, but call upon it in every trouble, pray, praise, and give thanks.'
            ],
            [
                'challenge' => 3,
                'petition' => null,
                'init_question' =>  null,
                'statement' => 'Remember the Sabbath day by keeping it holy.',
                'follow_question' => 'What does this mean?',
                'answer' => 'We should fear and love God so that we do not despise preaching and His Word, but hold it sacred and gladly hear and learn it.'
            ],
            [
                'challenge' => 4,
                'petition' => null,
                'init_question' =>  null,
                'statement' => 'Honor your father and your mother.',
                'follow_question' => 'What does this mean?',
                'answer' => 'We should fear and love God so that we do not despise or anger our parents and other authorities, but honor them, serve and obey them, love and cherish them.'
            ],
            [
                'challenge' => 5,
                'petition' => null,
                'init_question' =>  null,
                'statement' => 'You shall not murder.',
                'follow_question' => 'What does this mean?',
                'answer' => 'We should fear and love God so that we do not hurt or harm our neighbor in his body, but help and support him in every physical need.'
            ],
            [
                'challenge' => 6,
                'petition' => null,
                'init_question' =>  null,
                'statement' => 'You shall not commit adultery.',
                'follow_question' => 'What does this mean?',
                'answer' => 'We should fear and love God so that we lead a sexually pure and decent life in what we say and do, and husband and wife love and honor each other.'
            ],
            [
                'challenge' => 7,
                'petition' => null,
                'init_question' =>  null,
                'statement' => 'You shall not steal.',
                'follow_question' => 'What does this mean?',
                'answer' => 'We should fear and love God so that we do not take our neighbor’s money or possessions, or get them in any dishonest way, but help him to improve and protect his possessions and income.'
            ],
            [
                'challenge' => 8,
                'petition' => null,
                'init_question' =>  null,
                'statement' => 'You shall not give false testimony against your neighbor.',
                'follow_question' => 'What does this mean?',
                'answer' => 'We should fear and love God so that we do not tell lies about our neighbor, betray him, slander him, or hurt his reputation, but defend him, speak well of him, and explain everything in the kindest way.'
            ],
            [
                'challenge' => 9,
                'petition' => null,
                'init_question' =>  null,
                'statement' => 'You shall not covet your neighbor’s house.',
                'follow_question' => 'What does this mean?',
                'answer' => 'We should fear and love God so that we do not scheme to get our neighbor’s inheritance or house, or get it in a way which only appears right, but help and be of service to him in keeping it.'
            ],
            [
                'challenge' => 10,
                'petition' => null,
                'init_question' =>  null,
                'statement' => 'You shall not covet your neighbor’s wife, or his manservant or maidservant, his ox or donkey, or anything that belongs to your neighbor.',
                'follow_question' => 'What does this mean?',
                'answer' => 'We should fear and love God so that we do not entice or force away our neighbor’s wife, workers, or animals, or turn them against him, but urge them to stay and do their duty.'
            ],
            [
                'challenge' => 11,
                'petition' => null,
                'init_question' =>  'What does God say about all these commandments?',
                'statement' => `He says, “I, the Lord your God, am a jealous God, punishing the children for the sin of the fathers to the third and fourth generation of those who hate Me, but showing love to a thousand generations of those who love Me and keep My commandments.”`,
                'follow_question' => 'What does this mean?',
                'answer' => 'God threatens to punish all who break these commandments. Therefore, we should fear His wrath and not do anything against them. But He promises grace and every blessing to all who keep these commandments.Therefore, we should also love and trust in Him and gladly do what He commands.'
            ],
            [
                'challenge' => 12,
                'petition' => null,
                'init_question' =>  null,
                'statement' => 'I believe in God, the Father Almighty, Maker of heaven and earth.',
                'follow_question' => 'What does this mean?',
                'answer' => 'I believe that God has made me and all creatures; that He has given me my body and soul, eyes, ears, and all my members, my reason and all my senses, and still takes care of them. He also gives me clothing and shoes, food and drink, house and home, wife and children, land, animals, and all I have. He richly and daily provides me with all that I need to support this body and life. He defends me against all danger and guards and protects me from all evil. All this He does only out of fatherly, divine goodness and mercy, without any merit or worthiness in me. For all this it is my duty to thank and praise, serve and obey Him. This is most certainly true.'
            ],
            [
                'challenge' => 13,
                'petition' => null,
                'init_question' =>  null,
                'statement' => 'And in Jesus Christ, His only Son, our Lord, who was conceived by the Holy Spirit, born of the Virgin Mary, suffered under Pontius Pilate, was crucified, died and was buried. He descended into hell. The third day He rose again from the dead. He ascended into heaven and sits at the right hand of God, the Father Almighty. From thence He will come to judge the living and the dead.',
                'follow_question' => 'What does this mean?',
                'answer' => 'I believe that Jesus Christ, true God, begotten of the Father from eternity, and also true man, born of the Virgin Mary, is my Lord, who has redeemed me, a lost and condemned person, purchased and won me from all sins, from death, and from the power of the devil; not with gold or silver, but with His holy, precious blood and with His innocent suffering and death, that I may be His own and live under Him in His kingdom and serve Him in everlasting righteousness, innocence, and blessedness, just as He is risen from the dead, lives and reigns to all eternity. This is most certainly true.'
            ],
            [
                'challenge' => 14,
                'petition' => null,
                'init_question' =>  null,
                'statement' => 'I believe in the Holy Spirit, the holy Christian church, the communion of saints, the forgiveness of sins, the resurrection of the body, and the life everlasting. Amen.',
                'follow_question' => 'What does this mean?',
                'answer' => 'I believe that I cannot by my own reason or strength believe in Jesus Christ, my Lord, or come to Him; but the Holy Spirit has called me by the Gospel, enlightened me with His gifts, sanctified and kept me in the true faith. In the same way He calls, gathers, enlightens, and sanctifies the whole Christian church on earth, and keeps it with Jesus Christ in the one true faith. In this Christian church He daily and richly forgives all my sins and the sins of all believers. On the Last Day He will raise me and all the dead, and give eternal life to me and all believers in Christ. This is most certainly true.'
            ],
            [
                'challenge' => 15,
                'petition' => null,
                'init_question' =>  null,
                'statement' => 'Our Father, who art in heaven, hallowed be Thy name, Thy kingdom come, Thy will be done on earth as it is in heaven. Give us this day our daily bread; and forgive us our trespasses as we forgive those who trespass against us; and lead us not into temptation, but deliver us from evil. For Thine is the kingdom and the power and the glory forever and ever. Amen.',
                'follow_question' => null,
                'answer' => null
            ],
            [
                'challenge' => 16,
                'petition' => null,
                'init_question' =>  null,
                'statement' => 'Our Father who art in heaven.',
                'follow_question' => 'What does this mean?',
                'answer' => 'With these words God tenderly invites us to believe that He is our true Father and that we are His true children, so that with all boldness and confidence we may ask Him as dear children ask their dear father.'
            ],
            [
                'challenge' => 17,
                'petition' => 'Hallowed be Thy name.',
                'init_question' =>  'What does this mean?',
                'statement' => 'God’s name is certainly holy in itself, but we pray in this petition that it may be kept holy among us also.',
                'follow_question' => 'How is God’s name kept holy?',
                'answer' => 'God’s name is kept holy when the Word of God is taught in its truth and purity, and we, as the children of God, also lead holy lives according to it. Help us to do this, dear Father in heaven! But anyone who teaches or lives contrary to God’s Word profanes the name of God among us. Protect us from this, heavenly Father!'
            ],
            [
                'challenge' => 18,
                'petition' => 'Thy kingdom come.',
                'init_question' =>  'What does this mean?',
                'statement' => 'The kingdom of God certainly comes by itself without our prayer, but we pray in this petition that it may come to us also.',
                'follow_question' => null,
                'answer' => null
            ],
            [
                'challenge' => 19,
                'petition' => 'Thy will be done on earth as it is in heaven.',
                'init_question' =>  'What does this mean?',
                'statement' => 'The good and gracious will of God is done even without our prayer, but we pray in this petition that it may be done among us also.',
                'follow_question' => 'How is God’s will done?',
                'answer' => 'God’s will is done when He breaks and hinders every evil plan and purpose of the devil, the world, and our sinful nature, which do not want us to hallow God’s name or let His kingdom come; and when He strengthens and keeps us firm in His Word and faith until we die. This is His good and gracious will.'
            ],
            [
                'challenge' => 20,
                'petition' => 'Give us this day our daily bread.',
                'init_question' =>  'What does this mean?',
                'statement' => 'God certainly gives daily bread to everyone without our prayers, even to all evil people, but we pray in this petition that God would lead us to realize this and to receive our daily bread with thanksgiving.',
                'follow_question' => 'What is meant by daily bread?',
                'answer' => 'Daily bread includes everything that has to do with the support and needs of the body, such as food, drink, clothing, shoes, house, home, land, animals, money, goods, a devout husband or wife, devout children, devout workers, devout and faithful rulers, good government, good weather, peace, health, self-control, good reputation, good friends, faithful neighbors, and the like.'
            ],
            [
                'challenge' => 21,
                'petition' => 'And forgive us our trespasses as we forgive those who trespass against us.',
                'init_question' =>  'What does this mean?',
                'statement' => 'We pray in this petition that our Father in heaven would not look at our sins, or deny our prayer because of them. We are neither worthy of the things for which we pray, nor have we deserved them, but we ask that He would give them all to us by grace, for we daily sin much and surely deserve nothing but punishment. So we too will sincerely forgive and gladly do good to those who sin against us.',
                'follow_question' => null,
                'answer' => null
            ],
            [
                'challenge' => 22,
                'petition' => 'And lead us not into temptation.',
                'init_question' =>  'What does this mean?',
                'statement' => 'God tempts no one. We pray in this petition that God would guard and keep us so that the devil, the world, and our sinful nature may not deceive us or mislead us into false belief, despair, and other great shame and vice. Although we are attacked by these things, we pray that we may finally overcome them and win the victory.',
                'follow_question' => null,
                'answer' => null
            ],
            [
                'challenge' => 23,
                'petition' => 'But deliver us from evil.',
                'init_question' =>  'What does this mean?',
                'statement' => 'We pray in this petition, in summary, that our Father in heaven would rescue us from every evil of body and soul, possessions and reputation, and finally, when our last hour comes, give us a blessed end, and graciously take us from this valley of sorrow to Himself in heaven.',
                'follow_question' => null,
                'answer' => null
            ],
            [
                'challenge' => 24,
                'petition' => 'For Thine is the kingdom and the power and the glory forever and ever. Amen.',
                'init_question' =>  'What does this mean?',
                'statement' => 'This means that I should be certain that these petitions are pleasing to our Father in heaven, and are heard by Him; for He Himself has commanded us to pray in this way and has promised to hear us. Amen, amen means “yes, yes, it shall be so.”',
                'follow_question' => null,
                'answer' => null
            ],
            [
                'challenge' => 25,
                'petition' => null,
                'init_question' =>  'What is Baptism',
                'statement' => 'Baptism is not just plain water, but it is the water included in God’s command and combined with God’s word.',
                'follow_question' => 'Which is that word of God?',
                'answer' => 'Christ our Lord says in the last chapter of Matthew: “Therefore go and make disciples of all nations, baptizing them in the name of the Father and of the Son and of the Holy Spirit.”'
            ],
            [
                'challenge' => 26,
                'petition' => null,
                'init_question' => 'What benefits does Baptism give?',
                'statement' => 'It works forgiveness of sins, rescues from death and the devil, and gives eternal salvation to all who believe this, as the words and promises of God declare.',
                'follow_question' => 'Which are these words and promises of God?',
                'answer' => 'Christ our Lord says in the last chapter of Mark: “Whoever believes and is baptized will be saved, but whoever does not believe will be condemned.”'
            ],
            [
                'challenge' => 27,
                'petition' => null,
                'init_question' => 'How can water do such great things?',
                'statement' => 'Certainly not just water, but the word of God in and with the water does these things, along with the faith which trusts this word of God in the water. For without God’s word the water is plain water and no Baptism. But with the word of God it is a Baptism, that is, a life-giving water, rich in grace, and a washing of the new birth in the Holy Spirit, as St. Paul says in Titus, chapter three: “He saved us through the washing of rebirth and renewal by the Holy Spirit, whom He poured out on us generously through Jesus Christ our Savior, so that, having been justified by His grace, we might become heirs having the hope of eternal life. This is a trustworthy saying.”',
                'follow_question' => null,
                'answer' => null
            ],
            [
                'challenge' => 28,
                'petition' => null,
                'init_question' => 'What does such baptizing with water indicate?',
                'statement' => 'It indicates that the Old Adam in us should by daily contrition and repentance be drowned and die with all sins and evil desires, and that a new man should daily emerge and arise to live before God in righteousness and purity forever.',
                'follow_question' => 'Where is this written?',
                'answer' => 'St. Paul writes in Romans chapter six: “We were therefore buried with Him through baptism into death in order that, just as Christ was raised from the dead through the glory of the Father, we too may live a new life.”'
            ],
            [
                'challenge' => 29,
                'petition' => null,
                'init_question' =>  'What is Confession?',
                'statement' => 'Confession has two parts. First, that we confess our sins, and second, that we receive absolution, that is, forgiveness, from the pastor as from God Himself, not doubting, but firmly believing that by it our sins are forgiven before God in heaven.',
                'follow_question' => null,
                'answer' => null
            ],
            [
                'challenge' => 30,
                'petition' => null,
                'init_question' =>  'What sins should we confess?',
                'statement' => 'Before God we should plead guilty of all sins, even those we are not aware of, as we do in the Lord’s Prayer; but before the pastor we should confess only those sins which we know and feel in our hearts.',
                'follow_question' => null,
                'answer' => null
            ],
            [
                'challenge' => 31,
                'petition' => null,
                'init_question' =>  'Which are these?',
                'statement' => 'Consider your place in life according to the Ten Commandments: Are you a father, mother, son, daughter, husband, wife, or worker? Have you been disobedient, unfaithful, or lazy? Have you been hot-tempered, rude, or quarrelsome? Have you hurt someone by your words or deeds? Have you stolen, been negligent, wasted anything, or done any harm?',
                'follow_question' => null,
                'answer' => null
            ],
            [
                'challenge' => 32,
                'petition' => null,
                'init_question' =>  'What is the Office of the Keys?',
                'statement' => 'The Office of the Keys is that special authority which Christ has given to His church on earth to forgive the sins of repentant sinners, but to withhold forgiveness from the unrepentant as long as they do not repent.',
                'follow_question' => null,
                'answer' => null
            ],
            [
                'challenge' => 33,
                'petition' => null,
                'init_question' =>  'Where is this written?',
                'statement' => 'This is what St. John the Evangelist writes in chapter twenty: The Lord Jesus breathed on His disciples and said, “Receive the Holy Spirit. If you forgive anyone his sins, they are forgiven; if you do not forgive them, they are not forgiven.”',
                'follow_question' => null,
                'answer' => null
            ],
            [
                'challenge' => 34,
                'petition' => null,
                'init_question' =>  'What do you believe according to these words?',
                'statement' => 'I believe that when the called ministers of Christ deal with us by His divine command, in particular when they exclude openly unrepentant sinners from the Christian congregation and absolve those who repent of their sins and want to do better, this is just as valid and certain, even in heaven, as if Christ our dear Lord dealt with us Himself.',
                'follow_question' => null,
                'answer' => null
            ],
            [
                'challenge' => 35,
                'petition' => null,
                'init_question' =>  'What is the Sacrament of the Altar?',
                'statement' => 'It is the true body and blood of our Lord Jesus Christ under the bread and wine, instituted by Christ Himself for us Christians to eat and to drink.',
                'follow_question' => null,
                'answer' => null
            ],
            [
                'challenge' => 36,
                'petition' => null,
                'init_question' =>  'Where is this written?',
                'statement' => 'The holy Evangelists Matthew, Mark, Luke, and St. Paul write: Our Lord Jesus Christ, on the night when He was betrayed, took bread, and when He had given thanks, He broke it and gave it to the disciples and said: “Take, eat; this is My body, which is given for you. This do in remembrance of Me.” In the same way also He took the cup after supper, and when He had given thanks, He gave it to them, saying, “Drink of it, all of you; this cup is the new testament in My blood, which is shed for you for the forgiveness of sins. This do, as often as you drink it, in remembrance of Me.”',
                'follow_question' => null,
                'answer' => null
            ],
            [
                'challenge' => 37,
                'petition' => null,
                'init_question' =>  'What is the benefit of this eating and drinking?',
                'statement' => 'These words, “Given and shed for you for the forgiveness of sins,” show us that in the Sacrament forgiveness of sins, life, and salvation are given us through these words. For where there is forgiveness of sins, there is also life and salvation.',
                'follow_question' => null,
                'answer' => null
            ],
            [
                'challenge' => 38,
                'petition' => null,
                'init_question' =>  'How can bodily eating and drinking do such great things?',
                'statement' => 'Certainly not just eating and drinking do these things, but the words written here: “Given and shed for you for the forgiveness of sins.” These words, along with the bodily eating and drinking, are the main thing in the Sacrament. Whoever believes these words has exactly what they say: “forgiveness of sins.”',
                'follow_question' => null,
                'answer' => null
            ],
            [
                'challenge' => 39,
                'petition' => null,
                'init_question' =>  'Who receives this sacrament worthily?',
                'statement' => 'Fasting and bodily preparation are certainly fine outward training. But that person is truly worthy and well prepared who has faith in these words: “Given and shed for you for the forgiveness of sins.” But anyone who does not believe these words or doubts them is unworthy and unprepared, for the words “for you” require all hearts to believe.',
                'follow_question' => null,
                'answer' => null
            ],
            [
                'challenge' => 40,
                'petition' => null,
                'init_question' =>  null,
                'statement' => 'Genesis, Exodus, Leviticus, Numbers, Deuteronomy, Joshua, Judges, Ruth, 1 Samuel, 2 Samuel, 1 Kings, 2 Kings, 1 Chronicles, 2 Chronicles, Ezra, Nehemiah, Esther, Job, Psalms, Proverbs, Ecclesiastes, Song of Solomon, Isaiah, Jeremiah, Lamentations, Ezekiel, Daniel, Hosea, Joel, Amos, Obadiah, Jonah, Micah, Nahum, Habakkuk, Zephaniah, Haggai, Zechariah, Malachi',
                'follow_question' => null,
                'answer' => null
            ],
            [
                'challenge' => 41,
                'petition' => null,
                'init_question' =>  null,
                'statement' => 'Matthew, Mark, Luke, John, Acts, Romans, 1 Corinthians, 2 Corinthians, Galatians, Ephesians, Philippians, Colossians, 1 Thessalonians, 2 Thessalonians, 1 Timothy, 2 Timothy, Titus, Philemon, Hebrews, James, 1 Peter, 2 Peter, 1 John, 2 John, 3 John, Jude, Revelation',
                'follow_question' => null,
                'answer' => null
            ]
        ];

        foreach ($array as $item) {
            Content::create([
                'challenge_id' => $item['challenge'],
                'petition' => $item['petition'],
                'initial_question' => $item['init_question'],
                'statement' => $item['statement'],
                'following_question' => $item['follow_question'],
                'answer' => $item['answer']
            ]);
        }
    }
}
