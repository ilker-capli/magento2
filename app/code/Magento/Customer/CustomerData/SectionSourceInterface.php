<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Customer\CustomerData;

/**
 * Section source interface
 */
interface SectionSourceInterface
{
    /**
     * Get data
     *
     * @return array
     */
    public function getSectionData();
}
