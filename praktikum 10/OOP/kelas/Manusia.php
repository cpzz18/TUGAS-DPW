<?php
class Manusia
{
    protected $name;
    protected $nik;
    protected $age;

    //nama
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getNama()
    {
        return $this->name;
    }


    //nik
    public function setNik($nik)
    {
        $this->nik = $nik;
    }

    public function getNik()
    {
        return $this->nik;
    }

    //umur
    public function setAge($age)
    {
        $this->age = $age;
    }
    
    public function getAge()
    {
        return $this->age;
    }

}
