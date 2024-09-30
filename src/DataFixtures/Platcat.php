<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Plat;
use App\Entity\Categorie;

class Platcat extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

$categoriePizza= new Categorie();
$categoriePizza->setLibelle("Pizza");
$categoriePizza->setImage("pizza_cat.jpg");
$categoriePizza->setActive("Yes");
$manager->persist($categoriePizza);

$categorieBurger= new Categorie();
$categorieBurger->setLibelle("Burger");
$categorieBurger->setImage("burger_cat.jpg");
$categorieBurger->setActive("Yes");
$manager->persist($categorieBurger);

$categorieWraps= new Categorie();
$categorieWraps->setLibelle("Wraps");
$categorieWraps->setImage("wrap_cat.jpg");
$categorieWraps->setActive("Yes");
$manager->persist($categorieWraps);

$categoriePasta= new Categorie();
$categoriePasta->setLibelle("Pasta");
$categoriePasta->setImage("pasta_cat.jpg");
$categoriePasta->setActive("Yes");
$manager->persist($categoriePasta);

$categorieSandwich= new Categorie();
$categorieSandwich->setLibelle("Sandwich");
$categorieSandwich->setImage("sandwich_cat.jpg");
$categorieSandwich->setActive("Yes");
$manager->persist($categorieSandwich);

$categorieAsianFood= new Categorie();
$categorieAsianFood->setLibelle("Asian Food");
$categorieAsianFood->setImage("asian_food_cat.jpg");
$categorieAsianFood->setActive("Yes");
$manager->persist($categorieAsianFood);

$categorieSalade= new Categorie();
$categorieSalade->setLibelle("Salade");
$categorieSalade->setImage("salade_cat.jpg");
$categorieSalade->setActive("Yes");
$manager->persist($categorieSalade);

$categorieVeggie= new Categorie();
$categorieVeggie->setLibelle("Veggie");
$categorieVeggie->setImage("veggie_cat.jpg");
$categorieVeggie->setActive("Yes");
$manager->persist($categorieVeggie);

$categorieAperitif=new Categorie();
$categorieAperitif->setLibelle("Apéritif");
$categorieAperitif->setImage("apero_cat.jpg");
$categorieAperitif->setActive("Yes");
$manager->persist($categorieAperitif);

$categorieBoisson=new Categorie();
$categorieBoisson->setLibelle("Boisson");
$categorieBoisson->setImage("boisson_cat.jpg");
$categorieBoisson->setActive("Yes");
$manager->persist($categorieBoisson);

$categorieDessert=new Categorie();
$categorieDessert->setLibelle("Dessert");
$categorieDessert->setImage("dessert_cat.jpg");
$categorieDessert->setActive("Yes");
$manager->persist($categorieDessert);

$categorieFromage=new Categorie();
$categorieFromage->setLibelle("Fromage");
$categorieFromage->setImage("fromage_cat.jpg");
$categorieFromage->setActive("Yes");
$manager->persist($categorieFromage);

// ----------------------------------------------------------------------------------------------------------------------------------

$platPizzaBianca=new Plat();
$platPizzaBianca->setLibelle("Pizza Bianca");
$platPizzaBianca->setDescription("Une pizza fine et croustillante garnie de crème mascarpone légèrement citronnée et de tranches de saumon fumé, le tout relevé de baies roses et de basilic frais.");
$platPizzaBianca->setPrix("14.00");
$platPizzaBianca->setImage("pizza-salmon.png");
$platPizzaBianca->setActive("Yes");
$platPizzaBianca->setCategorie($categoriePizza);
$manager->persist($platPizzaBianca);

$platPizzaMargherita=new plat();
$platPizzaMargherita->setLibelle("Pizza Margherita");
$platPizzaMargherita->setDescription("Une authentique pizza margarita, un classique de la cuisine italienne! Une pâte faite maison, une sauce tomate fraîche, de la mozzarella Fior di latte, du basilic, origan, ail, sucre, sel & poivre...");
$platPizzaMargherita->setPrix("14.00");
$platPizzaMargherita->setImage("pizza-margherita.jpg");
$platPizzaMargherita->setActive("Yes");
$platPizzaMargherita->setCategorie($categoriePizza);
$manager->persist($platPizzaMargherita);

$platPizzaVerte=new plat();
$platPizzaVerte->setLibelle("Pizza Verte");
$platPizzaVerte->setDescription("La pizza verte est une explosion de couleurs et de saveurs. Sur une base de pâte croustillante, elle est garnie de sauce tomate parfumée, de mozzarella fondante, et d une variété de légumes frais ");
$platPizzaVerte->setPrix("15.00");
$platPizzaVerte->setImage("Food-Name-8298.jpg");
$platPizzaVerte->setActive("Yes");
$platPizzaVerte->setCategorie($categoriePizza);
$manager->persist($platPizzaVerte);

$platBurgerDistrict=new plat();
$platBurgerDistrict->setLibelle("District Burger");
$platBurgerDistrict->setDescription("Burger composé d’un bun’s du boulanger, deux steaks de 80g (origine française), de deux tranches poitrine de porc fumée, de deux tranches cheddar affiné, salade et oignons confits. .");
$platBurgerDistrict->setPrix("8.00");
$platBurgerDistrict->setImage("hamburger.jpg");
$platBurgerDistrict->setActive("Yes");
$platBurgerDistrict->setCategorie($categorieBurger);
$manager->persist($platBurgerDistrict);

$platBurgerCheeseburger=new plat();
$platBurgerCheeseburger->setLibelle("Cheeseburger");
$platBurgerCheeseburger->setDescription("Burger composé d’un bun’s du boulanger, de salade, oignons rouges, pickles, oignon confit, tomate, d’un steak d’origine Française, d’une tranche de cheddar affiné, et de notre sauce maison.");
$platBurgerCheeseburger->setPrix("8.00");
$platBurgerCheeseburger->setImage("cheesburger.jpg");
$platBurgerCheeseburger->setActive("Yes");
$platBurgerCheeseburger->setCategorie($categorieBurger);
$manager->persist($platBurgerCheeseburger);

$platBurgerHamburger=new plat();
$platBurgerHamburger->setLibelle("Hamburger");
$platBurgerHamburger->setDescription("Un hamburger juteux avec un steak haché de boeuf grillé, du cheddar fondant, des tomates fraiche, de la laitue croquante le tout dans un pain brioché toasté");
$platBurgerHamburger->setPrix("9.00");
$platBurgerHamburger->setImage("Food-Name-433.jpeg");
$platBurgerHamburger->setActive("Yes");
$platBurgerHamburger->setCategorie($categorieBurger);
$manager->persist($platBurgerHamburger);

$platBurgerDoubli=new plat();
$platBurgerDoubli->setLibelle("Le Doubli");
$platBurgerDoubli->setDescription("Le Doubli avec son gros steak est un régal pour les amateurs de viande. Composé d un pain brioché moelleux, il renferme un épais steak juteux et bien assaisonné, grillé à la perfection. ");
$platBurgerDoubli->setPrix("13.00");
$platBurgerDoubli->setImage("Food-Name-6340.jpg");
$platBurgerDoubli->setActive("Yes");
$platBurgerDoubli->setCategorie($categorieBurger);
$manager->persist($platBurgerDoubli);

$platWrapsBuffaloChicken=new plat();
$platWrapsBuffaloChicken->setLibelle("Buffalo Chicken Wrap");
$platWrapsBuffaloChicken->setDescription("Du bon filet de poulet mariné dans notre spécialité sucrée & épicée, enveloppé dans une tortilla blanche douce faite maison.");
$platWrapsBuffaloChicken->setPrix("5.00");
$platWrapsBuffaloChicken->setImage("buffalo-chicken.jpg");
$platWrapsBuffaloChicken->setActive("Yes");
$platWrapsBuffaloChicken->setCategorie($categorieWraps);
$manager->persist($platWrapsBuffaloChicken);

$platWrapsPoulet=new plat();
$platWrapsPoulet->setLibelle("Wrap Poulet");
$platWrapsPoulet->setDescription("Notre wrap est un délice enroulé, combine une tortilla moelleuse avec des légumes croquants et du poulet grillé juteux, Parfait pour une pause gourmande et équilibrée");
$platWrapsPoulet->setPrix("6.00");
$platWrapsPoulet->setImage("Food-Name-3461.jpg");
$platWrapsPoulet->setActive("Yes");
$platWrapsPoulet->setCategorie($categorieWraps);
$manager->persist($platWrapsPoulet);

$platPastaSpaghetti=new plat();
$platPastaSpaghetti->setLibelle("Spaghetti aux Légumes");
$platPastaSpaghetti->setDescription("Un plat de spaghetti au pesto de basilic et légumes poêlés, très parfumé et rapide");
$platPastaSpaghetti->setPrix("10.00");
$platPastaSpaghetti->setImage("spaghetti-legumes.jpg");
$platPastaSpaghetti->setActive("Yes");
$platPastaSpaghetti->setCategorie($categoriePasta);
$manager->persist($platPastaSpaghetti);

$platPastaLasagnes=new plat();
$platPastaLasagnes->setLibelle("Lasagnes");
$platPastaLasagnes->setDescription("Découvrez notre recette des lasagnes, l'une des spécialités italiennes que tout le monde aime avec sa viande hachée et gratinée à l'emmental. Et bien sûr, une inoubliable béchamel à la noix de muscade.");
$platPastaLasagnes->setPrix("12.00");
$platPastaLasagnes->setImage("lasagnes_viande.jpg");
$platPastaLasagnes->setActive("Yes");
$platPastaLasagnes->setCategorie($categoriePasta);
$manager->persist($platPastaLasagnes);

$platPastaTagliatelles=new plat();
$platPastaTagliatelles->setLibelle("Tagliatelles au saumon");
$platPastaTagliatelles->setDescription("Découvrez notre recette délicieuse de tagliatelles au saumon frais et à la crème qui qui vous assure un véritable régal!  ");
$platPastaTagliatelles->setPrix("12.00");
$platPastaTagliatelles->setImage("tagliatelles.jpg");
$platPastaTagliatelles->setActive("Yes");
$platPastaTagliatelles->setCategorie($categoriePasta);
$manager->persist($platPastaTagliatelles);

$platSandwichCroqueFromage=new plat();
$platSandwichCroqueFromage->setLibelle("Croque Fromage");
$platSandwichCroqueFromage->setDescription("Le croque-monsieur au fromage connu pour sa simplicité et son goût réconfortant. Ce sandwich chaud se compose de tranches de pain de mie, garnies de jambon et généreusement recouvertes de fromage fondant,");
$platSandwichCroqueFromage->setPrix("5.00");
$platSandwichCroqueFromage->setImage("Food_Name-3631.jpg");
$platSandwichCroqueFromage->setActive("Yes");
$platSandwichCroqueFromage->setCategorie($categorieSandwich);
$manager->persist($platSandwichCroqueFromage);

$platAsianFoodMakis=new plat();
$platAsianFoodMakis->setLibelle("Makis au tempura");
$platAsianFoodMakis->setDescription("Réalisé à partir d œufs, d eau et de farine, le mélange à tempura permet de créer un enrobage croquant sur vos sushis, tout en conservant un intérieur moelleux.");
$platAsianFoodMakis->setPrix("11.00");
$platAsianFoodMakis->setImage("asianfood2.jpg");
$platAsianFoodMakis->setActive("Yes");
$platAsianFoodMakis->setCategorie($categorieAsianFood);
$manager->persist($platAsianFoodMakis);

$platAsianFoodRamen=new plat();
$platAsianFoodRamen->setLibelle("Ramen miso poulet");
$platAsianFoodRamen->setDescription("Le miso ramen est une recette de soupe japonaise traditionnelle. Notre délicieuse recette à base de poulet ou de tofu");
$platAsianFoodRamen->setPrix("5.00");
$platAsianFoodRamen->setImage("asianfood3.png");
$platAsianFoodRamen->setActive("Yes");
$platAsianFoodRamen->setCategorie($categorieAsianFood);
$manager->persist($platAsianFoodRamen);

$platAsianFoodMiso=new plat();
$platAsianFoodMiso->setLibelle("Soupe Miso");
$platAsianFoodMiso->setDescription("La soupe miso est une soupe de la cuisine japonaise, composée d un bouillon et de miso (soja fermenté)");
$platAsianFoodMiso->setPrix("7.00");
$platAsianFoodMiso->setImage("asianfood4.jpg");
$platAsianFoodMiso->setActive("Yes");
$platAsianFoodMiso->setCategorie($categorieAsianFood);
$manager->persist($platAsianFoodMiso);

$platSaladeCesar=new plat();
$platSaladeCesar->setLibelle("Salade César");
$platSaladeCesar->setDescription("Une délicieuse salade Caesar (César) composée de filets de poulet grillés, de feuilles croquantes de salade romaine, de croutons à l'ail, de tomates cerise et surtout de sa fameuse sauce Caesar. Le tout agrémenté de copeaux de parmesan.");
$platSaladeCesar->setPrix("7.00");
$platSaladeCesar->setImage("cesar_salad.jpg");
$platSaladeCesar->setActive("Yes");
$platSaladeCesar->setCategorie($categorieSalade);
$manager->persist($platSaladeCesar);

$platSaladeMystere=new plat();
$platSaladeMystere->setLibelle("Salade Mystère");
$platSaladeMystere->setDescription("Une bonne salade composé mystère");
$platSaladeMystere->setPrix("12.00");
$platSaladeMystere->setImage("salad1.png");
$platSaladeMystere->setActive("Yes");
$platSaladeMystere->setCategorie($categorieSalade);
$manager->persist($platSaladeMystere);

$platVeggieCourgettes=new plat();
$platVeggieCourgettes->setLibelle("Courgettes farcies au quinoa");
$platVeggieCourgettes->setDescription("Voici une recette équilibrée à base de courgettes, quinoa et champignons, 100% vegan et sans gluten!");
$platVeggieCourgettes->setPrix("8.00");
$platVeggieCourgettes->setImage("courgettes_farcies.jpg");
$platVeggieCourgettes->setActive("Yes");
$platVeggieCourgettes->setCategorie($categorieVeggie);
$manager->persist($platVeggieCourgettes);

$platAperitifBoraBora=new plat();
$platAperitifBoraBora->setLibelle("Cocktail Bora Bora sans alcool");
$platAperitifBoraBora->setDescription("Il est élaboré à base de jus d ananas, de jus de fruit de la passion, de jus de citron et de sirop de grenadine, sans alcool");
$platAperitifBoraBora->setPrix("6.00");
$platAperitifBoraBora->setImage("Cocktail-Bora-Bora-sans-alcool.jpg");
$platAperitifBoraBora->setActive("Yes");
$platAperitifBoraBora->setCategorie($categorieAperitif);
$manager->persist($platAperitifBoraBora);

$platAperitifMojito=new plat();
$platAperitifMojito->setLibelle("Cocktail Mojito avec alcool");
$platAperitifMojito->setDescription("le mojito est un cocktail à base de rhum, de citron vert et de feuilles de menthe fraîche.");
$platAperitifMojito->setPrix("8.00");
$platAperitifMojito->setImage("Cocktail-mojito-1.jpg");
$platAperitifMojito->setActive("Yes");
$platAperitifMojito->setCategorie($categorieAperitif);
$manager->persist($platAperitifMojito);

$platAperitifGinT=new plat();
$platAperitifGinT->setLibelle("Gin Tonic Gout Framboise");
$platAperitifGinT->setDescription("Le gin tonic framboise est une boisson rafraîchissante et fruitée. Mélange de gin de qualité, de tonic pétillant et de framboises fraîches, ce cocktail est rehaussé d une touche de jus de citron vert");
$platAperitifGinT->setPrix("7.00");
$platAperitifGinT->setImage("gin_T.jpg");
$platAperitifGinT->setActive("Yes");
$platAperitifGinT->setCategorie($categorieAperitif);
$manager->persist($platAperitifGinT);

$platAperitifSOB=new plat();
$platAperitifSOB->setLibelle("Sex On The Beach");
$platAperitifSOB->setDescription("Sex on the beach est acidulé et fruité. Un mélange de vodka, de jus (ananas, cranberry, framboise), et de crème de mûre évoquant des vacances d été");
$platAperitifSOB->setPrix("7.00");
$platAperitifSOB->setImage("sob.jpg");
$platAperitifSOB->setActive("Yes");
$platAperitifSOB->setCategorie($categorieAperitif);
$manager->persist($platAperitifSOB);

$platBoissonCoca=new plat();
$platBoissonCoca->setLibelle("Coca Cola Cherry");
$platBoissonCoca->setDescription("Le bon gout de la cerise maintenant dans vos bouteille coca cola");
$platBoissonCoca->setPrix("3.00");
$platBoissonCoca->setImage("cocacherry.png");
$platBoissonCoca->setActive("Yes");
$platBoissonCoca->setCategorie($categorieBoisson);
$manager->persist($platBoissonCoca);

$platBoissonFanta=new plat();
$platBoissonFanta->setLibelle("Canette de Fanta");
$platBoissonFanta->setDescription("Le plaisir de Fanta partout");
$platBoissonFanta->setPrix("2.00");
$platBoissonFanta->setImage("fanta-orange-33cl.jpg");
$platBoissonFanta->setActive("Yes");
$platBoissonFanta->setCategorie($categorieBoisson);
$manager->persist($platBoissonFanta);

$platBoissonOasis=new plat();
$platBoissonOasis->setLibelle("Canette d Oasis");
$platBoissonOasis->setDescription("Le plaisir d Oasis partout");
$platBoissonOasis->setPrix("2.00");
$platBoissonOasis->setImage("oasis.jpg");
$platBoissonOasis->setActive("Yes");
$platBoissonOasis->setCategorie($categorieBoisson);
$manager->persist($platBoissonOasis);

$platBoissonRedBull=new plat();
$platBoissonRedBull->setLibelle("Canette de Red Bull");
$platBoissonRedBull->setDescription("Le plaisir de Red Bull partout");
$platBoissonRedBull->setPrix("3.00");
$platBoissonRedBull->setImage("red-bull.jpg");
$platBoissonRedBull->setActive("Yes");
$platBoissonRedBull->setCategorie($categorieBoisson);
$manager->persist($platBoissonRedBull);

$platDessertCoupeete=new plat();
$platDessertCoupeete->setLibelle("Coupe Été");
$platDessertCoupeete->setDescription("La coupe d été est un dessert composé d une boule de glace saveur fraise, une de vanille et une de caramel parsemer d un lit de fruits rouge ");
$platDessertCoupeete->setPrix("7.00");
$platDessertCoupeete->setImage("Boules-de-glace.jpg");
$platDessertCoupeete->setActive("Yes");
$platDessertCoupeete->setCategorie($categorieDessert);
$manager->persist($platDessertCoupeete);

$platDessertIleFlottante=new plat();
$platDessertIleFlottante->setLibelle("Ile Flottante");
$platDessertIleFlottante->setDescription("L île flottante est un dessert délicat composé de blancs d œufs montés en neige, pochés et flottant sur une crème anglaise onctueuse, souvent garnie de caramel liquide.");
$platDessertIleFlottante->setPrix("6.00");
$platDessertIleFlottante->setImage("Ile-flottante.jpg");
$platDessertIleFlottante->setActive("Yes");
$platDessertIleFlottante->setCategorie($categorieDessert);
$manager->persist($platDessertIleFlottante);

$platDessertSaladeFruit=new plat();
$platDessertSaladeFruit->setLibelle("Salade de Fruits");
$platDessertSaladeFruit->setDescription("Venez gouter à notre salade de fruit pour etre plonger dans un délice infinie");
$platDessertSaladeFruit->setPrix("4.00");
$platDessertSaladeFruit->setImage("Salade-de-fruits.jpg");
$platDessertSaladeFruit->setActive("Yes");
$platDessertSaladeFruit->setCategorie($categorieDessert);
$manager->persist($platDessertSaladeFruit);

$platDessertTiramisu=new plat();
$platDessertTiramisu->setLibelle("Tiramisu");
$platDessertTiramisu->setDescription("Venez gouter à notre classique tiramisu , Classique mais si bont !");
$platDessertTiramisu->setPrix("6.00");
$platDessertTiramisu->setImage("tiramisu-au-nutella.jpg");
$platDessertTiramisu->setActive("Yes");
$platDessertTiramisu->setCategorie($categorieDessert);
$manager->persist($platDessertTiramisu);

$platFromageCamenbert=new plat();
$platFromageCamenbert->setLibelle("Camenbert Français");
$platFromageCamenbert->setDescription("Venez gouter à un bon camembert de nos campagne Française! ");
$platFromageCamenbert->setPrix("2.00");
$platFromageCamenbert->setImage("cam.jpg");
$platFromageCamenbert->setActive("Yes");
$platFromageCamenbert->setCategorie($categorieFromage);
$manager->persist($platFromageCamenbert);

$platFromageChevre=new plat();
$platFromageChevre->setLibelle("Fromage de chèvre");
$platFromageChevre->setDescription("Le bon fromage de nos belles chèvre vous fera tomber dans une douceur telle un nuage de saveur");
$platFromageChevre->setPrix("3.00");
$platFromageChevre->setImage("fromage_ch.jpg");
$platFromageChevre->setActive("Yes");
$platFromageChevre->setCategorie($categorieFromage);
$manager->persist($platFromageChevre);

$platFromagePlateau1=new plat();
$platFromagePlateau1->setLibelle("Plateau Fromage");
$platFromagePlateau1->setDescription("Venez découvrir notre plateau varié de fromage !");
$platFromagePlateau1->setPrix("14.00");
$platFromagePlateau1->setImage("plateau_fr.jpg");
$platFromagePlateau1->setActive("Yes");
$platFromagePlateau1->setCategorie($categorieFromage);
$manager->persist($platFromagePlateau1);

$platFromagePlateau2=new plat();
$platFromagePlateau2->setLibelle("Plateau Fromage raclette");
$platFromagePlateau2->setDescription("Pour une raclette réussite venez commander notre plateau de fromage à raclette");
$platFromagePlateau2->setPrix("15.00");
$platFromagePlateau2->setImage("plateau-fromage-raclette-.jpg");
$platFromagePlateau2->setActive("Yes");
$platFromagePlateau2->setCategorie($categorieFromage);
$manager->persist($platFromagePlateau2);

        $manager->flush();
    }
}
