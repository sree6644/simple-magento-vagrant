<?php


require_once 'app/Mage.php';
umask(0);

ini_set('display_errors', 1);
error_reporting(E_ALL);
$_SERVER['MAGE_IS_DEVELOPER_MODE'] = true;

Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID);
$userModel = Mage::getModel('admin/user');
$userModel->setUserId(0);


/**
     * Get the resource model
     */
    $resource = Mage::getSingleton('core/resource');
     
    /**
     * Retrieve the read connection
     */
    $readConnection = $resource->getConnection('core_read');
 
    /**
     * Retrieve our table name
     */
    $table = $resource->getTableName('catalog/product');
     
    /**
     * Set the product ID
     */
    $productId = 44;
     
    $query = 'SELECT * FROM ' . $table ;
     
    /**
     * Execute the query and store the result in $sku
     */
    $sku = $readConnection->fetchAll($query);
     
    /**
     * Print the SKU to the screen
     */
    echo 'SKU: ' . $sku . '<br/>';

    print_r($sku);
?>
