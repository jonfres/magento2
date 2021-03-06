<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Inventory\Controller\Adminhtml\Source;

use Magento\Backend\App\Action;
use Magento\Backend\Model\View\Result\Page;
use Magento\Framework\Controller\ResultFactory;

/**
 * Class Index
 */
class Index extends Action
{
    /**
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Magento_Inventory::source';

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        /** @var Page $resultPage */
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->setActiveMenu('Magento_Inventory::source')
            ->addBreadcrumb(__('Sources'), __('List'));
        $resultPage->getConfig()->getTitle()->prepend(__('Manage Sources'));
        return $resultPage;
    }
}
