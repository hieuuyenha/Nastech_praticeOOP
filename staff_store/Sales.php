<?php
// require_once __DIR__. '/Staff.php';
// require_once __DIR__. '/iSalary.php';
namespace staff_store;

class Sales extends Staff implements iSalary{
    // nhân viên bán hàng và nhân viên tiếp thị
    protected int $classify;
    protected float $target;

    public function __construct(string $maNV,string $tenNV, string $gender,
    string $address, string $email, string $phone,string $salary,int $classify, float $target)
    {
        parent::__construct( $maNV, $tenNV,  $gender,
         $address,  $email,  $phone,$salary);
         $this->classify = $classify;
         $this->target = $target;
        
    }
    public function setClassify($pos=0){
        if($this->classify != $pos){
            print("nhân viên bán hàng");
        }else{
            print("nhân viên tiếp thị");

        }
    }

    public function isTarget($qualifi=10000){
        if($this->target < $qualifi){
            return 0;
        }else{
            return 1;
        }
    }
    public function sumSalary()
    {
        if($this->isTarget()== 0){
            print($this->salary*1);
        }
        else{
            print($this->salary *2);
        }
        
    }

    public function getSalary()
    {
        
    }


}