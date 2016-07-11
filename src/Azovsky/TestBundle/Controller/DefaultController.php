<?php

namespace Azovsky\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use RecursiveArrayIterator;
use ErrorException;

use Azovsky\TestBundle\Classes\Utilites;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AzovskyTestBundle:Default:index.html.twig');
    }
    
    public function summAction() {
        if (isset($_POST['params'])) {
            try {
                $numbers=json_decode($_POST['params']);
                $numbers=new RecursiveArrayIterator($numbers);
                foreach ($numbers as $key=>$value) {
                    switch ($value->name) {
                        case "number_1":
                            $number_1=$value->value;
                        break;
                        case "number_2":
                            $number_2=$value->value;
                        break;
                        default:
                        break;
                    }
                }
                if (!isset($number_1)||!isset($number_2)) {
                    return new Response("error");
                }
                return new Response(json_encode(Utilites::getSumm($number_1, $number_2)));
            }
            catch (ErrorException $e) {
                return new Response($e);
            }
        }
        else {
            return new Response();
        }
    }
}
