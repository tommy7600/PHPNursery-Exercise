<?php
    class User {
        private $id;
        private $role_id;
        private $imie;
        private $nazwisko;
        private $pesel;
        private $adres_zamieszkania;
        private $kod_pocztowy;
        private $telefon;
        private $email;
        private $data_dodania;

        public function __construct($id, $role_id, $imie, $nazwisko, $pesel, $adres_zamieszkania, $kod_pocztowy, $telefon, $email, $data_dodania)
        {
            $this->id = $id;
            $this->role_id = $role_id;
            $this->imie = $imie;
            $this->nazwisko = $nazwisko;
            $this->pesel = $pesel;
            $this->adres_zamieszkania = $adres_zamieszkania;
            $this->kod_pocztowy = $kod_pocztowy;
            $this->telefon = $telefon;
            $this->email = $email;
            $this->data_dodania = $data_dodania;
        }

        public function getId()
        {
            return $this->id;
        }

        public function getRole_id()
        {
            return $this->role_id;
        }

        public function getImie()
        {
            return $this->imie;
        }

        public function getNazwisko()
        {
            return $this->nazwisko;
        }

        public function getPesel()
        {
            return $this->pesel;
        }

        public function getAdres_zamieszkania()
        {
            return $this->adres_zamieszkania;
        }

        public function getKod_pocztowy()
        {
            return $this->kod_pocztowy;
        }

        public function getTelefon()
        {
            return $this->telefon;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function getData_dodania()
        {
            return $this->data_dodania;
        }

        public function setId($id)
        {
            $this->id = $id;
        }

        public function setRole_id($role_id)
        {
            $this->role_id = $role_id;
        }

        public function setImie($imie)
        {
            $this->imie = $imie;
        }

        public function setNazwisko($nazwisko)
        {
            $this->nazwisko = $nazwisko;
        }

        public function setPesel($pesel)
        {
            $this->pesel = $pesel;
        }

        public function setAdres_zamieszkania($adres_zamieszkania)
        {
            $this->adres_zamieszkania = $adres_zamieszkania;
        }

        public function setKod_pocztowy($kod_pocztowy)
        {
            $this->kod_pocztowy = $kod_pocztowy;
        }

        public function setTelefon($telefon)
        {
            $this->telefon = $telefon;
        }

        public function setEmail($email)
        {
            $this->email = $email;
        }

        public function setData_dodania($data_dodania)
        {
            $this->data_dodania = $data_dodania;
        }
		
		public function toArray()
		{
			return Array("role_id" => $this->role_id, 
							"imie" => $this->imie,
							"nazwisko" => $this->nazwisko,
							"PESEL" => $this->pesel,
							"adres_zamieszkania" => $this->adres_zamieszkania,
							"kod_pocztowy" => $this->kod_pocztowy,
							"telefon" => $this->telefon,
							"email" => $this->email,
							"data_dodania" => $this->data_dodania);
		}
    }
?>