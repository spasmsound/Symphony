<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewsController extends Controller
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return new Response('стартовая страница');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        $comments = [
            'бля, я такой кончиный',
            'нет, я кончинный',
            'нет, я кончиный, атвичяю'
        ];
        return $this->render('article.html.twig',
            [
                'title' => ucwords(str_replace('-', ' ', $slug)),
                'comments' => $comments,

            ]);
    }

}