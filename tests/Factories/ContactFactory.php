<?php 

namespace Tests\Factories;

use Domain\Contacts\Models\Contact;
use Support\TestFactories\Factory;

class ContactFactory extends Factory
{
    private string $name = 'test';

    private string $email = 'test@test.com';

    private string $dob = '1994-06-10';

    private string $cell_number = '0812901365';

    public static function new(): ContactFactory
    {
        return new self();
    }

    public function create(array $extra = []): Contact
    {
        return Contact::create(
            $extra + [
                'name' => $this->number,
                'email' => $this->totalPrice,
                'dob' => $this->dob,
                'cell_number' => $this->cell_number, 
            ]
        );
    }
}