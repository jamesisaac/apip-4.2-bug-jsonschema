<?php

namespace App\Dto;

use ApiPlatform\Symfony\Action\NotFoundAction;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use App\Entity\Greeting;
use Symfony\Component\Serializer\Annotation as Serializer;

#[ApiResource(
    operations: [
        new Get(controller: NotFoundAction::class, read: false, output: false),
    ],
)]
class GreetingOverviewDto
{
    public function __construct(
        #[Serializer\Groups(['Advanced'])]
        public Greeting $greeting,

        #[Serializer\Groups(['Advanced'])]
        public int $viewCount,
    ) {
    }
}
