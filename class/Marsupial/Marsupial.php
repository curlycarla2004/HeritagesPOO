<?php

require_once 'class/Animal.php';

class Marsupial extends Animal
{
    const EMOJI = '🐨';
    protected $nom;
    protected $action;
    protected $manger;

    public function __construct(string $nom, string $action, bool $manger)
    {
        parent::__construct($nom, $action);
        $this->vole = $manger;
    }
    
    public function queFaisTu(): string
    {
      //On récupère la constante de classe.
      //self equivalent de $this for constants
      $emoji = self::EMOJI;
      $output = "<div>$emoji</div>";
      // on utilise le retour de la méthode queFaisTu() issue de la classe parent.
      $output .= parent::queFaisTu();
  
      //Puis on ajoute du contenu spécifique aux oiseaux.
      if($this->manger){
        $output .= '<div>En plus <strong class="text-success">j\'adore manger eucalyptus</strong>!</div>';
      }
      else{
        $output .= '<div>Malheureusement, je suis <strong class="text-danger">incapable de manger Snickers</strong>...</div>';
      }
      return $output;
    }
}