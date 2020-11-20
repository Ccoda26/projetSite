<?php
Namespace App\Controller;


use App\Services\ArticlesHelper;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{


    /**
     * @Route("/", name="HomePage")
     */

    public function HomePage()
    {
        //appelle de ma class dans services qui contient mon array
        $articlesHelper = new ArticlesHelper();
        // var articles contient la variables qui contient ma class pour appeller ma method get Articles
        //qui retourne mon array
        $articles = $articlesHelper->lastArticle();

        return $this->render('Base.html.twig', [
            'articles' => $articles
        ]);
    }


    /**
    * @Route("/articles", name="All_Articles")
    */
    public function AllArticles(){
        //appelle de ma class dans services qui contient mon array
        $articlesHelper = new ArticlesHelper();
        // var articles contient la variables qui contient ma class pour appeller ma method get Articles
        //qui retourne mon array
        $articles = $articlesHelper->getArticles();

        return $this->render('AllArticles.html.twig',[
            'articles' => $articles
        ]);
    }

    /**
     * @Route("/articles/{id}", name="The_Article")
     */
    public function TheArticle($id){
        //appelle de ma class dans services qui contient mon array
            $articlesHelper = new ArticlesHelper();
        // var articles contient la variables qui contient ma class pour appeller ma method get Articles
        //qui retourne mon array
        $articles = $articlesHelper->getArticles();

        $articlefin = $articles[$id];

        return $this->render('Articles.html.twig',[
            'articles' => $articlefin
        ]);
    }

    /**
     * @Route("/resume", name="Resume")
     */
    public function Resume(){
        //appelle de ma class dans services qui contient mon array
        $articlesHelper = new ArticlesHelper();
        // var articles contient la variables qui contient ma class pour appeller ma method get Articles
        //qui retourne mon array
        $articles = $articlesHelper->getArticles();

        return $this->render('Resume.html.twig',[
            'articles' => $articles
        ]);
    }


}