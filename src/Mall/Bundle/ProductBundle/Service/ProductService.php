<?php

namespace Mall\Bundle\ProductBundle\Service;

use Mall\Bundle\CoreBundle\ORM\RepositoryInterface;
use Mall\Bundle\CoreBundle\ORM\UnitOfWorkInterface;
use Doctrine\Common\Collections\ArrayCollection;

class ProductService
{
    /**
     * @var RepositoryInterface
     */
    private $productRepo;

    /**
     * @var UnitOfWorkInterface
     */
    private $uw;

    public function __construct(UnitOfWorkInterface $uw, RepositoryInterface $repo)
    {
        $this->productRepo = $repo;
        $this->uw = $uw;
    }

    /**
     * @return mixed|\Doctrine\Common\Collections\ArrayCollection
     */
    public function getAllProduct()
    {
        return $this->productRepo->findAll();
    }



}