<?php
/**
 * Created by PhpStorm.
 * User: youssefmoudni
 * Date: 16/10/2017
 * Time: 11:15
 */

namespace TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class MonPremierController extends Controller
{
    public function indexAction()
    {
        return $this->render('TestBundle:Default:index.html.twig', array('title'=>'hello world'));
    }

}


?>