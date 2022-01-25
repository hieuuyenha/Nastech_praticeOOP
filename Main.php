<?php

// require __DIR__ . '/staff_store/Cashier.php';
// require __DIR__ . '/staff_store/Sales.php';
// require __DIR__ . '/staff_store/Warehouse.php';

require __DIR__ . '/vendor/autoload.php';

use staff_store\Cashier;
use staff_store\Sales;
use staff_store\Warehouse;


$cash_1= new Cashier('011','Uyen','Male','nnn','nn','013212',10000,0,3);
var_dump($cash_1->getInfo());

$sale_1= new Sales('002','Uyen khac',"male","none","none","434235",10000,1,1);
var_dump($sale_1->getInfo());
print($sale_1->sumSalary());

$sale_1->setClassify();
print("\n");
$sale_1->sumSalary();

$warehouse_1 = new Warehouse('003','uyen lam kho',"female","none","none","none",10000,"none");
var_dump($warehouse_1->getInfo());




