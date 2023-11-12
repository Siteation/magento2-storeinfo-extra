<?php declare(strict_types=1);

/**
 * @author Siteation (https://siteation.dev/)
 * @copyright Copyright 2021 Siteation (https://siteation.dev/)
 * @license MIT
 */

namespace Siteation\StoreInfoExtra\ViewModel;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class StoreInfoNotice implements ArgumentInterface
{
    protected $scopeConfig;

    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

        /**
     * Get store notification
     *
     * @param string $attribute
     * @return mixed
     */
    public function getStoreInfoNotices(string $attribute)
    {
        $path = sprintf('siteation_storeinfo/notices/%s', $attribute);
        return $this->scopeConfig->getValue($path, ScopeInterface::SCOPE_STORE);
    }

    public function getNotices(): string
    {
        if (!$this->getStoreInfoNotices('enabled')) {
            return '';
        }

        return (string) $this->getStoreInfoNotices('message');
    }
}
