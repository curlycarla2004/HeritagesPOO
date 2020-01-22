<?php

class Animal
{

  protected $nom;
  protected $action;

  /**
   * Constructeur de la Classe.
   *
   * @param $nom string
   * @param $action string
   */
  public function __construct(string $nom, string $action)
  {
    $this->nom = $nom;
    $this->action = $action;
  }

  /**
   * Retourne une chaine au format html qi décrit sommairement l'animal.
   *
   * @return string
   */
  public function queFaisTu(): string{
    $nom = strtolower($this->nom);
    $action = $this->action;
    return "<div>Je suis un <strong class='text-primary'>$nom</strong> et je <strong class='text-primary'>$action</strong>.</div>";
  }

  /**
   * Retourne la définition du mot 'animal'.
   *
   * @return string.
   */
  static public function definition(): string {
    return "Par opposition à végétal, être vivant organisé, généralement capable de se déplacer et n'ayant ni chlorophylle ni paroi cellulaire cellulosique.";
  }

}
