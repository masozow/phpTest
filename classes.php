<?php

declare(strict_types=1);

class SuperHero
{
    //promoted propertis -> PHP 8 (esto de ponerle public a las variables del constructor)
    //readonly para que no se pueda modificar
    public function __construct(
        readonly public string $name,
        public array $powers,
        public string $planet
    ) {
    }



    public function attack()
    {
    }
    public function description()
    {
        $powers = implode(", ", $this->powers);
        return "$this->name es un superhéroe que viene de $this->planet y tiene los siguientes poderes: $powers\n";
    }
    //Devuelve todas las variables de la clase, en un array
    public function show_all()
    {
        return get_object_vars($this);
    }
    //Método estático
    public static function random()
    {
        $names = ["Thor", "Spiderman", "Wolverine", "Ironman", "Hulk"];
        $powers = [
            ["Superfuerza", "Volar", "Rayos láser"],
            ["Superfuerza", "Super agilidad", "Telarañas"],
            ["Regeneración", "Superfuerza", "Garras de adamantium"],
            ["Superfuerza", "Volar", "Rayos láser"],
            ["Superfuerza", "Super agilidad", "Cambio de tamaño"]
        ];
        $planets = ["Asgard", "HulkWorld", "Krypton", "Tierra"];
        $name = $names[array_rand($names)];
        $power = $powers[array_rand($powers)];
        $planet = $planets[array_rand($planets)];
        // echo "El superhéroe elegido es $name, que viene de $planet y tiene los siguientes poderes: " . implode(", ", $power);
        //Llamando al constructor dentro de un métoodo estático:
        return new self($name, $power, $planet);
    }
}

// $hero = new SuperHero("Superman", ["Superfuerza", "super calzones rojos", "rayos láser"], "Krypton");

//Llamando a método público
// echo $hero->description();

//Lamando a método estático, usando el echo dentro de la definición del mismo
// SuperHero::random();

//Llamando a método estático, cuando se crea una nueva instancia del objeto dentro de este método:
$hero = SuperHero::random();
echo $hero->description();
