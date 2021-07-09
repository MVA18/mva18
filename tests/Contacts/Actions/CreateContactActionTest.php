<?php

namespace Tests\Contacts\Actions;

use Domain\Contacts\Actions\CreateContactAction;
use Domain\Contacts\Models\Contact;
use Tests\Factories\CreateContactDataFactory;
use Tests\TestCase;

class CreateContactActionTest extends TestCase
{
    private CreateContactAction $action;

    protected function setUp(): void
    {
        parent::setUp();

        $this->action = app(CreateContactAction::class);
    }

    /** @test */
    public function contact_is_saved_in_the_database()
    {
        $createContactData = CreateContactDataFactory::new()->create();

        $contact = ($this->action)($createContactData);

        $this->assertInstanceOf(Contact::class, $contact);

        $this->assertDatabaseHas($contact->getTable(), [
            'name' => $contact->name,
            'email' => $contact->email,
            'dob' => $contact->dob,
            'cell_number' => $contact->cell_number,
        ]);

        $this->assertNotNull($contact->name);
    }
}