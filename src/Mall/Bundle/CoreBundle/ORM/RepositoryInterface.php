<?php

/**
 * @author    Pieter Lelaona
 * @email     <broklyn.gagah@gmail.com>
 * @date      2013.12.01
 */

namespace Mall\Bundle\CoreBundle\ORM;


/**
 * Interface RepositoryInterface
 * @package Mall\Bundle\CoreBundle\ORM
 */
interface RepositoryInterface
{

    /**
     * Get all data
     *
     * @return mixed
     */
    public function findAll();

    /**
     * Get data by id of row
     *
     * @param $id
     * @return mixed
     */
    public function findById($id);

    /**
     * Add data collection
     *
     * @param EntityInterface $entity
     * @return mixed
     */
    public function add(EntityInterface $entity);

    /**
     * Delete row
     *
     * @param EntityInterface $entity
     * @return mixed
     */
    public function remove(EntityInterface $entity);

    /**
     * Update row
     *
     * @param EntityInterface $entity
     * @return mixed
     */
    public function update(EntityInterface $entity);

}
