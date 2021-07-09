<?php 

namespace Domain\Contacts\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CreateContactData extends DataTransferObject
{
    public string $name;

    public string $email;

    public string $dob;

    public string $cell_number;
}