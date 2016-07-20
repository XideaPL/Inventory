<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Inventory\Model;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface InventoryUnitInterface
{
    /**
     * Returns the id.
     * 
     * @return string The unit id
     */
    public function getId();
    
    /**
     * Sets the sku.
     *
     * @param string $sku
     */
    public function setSku($sku);
    
    /**
     * Returns the sku.
     *
     * @return string
     */
    public function getSku();
    
    /**
     * Sets the qty.
     *
     * @param string $qty
     */
    public function setQty($qty);
    
    /**
     * Returns the qty.
     *
     * @return string
     */
    public function getQty();

    /**
     * @param \Datetime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt = null);

    /**
     * @return \Datetime
     */
    public function getCreatedAt();

    /**
     * @param \Datetime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt = null);

    /**
     * @return \Datetime|null
     */
    public function getUpdatedAt();
}
