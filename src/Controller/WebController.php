<?php
namespace App\Controller;

use App\Services\PagesManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WebController extends AbstractController {
    public function index(PagesManager $pm): Response
    {
        $resp = $pm->view("home");
        if (!$resp)
            $this->createNotFoundException("Page not found");

        return new Response($resp);
    }

    public function signUp(): Response 
    {
        return new Response("
            <html><body>Sign Up Page</body></html>
        ");
    }
}