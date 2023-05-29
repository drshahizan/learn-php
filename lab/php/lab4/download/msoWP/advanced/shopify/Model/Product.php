<?php
use \Phppot\DataSource;

class Product {
    
    private $ds;
    
    function __construct() {
        require_once __DIR__ . './../lib/DataSource.php';
        $this->ds = new DataSource();
    }
    
    function getAllProduct() 
    {
        $query = "SELECT * FROM tblproduct ORDER BY id ASC";
        $result = $this->ds->select($query);
        return $result;
    }
}