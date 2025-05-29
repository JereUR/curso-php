<?php
  declare(strict_types=1);

  class SuperHero{
    public function __construct(
      public string $name, 
      public array $powers, 
      public string $planet
    ) {
    }

    public function attack()
    {
      return "$this->name ataca con sus poderes!!";
    }

    public function show_all()
    {
      return get_object_vars($this);
    }

    public function description()
    {
      $powers = implode(", ", $this->powers);

      return "$this->name es un superheroe que viene de $this->planet y tiene los siguientes poderes: $powers";
    }

    public static function random()
    {
      $names = ["Thor", "Spiderman", "Wolverine", "Hulk"];
      $powers = [["Superfuerza", "Volar", "Rayos láser"],["Superfuerza", "Super agilidad", "Telarañas"], ["Regeneración", "Garras de adamantium"], ["Superfuerza", "Volar", "Rayos laser"]];
      $planets = ["Asgard", "Tierra"];

      $name = $names[array_rand($names)];
      $power = $powers[array_rand($powers)];
      $planet = $planets[array_rand($planets)];

      echo "El superhéroe elegido es $name, que viene de $planet y tiene los siguientes poderes: " . implode(", ", $power);
    }
  }

  $hero=new SuperHero("Iron Man", ["Inteligencia", "Tecnología", "Valor"], "Tierra");
  echo $hero->description();
  var_dump($hero->show_all());

  SuperHero::random()
?>