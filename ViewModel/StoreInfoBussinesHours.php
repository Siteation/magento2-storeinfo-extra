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

class StoreInfoBussinesHours implements ArgumentInterface
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
    public function getStoreInfoBussinesHours(string $attribute)
    {
        $path = sprintf('siteation_storeinfo/bussines_hours/%s', $attribute);
        return $this->scopeConfig->getValue($path, ScopeInterface::SCOPE_STORE);
    }

    public function enabled(): bool
    {
        return (bool) $this->getStoreInfoBussinesHours('enabled');
    }

    public function getAll(): array
    {
        $array = [];
        $dailyHours = $this->getStoreInfoBussinesHours('daily_hours');

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

    public function getDayOfWeek()
    {
        $all = $this->getAll();
        $dayOfWeek = array_column($all, 'day_of_week');
        return $dayOfWeek;
    }

    public function getOpeningHours()
    {
        $all = $this->getAll();
        $openingHours = array_column($all, 'opening_hours');
        return $openingHours;
    }

    public function getClosingHours()
    {
        $all = $this->getAll();
        $closingHours = array_column($all, 'closing_hours');
        return $closingHours;
    }
}
