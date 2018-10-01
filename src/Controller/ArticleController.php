<?php
/**
 * Created by IntelliJ IDEA.
 * User: DC
 * Date: 28/09/2018
 * Time: 09:40
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController

{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage()
    {
        return $this->render('article/homepage.html.twig', [
            'title' => 'Home',
        ]);
    }

    /**
     * @Route("/news/{title}", name="article_show")
     */
    public function show($title = 'THE ARTICLE TITLE')

    {
        $comments = [
            'I ate a normal rock once. It did NOT taste like bacon!',
            'Woohoo! I\'m going on an all-asteroid diet!',
            'I like bacon too! Buy some from my site! bakinsomebacon.com',
        ];

//        dump($title, $this);

        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $title)),
            'comments' => $comments
        ]);
    }
}
