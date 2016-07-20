<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Inventory\Model;

use Xidea\Component\Inventory\Model\ProductInterface;

/**
 * @product Artur Pszczółka <a.pszczolka@xidea.pl>
 */
abstract class AbstractInventoryUnit implements InventoryUnitInterface
{
    /*
     * @var int
     */
    protected $id;
    
    /*
     * @var ProductInterface
     */
    protected $product;
    
    /*
     * @var int
     */
    protected $qty;
    
    /*
     * @var datetime
     */
    protected $createdAt;
    
    /*
     * @var datetime
     */
    protected $updatedAt;
    
    /**
     * @inheritDoc
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @inheritDoc
     */
    public function setProduct(ProductInterface $product)
    {
        $this->product = $product;
    }

    /**
     * @inheritDoc
     */
    public function getProduct()
    {
        return $this->product;
    }
    
    /**
     * @inheritDoc
     */
    public function setQty($qty)
    {
        $this->qty = $qty;
    }
    
    /**
     * @inheritDoc
     */
    public function getQty()
    {
        return $this->qty;
    }
    
    /**
     * @inheritDoc
     */
    public function setCreatedAt(\DateTime $createdAt = null)
    {
        $this->createdAt = $createdAt;
    }
    
    /**
     * @inheritDoc
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    
    /**
     * @inheritDoc
     */
    public function setUpdatedAt(\DateTime $updatedAt = null)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @inheritDoc
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
