<?php
/**
 * Valdecode
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category    Valdecode
 * @package     Valdecode_CookieLaw
 * @copyright   Copyright (c) 2014 Valdecode
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Valdecode_CookieLaw_Model_Config_Box_Position
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'v-top-left', 'label' => 'Top left'),
            array('value' => 'v-top-right', 'label' => 'Top right'),
            array('value' => 'v-bottom-left', 'label' => 'Bottom left'),
            array('value' => 'v-bottom-right', 'label' => 'Bottom right'),
        );
    }
}
