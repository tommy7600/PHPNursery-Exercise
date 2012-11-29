<?php

class users
{
    private $id;
    private $rola_id;
    private $imie;
    private $nazwisko;
    private $pesel;
    private $adres_zamieszkania;
    private $kod_pocztowy;
    private $telefon;
    private $email;
    private $data_dodania;
    
    public function ustawID($val)
    {
        $this->id=$val;
        return $this;
    }
    public function ustawRolaID($val)
    {
        $this->rola_id=$val;
        return $this;
    }
     public function ustawImie($val)
    {
        $this->imie=$val;
        return $this;
    }
     public function ustawNazwisko($val)
    {
        $this->nazwisko=$val;
        return $this;
    }
     public function ustawPesel($val)
    {
        $this->pesel=$val;
        return $this;
    }
     public function ustawAdres($val)
    {
        $this->adres_zamieszkania=$val;
        return $this;
    }
     public function ustawKod($val)
    {
        $this->kod_pocztowy=$val;
        return $this;
    }
     public function ustawTelefon($val)
    {
        $this->telefon=$val;
        return $this;
    }
     public function ustawEmail($val)
    {
        $this->email=$val;
        return $this;
    }
     public function ustawDataDodania($val)
    {
        $this->data_dodania=$val;
        return $this;
    }
    
    public function pobierzID()
    {
       return $this->id;
    }
    public function pobierzRolaID()
    {        
        return $this->rola_id;
    }
     public function pobierzImie()
    {        
        return $this->imie;
    }
     public function pobierzNazwisko()
    {
        return $this->nazwisko;
    }
     public function pobierzPesel()
    {
        return $this->pesel;
    }
     public function pobierzAdres()
    {
        return $this->adres_zamieszkania;
    }
     public function pobierzKod()
    {        
        return $this->kod_pocztowy;
    }
     public function pobierzTelefon()
    {        
        return $this->telefon;
    }
     public function pobierzEmail()
    {        
        return $this->email;
    }
     public function pobierzDataDodania()
    {        
        return $this->data_dodania;
    }
}

?>
