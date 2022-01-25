<?php

namespace staff_store;

 class Warehouse extends Staff {
    protected string $addWarehouse;
    public function __construct(string $maNV,string $tenNV, string $gender,
    string $address, string $email, string $phone, float $salary, string $addWarehouse)
    {
        parent::__construct( $maNV, $tenNV,  $gender,
         $address,  $email,  $phone,$salary);
         $this->addWarehouse = $addWarehouse;
    }




}