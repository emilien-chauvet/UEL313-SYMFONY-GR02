<?php

namespace App\Entity;

use App\Repository\LienRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LienRepository::class)]
class Lien
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $lien_url = null;

    #[ORM\Column(length: 255)]
    private ?string $lien_titre = null;

    #[ORM\Column(length: 255)]
    private ?string $lien_desc = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLienUrl(): ?string
    {
        return $this->lien_url;
    }

    public function setLienUrl(string $lien_url): self
    {
        $this->lien_url = $lien_url;

        return $this;
    }

    public function getLienTitre(): ?string
    {
        return $this->lien_titre;
    }

    public function setLienTitre(string $lien_titre): self
    {
        $this->lien_titre = $lien_titre;

        return $this;
    }

    public function getLienDesc(): ?string
    {
        return $this->lien_desc;
    }

    public function setLienDesc(string $lien_desc): self
    {
        $this->lien_desc = $lien_desc;

        return $this;
    }
}
