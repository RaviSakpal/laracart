<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' =>'https://images-fe.ssl-images-amazon.com/images/I/51VrfksFQ8L._AC_AA218_.jpg',            'title' =>'Harry Potter',
            'title' =>'Harry Potter and the Philosopher\'s Stone',
            'description' =>'Prepare to be spellbound by this dazzling depiction of the wizarding world and its much-loved characters in this exclusive Kindle in Motion edition of one of the world\'s favourite books - Harry Potter and the Philosopher\'s Stone. Brimming with rich detail and humour that perfectly complements J.K. Rowling\'s timeless classic, Jim Kay\'s glorious illustrations will captivate fans and new readers alike.
',
            'price' =>10,
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' =>'https://images-fe.ssl-images-amazon.com/images/I/511TSFaxgOL.jpg',            'title' =>'Harry Potter',
            'title' =>'Where There\'s Smoke',
            'description' =>'Serenity Jones has it all - a chateau in France, Louboutin shoes, invitations to A-list parties and a wildly successful talk-show with a three year waiting list of people dying to come on. Which doesn\'t include those who are already dead. Because Serenity also has a gift. She can see and hear people who have died,',
            'price' =>10,
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' =>'https://images-fe.ssl-images-amazon.com/images/I/51X3JbzcfzL._AC_AA218_.jpg',            'title' =>'Harry Potter',
            'title' =>'After You Left',
            'description' =>'You want to know what the worst thing is? It’s not the embarrassment, or the looks on people’s faces when I tell them what happened. It isn’t the pain of him not being there—loneliness is manageable. The worst thing is not knowing why.

When Justin walks out on Alice on their honeymoon, with no explanation apart from a cryptic note, Alice is left alone and bewildered, her life in pieces.',
            'price' =>10,
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' =>'https://images-fe.ssl-images-amazon.com/images/I/61K9fWW0C8L.jpg',            'title' =>'Harry Potter',
            'title' =>'Silent Child',
            'description' =>'In the summer of 2006, Emma Price watched helplessly as her six-year-old son\'s red coat was fished out of the River Ouse. It was the tragic story of the year - a little boy, Aiden, wandered away from school during a terrible flood, fell into the river, and drowned.',
            'price' =>10,
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' =>'https://images-fe.ssl-images-amazon.com/images/I/51z7N7H04jL.jpg',            'title' =>'Harry Potter',
            'title' =>'Larger Than Life',
            'description' =>'Alice Metcalf is unlucky in love and was fired from her last job. She is on a tenuous footing in her current one, and has just received the worst news of her life. But when she comes across a family of elephants, killed for their ivory, she can\'t abandon the surviving calf. Trying to hide a hundred-pound baby elephant in her camp may be difficult, but Alice is ready to break all the rules to save the one life she can.',
            'price' =>10,
        ]);
        $product->save();
    }
}
