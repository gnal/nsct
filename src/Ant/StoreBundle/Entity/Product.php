<?php

namespace Ant\StoreBundle\Entity;

use Msi\StoreBundle\Model\Product as BaseProduct;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Product extends BaseProduct
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $lifespan;

    public function getLifespan()
    {
        return $this->lifespan;
    }

    public function setLifespan($lifespan)
    {
        $this->lifespan = $lifespan;

        return $this;
    }
}
