<?php
    class Role {
        private $id;
        private $nazwa;
        private $opis;
        
        public function __construct($id, $nazwa, $opis)
        {
            $this->id = $id;
            $this->nazwa = $nazwa;
            $this->opis = $opis;
        }
        
        public function getId()
        {
            return $this->id;
        }

        public function getNazwa()
        {
            return $this->nazwa;
        }

        public function getOpis()
        {
            return $this->opis;
        }

        public function setId($id)
        {
            $this->id = $id;
        }

        public function setNazwa($nazwa)
        {
            $this->nazwa = $nazwa;
        }

        public function setOpis($opis)
        {
            $this->opis = $opis;
        }



    }
?>
