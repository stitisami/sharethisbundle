<?php

namespace SharethisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShareController extends Controller
{
    public function indexAction()
    {
        return $this->render('SharethisBundle:Share:index.html.twig');
    }
	
	
	public function shareAction()
    {
		$share_this_param = $this->container->getParameter('sharethis');
		$publisher = $share_this_param['publisher'];
        return $this->render('SharethisBundle:Share:share.html.twig', array('publisher'=>$publisher));
    }
	
}
