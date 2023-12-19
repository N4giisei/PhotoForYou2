<?php

class Menu{

    private $_NomMenu;
    private $_Lien;
    private $_Habilitation;


       // Constructeur avec hydratation
       public function __construct(array $donnees) 
        {
            $this->hydrate($donnees);
        
        }

        // Hydratation
    public function hydrate(array $donnees) {
        foreach ($donnees as $key => $value) {
			$method = 'set'.$key;
			if (method_exists($this, $method))
			{
				$this->$method($value);
			}
			else
			{
				trigger_error('Je trouve pas la méthode !', E_USER_WARNING);
			}
		}
    }




    public function getNomMenu() {
        return $this->_NomMenu;
    }


    public function setNomMenu($nomMenu) {
        $this->_NomMenu = $nomMenu;
    }


    public function getLien() {
        return $this->_Lien;
    }


    public function setLien($lien) {
        $this->_Lien = $lien;
    }


    public function getHabilitation() {
        return $this->_Habilitation;
    }


    public function setHabilitation($habilitation) {
        $this->_Habilitation = $habilitation;
    }


}