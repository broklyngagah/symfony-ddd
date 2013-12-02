<?php

namespace Mall\Bundle\ProductBundle\Entity;

use Mall\Bundle\CoreBundle\ORM\EntityInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Product
 * @package Mall\Bundle\ProductBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="product")
 */
class Product implements EntityInterface
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @var int $id
     */
    private $id;

    /**
     * @ORM\Column(name="product_name", type="string", length=200)
     *
     * @var string $productName
     */
    private $productName;

    /**
     * @ORM\Column(name="created_at", type="datetime")
     *
     * @var \Datetime $createdAt
     */
    private $createdAt;

    /**
     * @ORM\Column(name="updated_at", type="datetime")
     *
     * @var \Datetime $updatedAt
     */
    private $updatedAt;

    public function __construct($productName='')
    {
        $this->setProductName($productName);
        $this->setCreatedAt(new \DateTime());
    }



    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param mixed $productName
     * @return void|mixed
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     * @return void|mixed
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param mixed $updatedAt
     * @return void|mixed
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}
