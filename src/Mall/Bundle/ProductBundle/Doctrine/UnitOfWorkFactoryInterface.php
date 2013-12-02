<?php

namespace Mall\Bundle\ProductBundle\Doctrine;

interface UnitOfWorkFactoryInterface
{

    /**
     * @return \Mall\Bundle\CoreBundle\ORM\UnitOfWorkInterface
     */
    public function createUnitOfWork();
}