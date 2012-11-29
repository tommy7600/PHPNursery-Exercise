<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kbadura
 * Date: 11/26/12
 * Time: 12:51 PM
 * To change this template use File | Settings | File Templates.
 */
class Artykul
{
    private $id;
    private $tytul;
    private $tresc;
    private $autor;
    private $data_dodania;
    private $widocznosc;

    public function setAutor($autor)
    {
        $this->autor = $autor;
        return $this;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setDataDodania($data_dodania)
    {
        $this->data_dodania = $data_dodania;
        return $this;
    }

    public function getDataDodania()
    {
        return ($this->data_dodania);
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setTresc($tresc)
    {
        $this->tresc = $tresc;
        return $this;
    }

    public function getTresc()
    {
        return $this->tresc;
    }

    public function setTytul($tytul)
    {
        $this->tytul = $tytul;
        return $this;
    }

    public function getTytul()
    {
        return $this->tytul;
    }

    public function setWidocznosc($widocznosc)
    {
        $this->widocznosc = $widocznosc;
        return $this;
    }

    public function getWidocznosc()
    {
        return $this->widocznosc;
    }

}
