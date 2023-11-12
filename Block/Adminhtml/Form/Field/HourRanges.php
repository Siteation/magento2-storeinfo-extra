<?php declare(strict_types=1);

/**
 * @author Siteation (https://siteation.dev/)
 * @copyright Copyright 2021 Siteation (https://siteation.dev/)
 * @license MIT
 */

namespace Siteation\StoreInfoExtra\Block\Adminhtml\Form\Field;

use Magento\Config\Block\System\Config\Form\Field\FieldArray\AbstractFieldArray;

class HourRanges extends AbstractFieldArray
{
    protected function _prepareToRender()
    {
        $this->addColumn('day_of_week', [
            'label' => __('Day of Week')
        ]);
        $this->addColumn('opening_hours', [
            'label' => __('Opening Hours'),
            'class' => 'required-entry'
        ]);
        $this->addColumn('closing_hours', [
            'label' => __('Closing Hours'),
            'class' => 'required-entry'
        ]);

        $this->_addAfter = false;
        $this->_addButtonLabel = __('Add');
    }
}
