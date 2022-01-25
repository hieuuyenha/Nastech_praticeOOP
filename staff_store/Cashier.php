<?php
// require_once __DIR__. '/Staff.php';
// require_once __DIR__. '/iSalary.php';

namespace staff_store;

class Cashier extends Staff implements iSalary{
    protected int $shift;
    protected int $counter;
    public function __construct(string $maNV,string $tenNV, string $gender,
    string $address, string $email, string $phone, float $salary, int $shift, int $counter)
    {
        parent::__construct( $maNV, $tenNV,  $gender,
         $address,  $email,  $phone,$salary);
         $this->shift=$shift;
         $this->counter= $counter;
    }
    public function sumSalary()
    {
        if($this->shift == 0){
            return $this->salary*1;
        }else{
            return $this->salary*1.3;
        }
    }

    public function getSalary()
    {
        
    }

    

}