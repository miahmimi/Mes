<?php



namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\VisiteRepository;
/**
 * Description of VoyagesController
 *
 * @author hachm
 */
class VoyagesController extends abstractController  {
/**
 * 
 * @var VisiteRepository
 */

private $repository ;
 /**
 * 
 * @param VisiteRepository $repository
 */
public function __construct(VisiteRepository $repository) {
        $this->repository = $repository;
    }


    
    
    /**
     * @Route("/voyages", name="voyages")
     * @return Response
     */
    public function index():Response {
        $visites = $this->repository->findall();
    return $this->render("pages/voyages.html.twig",[
        'visites' => $visites
    ]);
   }
}

