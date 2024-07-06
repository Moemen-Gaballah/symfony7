<?php

namespace App\Repository;

use App\Model\Starship;
use App\Model\StarshipStatusEnum;
use Psr\Log\LoggerInterface;

class StarshipRepository
{

    public function findAll(): array
    {
        return [
            new Starship(
                1,
                'USS LeafyCruiser (NCC-0001)',
                'Garden',
                'Jean-Luc Pickles',
                StarshipStatusEnum::IN_PROGRESS
            ),
            new Starship(
                2,
                'USS Espresso (NCC-1234-c)',
                'Latte',
                'James T. Quick!',
                StarshipStatusEnum::COMPLETED
            ),
            new Starship(
                3,
                'USS Wanderlust (NCC-2024-W)',
                'Delta Tourist',
                'Kathryn Journey way',
                StarshipStatusEnum::WAITING
            ),
        ];
    }

    public function find(int $id): ?Starship
    {
        foreach ($this->findAll() as $starship) {
            if($starship->getId() === $id){
                return $starship;
            }
        }

        return null;
    }
}