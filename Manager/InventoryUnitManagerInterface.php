<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Inventory\Manager;

use Xidea\Component\Inventory\Model\InventoryUnitInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface InventoryUnitManagerInterface
{
    /**
     * Saves a unit.
     * 
     * @param InventoryUnitInterface $unit
     */
    function save(InventoryUnitInterface $unit);

    /**
     * Updates a unit.
     * 
     * @param InventoryUnitInterface $unit
     */
    function update(InventoryUnitInterface $unit);

    /**
     * Deletes a unit.
     * 
     * @param InventoryUnitInterface $unit
     */
    function delete(InventoryUnitInterface $unit);
}
