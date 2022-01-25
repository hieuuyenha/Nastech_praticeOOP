<?php
namespace staff_store;
abstract class Staff{
    protected string $maNV;
    protected string $tenNV;
    protected string $gender;
    protected string $address;
    protected string $email;
    protected string $phone;
    protected float $salary;
    
    public function __construct(string $maNV,string $tenNV, string $gender,
     string $address, string $email, string $phone, float $salary)
    {
        $this->maNV = $maNV;
        $this->tenNV= $tenNV;
        $this->gender= $gender;
        $this->address= $address;
        $this->email= $email;
        $this->phone = $phone;
        $this->salary = $salary;
    }
    public function getInfo(){
        return [
            'maNV' => $this->maNV,
            'ten' => $this->tenNV,
            'gender'=> $this->gender,
            'adddess'=> $this->address,
            'email' => $this->email,
            'phone'=>$this->phone,
            'salary' =>$this->salary

        ];
    }
    

}