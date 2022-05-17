<?php

namespace App\Services;

use App\Entity\Page;
use Doctrine\Persistence\ManagerRegistry;
use Twig\Environment;

class PagesManager {
    private $twig;
    private $em;

    function __construct(Environment $twig, ManagerRegistry $em)
    {
        $this->twig = $twig;
        $this->em = $em;
    }
    public function view($page) {
        $pageObs = $this->em->getRepository(Page::class)->findBy(["name" => $page]);

        if (empty($pageObs)) {
            return;
        }

        /** @var Page */
        $pageOb = $pageObs[0];
        $views = $pageOb->getViews();
        $pageOb->setViews($views+1);
        $this->em->getManager()->persist($pageOb);
        $this->em->getManager()->flush();
        
        return $this->twig->render('web/home.html.twig', ['title' => 'Page views: ', 'views' => $views]);
    }
}