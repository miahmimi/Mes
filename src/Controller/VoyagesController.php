<?php



namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * Description of VoyagesController
 *
 * @author hachm
 */
class VoyagesController extends abstractController  {
    /**
     * @Route("/voyages", name="voyages")
     * @return Response
     */
    public function index():Response {
    return $this->render("pages/voyages.html.twig");
    }
}
