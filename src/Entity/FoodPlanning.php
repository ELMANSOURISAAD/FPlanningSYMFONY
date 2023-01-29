<?php

namespace App\Entity;

use App\Repository\FoodPlanningRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Recette;

#[ORM\Entity(repositoryClass: FoodPlanningRepository::class)]
class FoodPlanning
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $week_number = null;

    #[ORM\Column]
    private ?int $year = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Recette $repas1 = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Recette $repas2 = null;


    private ?float $price = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?recette $repas3 = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?recette $repas4 = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?recette $repas5 = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?recette $repas6 = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?recette $repas7 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWeekNumber(): ?int
    {
        return $this->week_number;
    }

    public function setWeekNumber(int $week_number): self
    {
        $this->week_number = $week_number;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getRepas1(): ?Recette
    {
        return $this->repas1;
    }

    public function setRepas1(?Recette $repas1): self
    {
        $this->repas1 = $repas1;

        return $this;
    }

    public function getRepas2(): ?Recette
    {
        return $this->repas2;
    }

    public function setRepas2(?Recette $repas2): self
    {
        $this->repas2 = $repas2;

        return $this;
    }

    public function __toString(): string
    {
        return " Année " . $this->year . " Semaine : " . $this->week_number;
    }
    public function getPrice(): float
    {
        $array = $this->repas1->getIngredients();

        foreach ($array as  $ingredient) {
           $this->price += ($ingredient->getElement()->getPrice()*$ingredient->getQuantity());
        }

        $array = $this->repas2->getIngredients();

        foreach ($array as  $ingredient) {
            $this->price += ($ingredient->getElement()->getPrice()*$ingredient->getQuantity());
        }

        $array = $this->repas3->getIngredients();

        foreach ($array as  $ingredient) {
            $this->price += ($ingredient->getElement()->getPrice()*$ingredient->getQuantity());
        }

        $array = $this->repas4->getIngredients();

        foreach ($array as  $ingredient) {
            $this->price += ($ingredient->getElement()->getPrice()*$ingredient->getQuantity());
        }

        $array = $this->repas5->getIngredients();

        foreach ($array as  $ingredient) {
            $this->price += ($ingredient->getElement()->getPrice()*$ingredient->getQuantity());
        }

        $array = $this->repas6->getIngredients();

        foreach ($array as  $ingredient) {
            $this->price += ($ingredient->getElement()->getPrice()*$ingredient->getQuantity());
        }

        $array = $this->repas7->getIngredients();

        foreach ($array as  $ingredient) {
            $this->price += ($ingredient->getElement()->getPrice()*$ingredient->getQuantity());
        }





        return $this->price;

    }

    public function getRepas3(): ?recette
    {
        return $this->repas3;
    }

    public function setRepas3(?recette $repas3): self
    {
        $this->repas3 = $repas3;

        return $this;
    }

    public function getRepas4(): ?recette
    {
        return $this->repas4;
    }

    public function setRepas4(?recette $repas4): self
    {
        $this->repas4 = $repas4;

        return $this;
    }

    public function getRepas5(): ?recette
    {
        return $this->repas5;
    }

    public function setRepas5(?recette $repas5): self
    {
        $this->repas5 = $repas5;

        return $this;
    }

    public function getRepas6(): ?recette
    {
        return $this->repas6;
    }

    public function setRepas6(?recette $repas6): self
    {
        $this->repas6 = $repas6;

        return $this;
    }

    public function getRepas7(): ?recette
    {
        return $this->repas7;
    }

    public function setRepas7(?recette $repas7): self
    {
        $this->repas7 = $repas7;

        return $this;
    }
}
