<?php

namespace Domain\Contacts\DataTransferObjects;

use App\Admin\Bookings\Requests\BookingFormRequest;
use App\Admin\Bookings\Requests\ContactFormRequest;
use Spatie\DataTransferObject\DataTransferObject;

class ContactData extends DataTransferObject
{
    public string $name;

    public string $email;

    public string $dob;

    public string $cell_number;

    public static function fromRequest(ContactFormRequest $request): ContactData
    {
        return new self([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'dob' => $request->input('dob'),
            'cell_number' => $request->input('cell_number'),
        ]);
    }
}
