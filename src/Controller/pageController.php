<?php
Namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    private $articles = [
          1=>  [
                "id" => 1,
                "title" => "Le gouvernement a trois mois pour prouver qu’il respecte ses engagements climatiques, une première en France",
                "content" => "Le Conseil d’Etat a donné ce délai à l’exécutif pour « justifier que la trajectoire de réduction à horizon 2030 pourra être respectée ». Une décision « historique » pour les ONG.",
                "image" => "https://img.lemde.fr/2020/11/19/0/0/4928/3280/688/0/60/0/e96ba3d_883405059-000-8vg8p6.jpg"
            ],
          2=>  [
                "id" => 2,
                "title" => "L’interdiction du CBD en France jugée illégale par la justice européenne",
                "content" => "La décision de justice conclut que cette molécule présente dans le cannabis n’a « pas d’effet psychotrope ni d’effet nocif sur la santé ». Elle devrait priver de base légale de nombreux procès en France.",
                "image" => "https://img.lemde.fr/2017/05/24/0/613/3388/2258/576/0/60/0/9ca5088_32700-2nml3k.24wet2csor.jpg"
            ],
           3=> [
                "id" => 3,
                "title" => "« L’être humain n’accepte plus d’être malade »",
                "content" => "Rappelant que « le vivant est avant tout incertitude », le neurobiologiste Guy Simonnet souligne qu’une « tolérance zéro maladie » ne peut qu’être la source d’une nouvelle vulnérabilité.",
                "image" => "https://img.lemde.fr/2020/10/26/0/0/6720/4480/688/0/60/0/43a047a_363445842-201021jbalague-lemonde-covid-bichat-soins-29.jpg"
            ],
          4=>  [
                "id" => 4,
                "title" => "Le gouvernement a trois mois pour prouver qu’il respecte ses engagements climatiques, une première en France",
                "content" => "Le Conseil d’Etat a donné ce délai à l’exécutif pour « justifier que la trajectoire de réduction à horizon 2030 pourra être respectée ». Une décision « historique » pour les ONG.",
                "image" => "https://img.lemde.fr/2020/11/19/0/0/4928/3280/688/0/60/0/e96ba3d_883405059-000-8vg8p6.jpg"
            ],
           5=> [
                "id" => 5,
                "title" => "Des « coupures très courtes » d’électricité pourraient avoir lieu cet hiver en France",
                "content" => "Le réseau de transport d’électricité assure disposer de leviers pour éviter des coupures, mais appelle chacun à adopter des gestes d’économies d’énergie.",
                "image" => "https://img.lemde.fr/2020/11/19/0/0/5184/3456/688/0/60/0/05ce9ea_162988352-000-1uw2ar.jpg"
            ],
        ];


    /**
     * @Route("/", name="HomePage")
     */

    public function HomePage(){

        $articles = $this->articles;
        $articlestris = array_reverse(array_slice($articles, 0,3 ));

        return $this->render('Base.html.twig', [
            'articles' => $articlestris
        ]);
    }

    /**
    * @Route("/articles", name="All_Articles")
    */
    public function AllArticles(){

        $articles =  $this->articles;

        return $this->render('AllArticles.html.twig',[
            'articles' => $articles
        ]);
    }

    /**
     * @Route("/articles/{id}", name="The_Article")
     */
    public function TheArticle($id){
        $articles = $this->articles;

        $articlefin = $articles[$id];

        return $this->render('Articles.html.twig',[
            'articles' => $articlefin
        ]);
    }


}