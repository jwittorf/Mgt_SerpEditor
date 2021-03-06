<?php
/**
 * MGT-Commerce GmbH
 * http://www.mgt-commerce.com
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to info@mgt-commerce.com so we can send you a copy immediately.
 *
 * @category    Mgt
 * @package     Mgt_SerpEditor
 * @author      Stefan Wieczorek <stefan.wieczorek@mgt-commerce.com>
 * @copyright   Copyright (c) 2012 (http://www.mgt-commerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mgt_SerpEditor_Block_Adminhtml_Form_Renderer_Attribute_Meta_Title extends Mage_Adminhtml_Block_Catalog_Form_Renderer_Fieldset_Element
{
    public function getElementHtml()
    {
        $element = $this->getElement();
        $helper = Mage::helper('mgt_serp_editor');
        
        $value = $element->getEscapedValue();
        
        $html = '<div class="mgt-serp-editor-meta-title">';
          $html .= '<textarea onkeyup="mgtSerpEditorTitle();" id="mgt-serp-editor-meta-title" style="height:50px;border:1px solid #8080E6" id="'.$element->getHtmlId().'" name="'.$element->getName().'">';
          $html .= $value;
          $html .= "</textarea>";
          $html .= '<span class="mgt-serp-editor-tip"><strong>'.$helper->__('Tip').':</strong> '.$helper->__('Google limits SERP titles by pixel width, not by character count').'</span>';
          $html .= '<span class="mgt-serp-editor-count mgt-serp-editor-count-title" id="mgt-serp-editor-meta-title-count">'.strlen($value).'</span>';
        $html .= '</div>';
        return $html;
    }
}