<?php 

namespace Tests\Factories;

use Domain\Contacts\DataTransferObjects\CreateContactData;
use Support\TestFactories\Factory;

class CreateContactDataFactory extends Factory
{
    public static function new(): self
    {
        return new self();
    }

    public function create(array $extra = []): CreateContactData
    {
        return new CreateContactData();
    }
}