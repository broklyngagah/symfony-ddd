<?php

/**
 * @author    Pieter Lelaona
 * @email     <broklyn.gagah@gmail.com>
 * @date      2013.12.01
 */

namespace Mall\Bundle\CoreBundle\Doctrine;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\ClassMetadata;

/**
 * Class DoctrineHelper
 * @package Mall\Bundle\CoreBundle\Doctrine
 */
class DoctrineHelper
{

    /**
     * @param ObjectManager|EntityManager $manager
     * @param $class
     * @return bool
     */
    public static function truncate(ObjectManager $manager, $class)
    {
        /** @var $connection \Doctrine\DBAL\Connection */
        $conn = $manager->getConnection();

        /** @var $cmd ClassMetadata */
        $cmd = $manager->getClassMetadata($class);

        $conn->beginTransaction();
        try {
            if ($conn->getDatabasePlatform()->getName() !== 'sqlite') {
                $conn->query('SET FOREIGN_KEY_CHECKS=0');
                $conn->executeUpdate($connection->getDatabasePlatform()->getTruncateTableSql($cmd->getTableName()));
                $conn->query('SET FOREIGN_KEY_CHECKS=1');
            } else {
                $conn->executeUpdate(
                    $conn->getDatabasePlatform()->getTruncateTableSql($cmd->getTableName())
                );
            }

            $conn->commit();
            return true;
        } catch (\Exception $e) {
            $conn->rollback();
            return false;
        }
    }

}