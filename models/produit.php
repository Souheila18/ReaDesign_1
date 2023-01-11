<?php
class produit
{
   public $name;
   public $categorie;
   public $prix;
   public $url;
   public $preview;
   public $text;


   public function __construct(
      ?string $name = null, ?string $categorie = null, ?int $prix = null, ?string $url = null,
      ?string $preview = null, ?string $text = null
   )
   {
      $this->name = $name;
      $this->categorie = $categorie;
      $this->prix = $prix;
      $this->url = $url;
      $this->preview = $preview;
      $this->text = $text;

   }
}

?>