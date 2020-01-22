<?php

require_once 'class/Animal.php';

class Oiseau extends Animal
{
  const EMOJI = '🐦';

  protected $nom;
  protected $action;
  protected $vole;

  public function __construct(string $nom, string $action, bool $vole)
  {
    parent::__construct($nom, $action);
    $this->vole = $vole;
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
    if($this->vole){
      $output .= '<div>En plus <strong class="text-success">je vole</strong>!</div>';
    }
    else{
      $output .= '<div>Malheureusement, je suis <strong class="text-danger">incapable de voler</strong>...</div>';
    }
    return $output;
  }
}
