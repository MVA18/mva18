<?php

namespace src\Domain\Contacts\Livewire;

use Domain\Contacts\Models\Contact;
use Livewire\Component;

class ContactsTable extends Component
{
    public $search = '';

    public function clear()
    {
        $this->search = '';
    }

    public function render()
    {
        return view('Contacts.Livewire.contacts-table', [
            'contacts' => Contact::search($this->search)->get(),
        ]);
    }
}
