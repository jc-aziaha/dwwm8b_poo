<?php

    // Variables scalaires
    // $jour = "Jeudi";
    // $c    = 'a';
    // $chiffre = 3;
    // $nombre  = 33;
    // $nombre_decimal = 33.33;
    // $test = true;


    // Variables composés 
    // $tab = array("Mario", "Luigi", "Bowser", "Pink");
    // $tab = [
    //     0 => "Mario", 
    //     1 => "Luigi", 
    //     2 => "Bowser", 
    //     3 => "Pink",
    //     4 => "Yoshi",
    // ];


    // Les boucles
    // foreach ($tab as $key => $value) 
    // {
    //     echo "A la clé $key, nous avons comme valeur : $value \n";
    // }

    // -------------------------------------------

    // Les objects
    // class Robot
    // {
    //     // Propriétés encapsulées obligatoirement
    //     private $marque = "Google";

    //     // Méthodes
    //     public function faireMenage()
    //     {

    //     }

    //     // Accesseurs ou "getters"
    //     public function getMarque()
    //     {
    //         return $this->marque;
    //     }

    //     // Mutateurs ou "setters"
    //     public function setMarque($nouvelle_marque)
    //     {
    //         $this->marque = $nouvelle_marque;
    //     }
    // }

    // $robot0 = new Robot;
    // // echo $robot0->getMarque() . "\n";
    // $robot0->setMarque("Alexa");
    // echo $robot0->getMarque() . "\n";
    
    
    // $robot1 = new Robot;
    // echo $robot1->getMarque() . "\n";


    // -------------------------------------------

    interface TelephoneInterface
    {
        public function appeler();

        public function envoyerMessages();
    }

    abstract class Telephone implements TelephoneInterface
    {
        private $marque;
        private $couleur;

        // abstract function faireHello();

        public function appeler()
        {
            
        }

        public function envoyerMessages()
        {

        }

        public function getMarque()
        {
            return $this->marque;
        }

        public function setMarque($marque)
        {
            $this->marque = $marque;
        }

        public function getCouleur()
        {
            return $this->couleur;
        }

        public function setCouleur($couleur)
        {
            $this->couleur = $couleur;
        }
    }


    class Iphone extends Telephone
    {

        public function prendrePhotos()
        {

        }


        public function appeler()
        {
            
        }

        public function envoyerMessages()
        {

        }

        public function getMarque()
        {
            return $this->marque;
        }

        public function setMarque($marque)
        {
            $this->marque = $marque;
        }

        public function getCouleur()
        {
            return $this->couleur;
        }

        public function setCouleur($couleur)
        {
            $this->couleur = $couleur;
        }
    }

    class Samsung extends Telephone
    {

        public function prendreVideo()
        {
            
        }

        public function appeler()
        {
            
        }

        public function envoyerMessages()
        {

        }

        public function getMarque()
        {
            return $this->marque;
        }

        public function setMarque($marque)
        {
            $this->marque = $marque;
        }

        public function getCouleur()
        {
            return $this->couleur;
        }

        public function setCouleur($couleur)
        {
            $this->couleur = $couleur;
        }
    }

    class Huawei extends Telephone
    {
        public function appeler()
        {
            
        }

        public function envoyerMessages()
        {

        }

        public function getMarque()
        {
            return $this->marque;
        }

        public function setMarque($marque)
        {
            $this->marque = $marque;
        }

        public function getCouleur()
        {
            return $this->couleur;
        }

        public function setCouleur($couleur)
        {
            $this->couleur = $couleur;
        }
    }

    


