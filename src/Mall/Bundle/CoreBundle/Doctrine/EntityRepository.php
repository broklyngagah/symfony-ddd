<?php

/**
 * @author    Pieter Lelaona
 * @email     <broklyn.gagah@gmail.com>
 * @date      2013.12.01
 */

namespace Mall\Bundle\CoreBundle\Doctrine;

use Doctrine\ORM\EntityRepository as BaseEntityRepository;
use Mall\Bundle\CoreBundle\ORM\EntityInterface;
use Mall\Bundle\CoreBundle\ORM\RepositoryInterface;

/**
 * Class EntityRepository
 * @package Mall\Bundle\CoreBundle\Doctrine
 */
class EntityRepository extends BaseEntityRepository implements RepositoryInterface
{

    /**
     * @inheritdoc
     */
    public function findById($id)
    {
        $this->find($id);
    }

    /**
     * @inheritdoc
     */
    public function add(EntityInterface $entity)
    {
        $this->exceptionInvalidEntityType($entity);
        $this->getEntityManager()->persist($entity);
    }

    /**
     * @inheritdoc
     */
    public function remove(EntityInterface $entity)
    {
        $this->exceptionInvalidEntityType($entity);
        $this->getEntityManager()->remove($entity);
    }

    /**
     * @inheritdoc
     */
    public function update(EntityInterface $entity)
    {
        $this->exceptionInvalidEntityType($entity);
        $this->getEntityManager()->merge($entity);
    }

    protected function exceptionInvalidEntityType(EntityInterface $object)
    {

        if ( $this->_entityName !== get_class($object) ) {
            throw new \InvalidArgumentException(sprintf('Invalid entity type %s supplied for repository of %s',
                $this->_entityName, get_class($object)
            ));
        }

    }
}
