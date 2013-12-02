<?php

namespace Mall\Bundle\ProductBundle\Doctrine;


interface RepositoryFactoryInterface
{

    /**
     * @return \Mall\Bundle\CoreBundle\ORM\RepositoryInterface
     */
    public function createProductRepository();

}
