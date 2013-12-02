<?php

namespace Mall\Bundle\CoreBundle\Doctrine;

use Mall\Bundle\CoreBundle\ORM\UnitOfWorkInterface;
use Doctrine\Bundle\DoctrineBundle\Registry;

class UnitOfWork implements UnitOfWorkInterface
{

    private $doctrine;

    public function __construct(Registry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    /**
     * @inheritdoc
     */
    public function commit()
    {
        $this->doctrine->getManager()->flush();
    }
}