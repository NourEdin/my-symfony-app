<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WebController extends AbstractController {
    public function index(): Response
    {
        return new Response("Homepage");
    }

    public function signUp(): Response 
    {
        return new Response("
            <html><body>Sign Up Page</body></html>
        ");
    }
}