<?php

namespace Domain\Bookings\Actions;

use Domain\Contacts\DataTransferObjects\ContactData;
use Domain\Contacts\Models\Contact;

class UpdateContactAction
{
    public function __invoke(Contact $contact, ContactData $contactData): Contact
    {
        $contact->fill([
            'name' => $contactData->name,
            'email' => $contactData->email,
            'dob' => $contactData->dob,
            'cell_number' => $contactData->cell_number,
        ])->save();

        return $contact->refresh();
    }

}