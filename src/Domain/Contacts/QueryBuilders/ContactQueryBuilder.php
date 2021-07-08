<?php

namespace Domain\Contacts\QueryBuilders;

use Domain\Contacts\Models\Contact;
use Illuminate\Database\Eloquent\Builder;

class ContactQueryBuilder extends Builder
{
    public function search(string $query): self
    {
        return Contact::where('name', 'like', '%' . $query . '%')
            ->orWhere('email', 'like', '%' . $query . '%');
    }
}
