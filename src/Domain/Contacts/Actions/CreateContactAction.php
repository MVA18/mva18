<?php 

namespace Domain\Contacts\Actions;

use Domain\Contacts\DataTransferObjects\ContactData;
use Domain\Contacts\Models\Contact;

class CreateContactAction
{
    private SaveContactAction $saveContactAction;

    public function __construct(
        SaveContactAction $saveContactAction
    ){
        $this->saveContactAction = $saveContactAction;
    }

    public function __invoke(
        ContactData $data
    ): Contact {
        $contact = ($this->saveContactAction)($data);
        return $contact;
    }
}