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
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('The first page is created! WOOO! Try to find article news with /news URL');
    }
    /**
     * @Route("/news/{title}")
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
