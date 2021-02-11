<?php

declare(strict_types=1);

namespace App\Tricksy\Bike;

class Frame
{
    private $variation;
    private $material;
    private $acceptableVariations;
    private $acceptableMaterials;

    public function __construct(string $variation, string $material)
    {

        $this->acceptableVariations = collect([
            "diamond",
            "cantilever",
            "folding",
            "penny-farthing"
        ]);
        $this->acceptableMaterials = collect([
            "steel",
            "carbon fibre",
            "aluminium",
            "bamboo"
        ]);

        $this->validateVariation($variation);
        $this->validateMaterial($material);
    }

    public function validateVariation(string $userVariation): void
    {
        if ($this->acceptableVariations->contains($userVariation)) {
            $this->variation = $userVariation;
        }
    }

    public function validateMaterial(string $userMaterial): void
    {
        if ($this->acceptableMaterials->contains($userMaterial)) {
            $this->material = $userMaterial;
        }
    }

    public function getVariation()
    {
        return $this->variation;
    }

    public function getMaterial()
    {
        return $this->material;
    }

    public function setMaterial(string $material): Frame
    {
        $this->validateMaterial($material);
        return $this;
    }

    public function material(): string
    {
        return $this->material;
    }
}
