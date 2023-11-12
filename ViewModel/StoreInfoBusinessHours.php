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

class StoreInfoBusinessHours implements ArgumentInterface
{
    protected $scopeConfig;

    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * Get store information
     *
     * @param string $attribute
     * @return mixed
     */
    public function getStoreInfoBusinessHours(string $attribute)
    {
        $path = sprintf('siteation_storeinfo/bussines_hours/%s', $attribute);
        return $this->scopeConfig->getValue($path, ScopeInterface::SCOPE_STORE);
    }

    public function enabled(): bool
    {
        return (bool) $this->getStoreInfoBusinessHours('enabled');
    }

    public function getBusinessHours(): array
    {
        $array = [];
        $dailyHours = $this->getStoreInfoBusinessHours('daily_hours');

        if (empty($dailyHours)) {
            return $array;
        }

        if (is_string($dailyHours)) {
            $array = json_decode($dailyHours, true);
        } else {
            $array = $dailyHours;
        }

        return (array) $array;
    }
}
