<?php
/**
 * Vhaldecode
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 */
class Vhaldecode_CookieLaw_Model_Config_Position
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'v-top', 'label' => 'Top'),
            array('value' => 'v-bottom', 'label' => 'Bottom'),
        );
    }
}