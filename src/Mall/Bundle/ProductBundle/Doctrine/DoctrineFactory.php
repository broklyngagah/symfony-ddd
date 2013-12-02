<?php

namespace Mall\Bundle\ProductBundle\Doctrine;

use Mall\Bundle\CoreBundle\Doctrine\UnitOfWork;
use Doctrine\Bundle\DoctrineBundle\Registry;

/**
 * Class DoctrineFactory
 * @package Mall\Bundle\ProductBundle\Doctrine
 */
class DoctrineFactory implements RepositoryFactoryInterface, UnitOfWorkFactoryInterface
{

    private $doctrine;

    public function __construct(Registry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    /**
     * @inheritdoc
     */
    public function createProductRepository()
    {
        return $this->doctrine->getRepository('MallProductBundle:Product');
    }

    /**
     * @inheritdoc
     */
    public function createUnitOfWork()
    {
        return new UnitOfWork($this->doctrine);
    }
}