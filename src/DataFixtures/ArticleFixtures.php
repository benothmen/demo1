<?php

namespace App\DataFixtures;

juse Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for($i=1;$i<=10;$i++)
        {
        $article=new Article();
        $article->setName("Titre de l'article n° $i")
        ->setContient("<p>Le contenu de l'article n° $i</p>");
        $manager->persist($article);
        }
        $manager->flush();

    }
}
