<?php

namespace AppBundle\View;


use FOS\RestBundle\View\View;
use FOS\RestBundle\View\ViewHandler;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TreeViewHandler
{
   	 /**
     * @param ViewHandler $viewHandler
     * @param View        $view
     * @param Request     $request
     * @param string      $format
     *
     * @return Response
     */
    public function createResponse( ViewHandler $handler, View $view, Request $request, $format)
    {
        
        $data = $view->getData();
        //$treeHtmlHelper = new \AppBundle\View\TreeHtmlHelper();
        $treeHtmlHelper = new TreeHtmlHelper();
        $treeHtmlHelper->addArray($data);
        
        $output = new Output();
        $treeHtmlHelper->printTree( $output );
        
        return new Response($output->getOutput(), 200, $view->getHeaders());
    
    }
}