<?php

namespace Ant\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductCategoryController extends Controller
{
    public function navAction()
    {
        $categories = $this->get('msi_store.product_category_manager')->findAll(
            [
                'a.published' => true,
                'a.lvl' => 0,
            ]
        );

        return $this->render('MsiStoreBundle:ProductCategory:nav.html.twig', ['categories' => $categories]);
    }
}
