<?php
/**
 * Ffuenf_TransactionalEmails extension.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category   Ffuenf
 *
 * @author     Achim Rosenhagen <a.rosenhagen@ffuenf.de>
 * @copyright  Copyright (c) 2015 ffuenf (http://www.ffuenf.de)
 * @license    http://opensource.org/licenses/mit-license.php MIT License
 */

class Ffuenf_TransactionalEmails_Test_Model_Order extends EcomDev_PHPUnit_Test_Case_Config
{

    /**
     * Tests whether extension model aliases are returning the correct class names
     *
     * @test
     */
    public function testModelAlias()
    {
        $this->assertModelAlias(
            'ffuenf_transactionalemails/order',
            'Ffuenf_TransactionalEmails_Model_Order'
        );
        $this->assertModelAlias(
            'ffuenf_transactionalemails/order_invoice',
            'Ffuenf_TransactionalEmails_Model_Order_Invoice'
        );
        $this->assertModelAlias(
            'ffuenf_transactionalemails/order_shipment',
            'Ffuenf_TransactionalEmails_Model_Order_Shipment'
        );
        $this->assertModelAlias(
            'ffuenf_transactionalemails/order_creditmemo',
            'Ffuenf_TransactionalEmails_Model_Order_Creditmemo'
        );
    }
}
