<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Inventory\Model;

use Magento\Framework\Exception\StateException;
use Magento\InventoryApi\Api\Data\SourceInterface;

/**
 * SourceCarrierLinkManagementInterface
 *
 * It is extension point for carrier links storage replacing
 */
interface SourceCarrierLinkManagementInterface
{
    /**
     * Save carrier links by source
     *
     * Get carrier links from source object and save its. If carrier links are equal to null do nothing
     *
     * @param SourceInterface $source
     * @return void
     * @throws StateException
     */
    public function saveCarrierLinksBySource(SourceInterface $source);

    /**
     * Load carrier links by source and set its to source object
     *
     * @param SourceInterface $source
     * @return void
     */
    public function loadCarrierLinksBySource(SourceInterface $source);
}
