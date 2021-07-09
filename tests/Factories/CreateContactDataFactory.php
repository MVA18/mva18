<?php 

namespace Tests\Factories;

use Domain\Contacts\DataTransferObjects\ContactData;
use Support\TestFactories\Factory;

class CreateContactDataFactory extends Factory
{
    public static function new(): self
    {
        return new self();
    }

    public function create(array $extra = []): ContactData
    {
        return new ContactData( $extra + [
            'name' => 'test',
            'email' => 'test@test.com',
            'dob' => '1994-06-10',
            'cell_number' => '081642752',
        ]);
    }
}