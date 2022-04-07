<?php
namespace App\Entity;

use Core\Entity\DefaultEntity;

class TableLibre extends DefaultEntity {

    private readonly int $id;

    private int $nombre_de_place;

    private bool $disponible;


    public function getId()
    {
        return $this->id;
    }

    public function getNombreDePlace()
    {
        return $this->nombre_de_place;
    }

    public function setNombreDePlace(string $nombre_de_place): self
    {
        $this->title = $nombre_de_place;

        return $this;
    }

    public function getDisponible()
    {
        return $this->disponible;
    }

    public function setDisponible(string $disponible): self
    {
        $this->title = $disponible;

        return $this;
    }

    public function JsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "nombre_de_place" => $this->nombre_de_place,
            "disponible" => $this->disponible,
        ];
    }
}