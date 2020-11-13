<?php


namespace App\controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Httpfoundation\Response;


class IndexController extends AbstractController{
    public function homepage(){
        return new Response("<h1>Mi primera página con Symfony</h1>");
    }
}