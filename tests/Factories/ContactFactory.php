<?php 

namespace Tests\Factories;

use Domain\Contacts\Models\Contact;
use Support\TestFactories\Factory;

class ContactFactory extends Factory
{
    private string $name;

    private string $email;

    private string $dob;

    private string $cell_number;

    public static function new(): ContactFactory
    {
        return new self();
    }

    public function create(array $extra = []): Contact
    {
        return Contact::create(
            $extra + [
                'name' => $this->name,
                'email' => $this->email,
                'dob' => $this->dob,
                'cell_number' => $this->cell_number, 
            ]
        );
    }
}