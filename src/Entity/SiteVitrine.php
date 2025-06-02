<?php

namespace App\Entity;

use App\Repository\SiteVitrineRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SiteVitrineRepository::class)]
class SiteVitrine
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $entreprise = null;

    #[ORM\Column(length: 255)]
    private ?string $secteurActivity = null;

    #[ORM\Column]
    private ?bool $hasWebsite = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $websiteUrl = null;

    #[ORM\Column]
    private ?bool $hasLogo = null;

    #[ORM\Column]
    private ?bool $hasGraphicCharter = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $mockupsDone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $estimatedPages = null;

    #[ORM\Column]
    private ?bool $contentProvided = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $specificFeatures = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $desiredDeadline = null;

    #[ORM\Column(nullable: true)]
    private ?int $estimatedBudget = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $projectConstraints = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $projectDescription = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $additionalInfo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEntreprise(): ?string
    {
        return $this->entreprise;
    }

    public function setEntreprise(string $entreprise): static
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    public function getSecteurActivity(): ?string
    {
        return $this->secteurActivity;
    }

    public function setSecteurActivity(string $secteurActivity): static
    {
        $this->secteurActivity = $secteurActivity;

        return $this;
    }

    public function hasWebsite(): ?bool
    {
        return $this->hasWebsite;
    }

    public function setHasWebsite(bool $hasWebsite): static
    {
        $this->hasWebsite = $hasWebsite;

        return $this;
    }

    public function getWebsiteUrl(): ?string
    {
        return $this->websiteUrl;
    }

    public function setWebsiteUrl(?string $websiteUrl): static
    {
        $this->websiteUrl = $websiteUrl;

        return $this;
    }

    public function hasLogo(): ?bool
    {
        return $this->hasLogo;
    }

    public function setHasLogo(bool $hasLogo): static
    {
        $this->hasLogo = $hasLogo;

        return $this;
    }

    public function hasGraphicCharter(): ?bool
    {
        return $this->hasGraphicCharter;
    }

    public function setHasGraphicCharter(bool $hasGraphicCharter): static
    {
        $this->hasGraphicCharter = $hasGraphicCharter;

        return $this;
    }

    public function getMockupsDone(): ?string
    {
        return $this->mockupsDone;
    }

    public function setMockupsDone(?string $mockupsDone): static
    {
        $this->mockupsDone = $mockupsDone;

        return $this;
    }

    public function getEstimatedPages(): ?string
    {
        return $this->estimatedPages;
    }

    public function setEstimatedPages(?string $estimatedPages): static
    {
        $this->estimatedPages = $estimatedPages;

        return $this;
    }

    public function isContentProvided(): ?bool
    {
        return $this->contentProvided;
    }

    public function setContentProvided(bool $contentProvided): static
    {
        $this->contentProvided = $contentProvided;

        return $this;
    }

    public function getSpecificFeatures(): ?string
    {
        return $this->specificFeatures;
    }

    public function setSpecificFeatures(?string $specificFeatures): static
    {
        $this->specificFeatures = $specificFeatures;

        return $this;
    }

    public function getDesiredDeadline(): ?string
    {
        return $this->desiredDeadline;
    }

    public function setDesiredDeadline(?string $desiredDeadline): static
    {
        $this->desiredDeadline = $desiredDeadline;

        return $this;
    }

    public function getEstimatedBudget(): ?int
    {
        return $this->estimatedBudget;
    }

    public function setEstimatedBudget(?int $estimatedBudget): static
    {
        $this->estimatedBudget = $estimatedBudget;

        return $this;
    }

    public function getProjectConstraints(): ?string
    {
        return $this->projectConstraints;
    }

    public function setProjectConstraints(?string $projectConstraints): static
    {
        $this->projectConstraints = $projectConstraints;

        return $this;
    }

    public function getProjectDescription(): ?string
    {
        return $this->projectDescription;
    }

    public function setProjectDescription(?string $projectDescription): static
    {
        $this->projectDescription = $projectDescription;

        return $this;
    }

    public function getAdditionalInfo(): ?string
    {
        return $this->additionalInfo;
    }

    public function setAdditionalInfo(?string $additionalInfo): static
    {
        $this->additionalInfo = $additionalInfo;

        return $this;
    }
}
