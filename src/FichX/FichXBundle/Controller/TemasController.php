<?php

namespace FichX\FichXBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class TemasController extends Controller
{
    public function indexAction($id)
    {
        $r = new Response("<div>pedo</div>");
        return $r;
    }
    
    public function getTemasAction($id)
    {
        $entities = $this->get('doctrine')->getRepository('FichXBundle:Temas')->findByMateriaid($id);
        return $this->render('FichXBundle:Temas:temaslista.html.twig', array(
            'temas' => $entities)
        );
    }
    
    public function getTemasIDAction($id)
    {
        $entities = $this->get('doctrine')->getRepository('FichXBundle:Temas')->findByMateriaid($id);
        return $this->render('FichXBundle:Temas:temasjson.html.twig', array(
            'temas' => $entities)
        );
    }
    
    public function getIframeAction($id=1){
        $ar = array();
        $ar[0] = "<iframe width='1000' height='250' src='http://ytdirectlite.appspot.com/static-min/index.html#playlist=PL7czJ7l4VyT_ARUYklQ8CELfZYCzwoZaL'></iframe>";
        $ar[1] = "<iframe width='640' height='360' src='//www.youtube.com/embed/?listType=playlist&list=PL7czJ7l4VyT_ARUYklQ8CELfZYCzwoZaL&showinfo=1' frameborder='0' allowfullscreen></iframe>";
        $ar[2] = "<img src='/dmsosa/fichxxx/web/res/images/youtube.gif'></img>";
        $ar[3] = "<img src='/dmsosa/fichxxx/web/res/images/uno.gif'></img>";
        
        return new Response($ar[$id]);
        
        if ($id == 0){
            return new Response("<iframe width='1000' height='250' src='http://ytdirectlite.appspot.com/static-min/index.html#playlist=PL7czJ7l4VyT_ARUYklQ8CELfZYCzwoZaL'></iframe>");
        }
        return new Response("<iframe width='640' height='360' src='//www.youtube.com/embed/?listType=playlist&list=PL7czJ7l4VyT_ARUYklQ8CELfZYCzwoZaL&showinfo=1' frameborder='0' allowfullscreen></iframe>");
    }
}
