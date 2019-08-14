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
 * @copyright   Copyright (c) 2013 Valdecode
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Valdecode_CookieLaw_Model_Config_Behaviour
{
    public function toOptionArray()
    {
        return array(
            array('value' => 1, 'label' => 'Never show again'),
            array('value' => 0, 'label' => 'Hide for the rest of the session')
        );
    }
}