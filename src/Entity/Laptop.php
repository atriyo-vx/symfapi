<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\LaptopRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Controller\StockCheckController;

/**
 * @ApiResource(itemOperations={
 *     "get",
 *     "put",
 *     "patch",
 *     "delete",
 *     "patch"={
 *         "method"="PATCH",
 *         "path"="/Laptop/{id}/available",         
 * },
 *     })
 * @ORM\Entity(repositoryClass=LaptopRepository::class)
 */

class Laptop
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $brand;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $model;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $year;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $stock;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getYear(): ?string
    {
        return $this->year;
    }

    public function setYear(?string $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getStock(): ?string
    {
        return $this->stock;
    }

    public function setStock(?string $stock): self
    {
        $this->stock = $stock;

        return $this;
    }
}
