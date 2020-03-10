<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\Annotation\MaxDepth;


/**
 * @ApiResource(
 *     normalizationContext={"groups"={"read"}},
 *     denormalizationContext={"groups"={"write"}}
 * )
 * @ORM\Entity(repositoryClass="App\Repository\OrganisationRepository")
 */
class Grafkaart
{
    /**
     * @var UuidInterface The UUID identifier of this resource
     * @example e2984465-190a-4562-829e-a8cca81aa35d
     *
     * @Groups({"read"})
     * @ORM\Id
     * @ORM\Column(type="uuid", unique=true)
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="Ramsey\Uuid\Doctrine\UuidGenerator")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups({"read","write"})
     * @Assert\NotBlank
     */
    private $grafcode;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups({"read","write"})
     * @Assert\NotBlank
     * @Assert\Length(
     *        max=50, min=5
     * )
     */
    private $kelder;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @Groups({"read","write"})
     */
    private $xCoordinaat;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @Groups({"read","write"})
     */
    private $yCoordinaat;

    public function getId(): ?Uuid
    {
        return $this->id;
    }

    public function getGrafcode(): ?string
    {
        return $this->Grafcode;
    }

    public function setGrafcode(?string $Grafcode): self
    {
        $this->Grafcode = $Grafcode;

        return $this;
    }

    public function getKelder(): ?string
    {
        return $this->Kelder;
    }

    public function setKelder(?string $Kelder): self
    {
        $this->Kelder = $Kelder;

        return $this;
    }

    public function getXcoordinaat(): ?float
    {
        return $this->Xcoordinaat;
    }

    public function setXcoordinaat(?float $Xcoordinaat): self
    {
        $this->Xcoordinaat = $Xcoordinaat;

        return $this;
    }

    public function getYcoordinaat(): ?float
    {
        return $this->Ycoordinaat;
    }

    public function setYcoordinaat(?float $Ycoordinaat): self
    {
        $this->Ycoordinaat = $Ycoordinaat;

        return $this;
    }
}
