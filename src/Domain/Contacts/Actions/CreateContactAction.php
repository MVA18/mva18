<?php 

namespace Domain\Contacts\Actions;

use Domain\Contacts\DataTransferObjects\CreateContactData;
use Domain\Contacts\Models\Contact;

class CreateInvoiceAction
{
    private SaveContactAction $saveContactAction;

    public function __construct(
        SaveContactAction $saveContactAction
    ){
        $this->saveContactAction = $saveContactAction;
    }

    public function __invoke(
        CreateContactData $data
    ): Contact {
        $contact = ($this->saveContactAction)($data);
        return $contact;
    }
}