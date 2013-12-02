<?php

namespace Mall\Web\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Mall\Bundle\ProductBundle\Service\ProductService;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $p = $this->getProductService()->getAllProduct();
        foreach($p as $pp) {
            var_dump($pp->getProductName());
        }

        die;
        return $this->render('MallWebFrontendBundle:Default:index.html.twig', array('products' => $p));
    }

    /**
     * @return ProductService
     */
    private function getProductService()
    {
        return $this->get('mall.bundle.product_bundle.service.product');
    }

}
