<?php

class Laptop extends Product
{
    private $_cpu;
    private $_ram;
    private $_os;


    function __construct($id, $netPrice, $productMaker, $productName, $quantity, $vatRate, $_cpu, $_os, $_ram)
    {
        parent::__construct($id, $netPrice, $productMaker, $productName, $quantity, $vatRate);
        $this->_cpu = $_cpu;
        $this->_os = $_os;
        $this->_ram = $_ram;
    }

    public function setOs($os)
    {
        $this->_os = $os;
    }

    public function getOs()
    {
        return $this->_os;
    }

    public function setCpu($cpu)
    {
        $this->_cpu = $cpu;
    }

    public function getCpu()
    {
        return $this->_cpu;
    }

    public function setRam($ram)
    {
        $this->_ram = $ram;
    }

    public function getRam()
    {
        return $this->_ram;
    }
}
