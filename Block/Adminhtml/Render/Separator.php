<?php declare(strict_types=1);

/**
 * @author Siteation (https://siteation.dev/)
 * @copyright Copyright 2023 Siteation (https://siteation.dev/)
 * @license MIT
 */

namespace Siteation\StoreInfoExtra\Block\Adminhtml\Render;

use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;

class Separator extends Field
{
    /**
     * Render block: table heading
     *
     * @param AbstractElement $element
     *
     * @return string
     */
    public function render(AbstractElement $element)
    {
        $html = '<tr id="row_' . $element->getHtmlId() . '">';
        $html .= '<td class="label"></td>';
        $html .= '<td class="value">';
        $html .= ' <div style="display: flex; align-items: center;">';
        $html .= '  <hr style="flex: 1; border: 0; border-bottom: 1px dashed #ccc;">';
        $html .= '  <strong style="padding-inline: 1em">' . $element->getData('label') . '</strong>';
        $html .= '  <hr style="flex: 1; border: 0; border-bottom: 1px dashed #ccc;">';
        $html .= ' </div>';
        $html .= '</td>';
        $html .= '<td></td>';
        $html .= '</tr>';

        return $html;
    }
}
