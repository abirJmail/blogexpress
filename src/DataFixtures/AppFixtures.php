<?php

namespace App\DataFixtures;
use Faker\Factory;
use App\Entity\Author;
use App\Entity\Article;
use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create($fakerlocale = 'fr_FR');

        // ARTICLES
        $articles = [
            [
                'title' => 'Les meilleures activités de loisirs en vacances',
                'content' => 'Profitez pleinement de vos vacances en explorant une variété d\'activités de loisirs adaptées à tous les goûts et âges. Des aventures en plein air aux activités culturelles, il y en a pour tous les membres de la famille. Préparez-vous à découvrir des paysages magnifiques lors de randonnées, à tester votre adrénaline avec des sports nautiques excitants ou à vous détendre simplement en admirant la nature qui vous entoure. Les activités de loisirs en vacances offrent une occasion unique de se connecter avec la nature et de créer des souvenirs durables.',
                'image' => '1.jpeg'
            ],
            [
                'title' => 'Détente et bien-être dans les meilleurs spas en vacances',
                'content' => 'Offrez-vous une expérience de détente ultime dans les meilleurs spas en vacances. Profitez d\'un large éventail de soins et de massages relaxants qui apaiseront votre corps et votre esprit. Les spas de vacances proposent des traitements personnalisés pour répondre à vos besoins spécifiques, que ce soit pour soulager le stress accumulé, apaiser les muscles endoloris après une journée d\'aventures ou simplement vous offrir une pause bien méritée. Laissez-vous dorloter dans un cadre paisible et luxueux, et repartez de vos vacances avec une sensation de bien-être et de renouveau.',
                'image' => '2.jpeg'
            ],
            [
                'title' => 'Les incontournables du cinéma en vacances',
                'content' => 'Que vous soyez un cinéphile passionné ou que vous cherchiez simplement à vous divertir pendant vos vacances, ne manquez pas les incontournables du cinéma. Des projections en plein air sous les étoiles aux cinémas ultramodernes, vivez des moments de magie cinématographique. Découvrez les derniers blockbusters, les classiques intemporels et les films indépendants inspirants. Les cinémas en vacances vous offrent une évasion bienvenue dans des mondes imaginaires et des histoires captivantes.',
                'image' => '3.jpeg'
            ],
            [
                'title' => 'Les délices gastronomiques des restaurants en vacances',
                'content' => 'Partez pour un voyage culinaire en découvrant les délices gastronomiques des restaurants en vacances. Chaque destination regorge de saveurs uniques et de spécialités locales à ne pas manquer. Des restaurants de rue animés aux établissements étoilés au guide Michelin, les options sont infinies pour satisfaire vos papilles gustatives. Goûtez aux plats traditionnels, aux recettes familiales transmises de génération en génération et aux créations modernes des chefs talentueux. Les restaurants en vacances vous promettent une expérience culinaire inoubliable.',
                'image' => '4.jpeg'
            ],
            [
                'title' => 'Le luxe et le confort des hôtels en vacances',
                'content' => 'Découvrez le luxe et le confort ultimes des hôtels en vacances. Des complexes cinq étoiles aux charmantes auberges, chaque hébergement offre une hospitalité chaleureuse et des installations de première classe. Plongez dans des piscines somptueuses, détendez-vous dans des spas relaxants, dégustez des plats délicieux dans des restaurants gastronomiques et profitez d\'une vue imprenable sur les environs. Les hôtels en vacances sont conçus pour vous offrir une expérience de séjour mémorable et vous faire sentir comme chez vous loin de chez vous.',
                'image' => '5.jpeg'
            ],
            [
                'title' => 'Les activités de plein air incontournables en vacances',
                'content' => 'Profitez de l\'air frais et de la beauté de la nature en participant aux activités de plein air incontournables en vacances. Des randonnées stimulantes aux escapades à vélo pittoresques, en passant par les sports d\'aventure tels que le kayak et l\'escalade, les possibilités sont infinies. Explorez les parcs nationaux, les plages idylliques et les montagnes majestueuses tout en vous reconnectant avec la nature. Les activités de plein air en vacances sont une occasion parfaite de se sentir vivant et de créer des souvenirs durables.',
                'image' => '6.jpeg'
            ],
            [
                'title' => 'Retraite détente dans les meilleurs spas en vacances',
                'content' => 'Découvrez une véritable retraite de détente dans les meilleurs spas en vacances. Offrez-vous des soins luxueux qui revitalisent votre corps et calment votre esprit. Des massages thérapeutiques aux soins du visage apaisants, laissez-vous dorloter par des professionnels qualifiés. Les spas en vacances offrent des environnements sereins, des traitements relaxants et des équipements haut de gamme pour que vous puissiez vous ressourcer pleinement pendant votre séjour.',
                'image' => '7.jpeg'
            ],
            [
                'title' => 'Une soirée magique au cinéma en plein air',
                'content' => 'Vivez une soirée magique en regardant un film en plein air sous les étoiles. Les projections en plein air sont une expérience unique qui allie divertissement et ambiance enchanteresse. Installez-vous confortablement sur des couvertures ou des chaises pliantes et profitez d\'un film tout en respirant l\'air frais de la nuit. Que ce soit un classique intemporel ou un film récent, la magie du cinéma en plein air vous captivera.',
                'image' => '8.jpeg'
            ],
            [
                'title' => 'Les délices culinaires des restaurants gastronomiques en vacances',
                'content' => 'Régalez-vous avec les délices culinaires des restaurants gastronomiques en vacances. Ces établissements d\'exception offrent une expérience culinaire inégalée avec des plats créatifs et raffinés. Les chefs talentueux mettent en valeur les ingrédients locaux et les saveurs uniques de chaque région. Profitez d\'un service impeccable et d\'un cadre élégant pendant que vous savourez des mets délicats. Les restaurants gastronomiques en vacances sont une véritable célébration pour les gourmets et les amateurs de bonne cuisine.',
                'image' => '9.jpeg'
            ],
            [
                'title' => 'Un séjour de luxe dans les plus beaux hôtels du monde',
                'content' => 'Offrez-vous un séjour de luxe dans les plus beaux hôtels du monde. Ces établissements prestigieux vous accueillent dans un cadre somptueux avec des équipements haut de gamme et un service impeccable. Profitez de chambres élégantes offrant des vues panoramiques, détendez-vous dans des spas de classe mondiale et savourez une cuisine raffinée dans des restaurants primés. Les hôtels de luxe en vacances vous offrent une expérience inoubliable où vous serez choyé et traité comme un roi.',
                'image' => '10.jpeg'
            ],
        ];

        // CATÉGORIES
        // Je liste les catégories que je veux créer
        $categories = [
            'Loisirs',
            'Spas',
            'Cinémas',
            'Restaurants',
            'Hotels'
        ];


        foreach ($categories as $item) {
            // Je crée un nouvel objet catégorie
            $categorie = new Category();
            // J'utilise la méthode setName pour définir le nom de la catégorie
            $categorie->setName($item);
            // J'enregistre la catégorie en base de données avec Doctrine
            $manager->persist($categorie);
        }


        foreach ($articles as $item) {

            // AUTEURS
            // Je crée un nouvel objet auteur
            $auteur = new Author();
            // J'utilise la méthode setName pour définir le nom de l'auteur
            $auteur->setName($faker->name());
            // J'enregistre l'auteur en base de données avec Doctrine
            $manager->persist($auteur);

            // Je crée un nouvel objet article
            $article = new Article();
            // J'utilise la méthode setTitle pour définir le titre de l'article
            $article->setTitle($item['title']);
            // J'utilise la méthode setContent pour définir le contenu de l'article
            $article->setContent($item['content']);
            // J'utilise la méthode setCategory pour définir la catégorie de l'article
            // $article->setCategory($categorie);
            // J'utilise la méthode setAuthor pour définir l'auteur de l'article
            $article->setAuthor($auteur);
            // J'utilise la méthode setImage pour définir l'image de l'article
            // $article->setImage($item['image']);
            // J'enregistre l'article en base de données avec Doctrine
            $manager->persist($article);
        }

        $manager->flush();
    }
}
