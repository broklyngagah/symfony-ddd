<?php

namespace Mall\Bundle\CoreBundle\ORM;

interface UnitOfWorkInterface
{

    /**
     * Commit the data using persistent object data
     *
     * @return mixed
     */
    public function commit();

}
