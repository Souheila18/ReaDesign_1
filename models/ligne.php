<?php
class ligne
{
   public $name;
   public $prix;
   public $picture;
   public $preview;
   public $qte;

   public function __construct(
      ?string $name = null, ?float $prix = null, ?string $picture = null, ?string $preview = null,
      ?int $qte = null
   )
   {
      $this->name = $name;
      $this->prix = $prix;
      $this->picture = $picture;
      $this->preview = $preview;
      $this->qte = $qte;
   }
}
?>