<?php

class roles {
    private $id;
    private $nazwa;
    private $opis;
    
     public function ustawID($val)
    {
        $this->id=$val;
        return $this;
    }
    public function ustawNazwa($val)
    {
        $this->nazwa=$val;
        return $this;
    }
     public function ustawOpis($val)
    {
        $this->opis=$val;
        return $this;
    }    
     public function pobierzId()
    {        
        return $this->id;
    }
     public function pobierzNazwe()
    {        
        return $this->nazwa;
    }
     public function pobierzOpis()
    {        
        return $this->opis;
    }
}

?>
