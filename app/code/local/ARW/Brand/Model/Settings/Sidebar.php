<?php

/* * ****************************************************
 * Package   : Brand
 * Author    : ArexWorks
 * Copyright : (c) 2015
 * ***************************************************** */
?>
<?php

class ARW_Brand_Model_Settings_Sidebar
{

    public function toOptionArray()
    {
        return array(
            array('value' => 0, 'label' => Mage::helper('adminhtml')->__('No')),
            array('value' => 1, 'label' => Mage::helper('adminhtml')->__('Left Sidebar')),
            array('value' => 2, 'label' => Mage::helper('adminhtml')->__('Right Sidebar'))
        );
    }

}
