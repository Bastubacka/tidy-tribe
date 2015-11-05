<?php
// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number")
     */
    public function numberAction()
    {
        $number = rand(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
    /**
     * @Route("/")
     */
    public function Page1()
    {
        $number = rand(0, 100);

        return new Response(
            '<html><body>Page 1</body></html>'
        );
    }
        /**
     * @Route("/web")
     */
    public function Page2()
    {
        $number = rand(0, 100);

        return new Response(
            '<html><body>Page 2</body></html>'
        );
    }
}

