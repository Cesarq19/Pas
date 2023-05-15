<?php

namespace App\Entity;

use DateTime;
use App\Entity\Tipo;
use DateTimeInterface;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Poliza
 *
 * @ORM\Table(name="poliza", indexes={@ORM\Index(name="IDX_78113458F495420C", columns={"tipopoliza"})})
 * @ORM\Entity(repositoryClass="App\Repository\PolizaRepository")
 */
class Poliza
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="poliza_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="numeropoliza", type="string", length=255, nullable=false)
     */
    private $numeropoliza;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="fechainicio", type="date", nullable=false)
     */
    private $fechainicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechafin", type="date", nullable=false)
     */
    private $fechafin;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=1, nullable=false)
     */
    private $estado;

    /**
     * @var Tipo|null
     *
     * @ORM\ManyToOne(targetEntity="Tipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipopoliza", referencedColumnName="id")
     * })
     */
    private $tipopoliza;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeropoliza(): ?string
    {
        return $this->numeropoliza;
    }

    public function setNumeropoliza(string $numeropoliza): self
    {
        $this->numeropoliza = $numeropoliza;

        return $this;
    }

    public function getFechainicio(): ?DateTimeInterface
    {
        return $this->fechainicio;
    }

    public function setFechainicio(\DateTimeInterface $fechainicio): self
    {
        $this->fechainicio = $fechainicio;

        return $this;
    }

    public function getFechafin(): ?\DateTimeInterface
    {
        return $this->fechafin;
    }

    public function setFechafin(\DateTimeInterface $fechafin): self
    {
        $this->fechafin = $fechafin;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(string $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getTipopoliza(): ?Tipo
    {
        return $this->tipopoliza;
    }

    public function setTipopoliza(?Tipo $tipopoliza): self
    {
        $this->tipopoliza = $tipopoliza;

        return $this;
    }


}
