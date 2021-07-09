<?php 

namespace Domain\Contacts\Actions;

use Domain\Contacts\DataTransferObjects\ContactData;
use Domain\Contacts\Models\Contact;

class SaveContactAction
{
    public function __invoke(
        ContactData $data
    ): Contact {
        $contact = Contact::create([
            'name' => $data->name,
            'email' => $data->email,
            'dob' => $data->dob,
            'cell_number' => $data->cell_number,
        ]);

        return $contact->refresh();
    }
}