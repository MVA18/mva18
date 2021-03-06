<?php

namespace src\Domain\Contacts\Livewire;

use Domain\Contacts\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class ContactsTable extends Component
{
    use WithPagination;
    
    public $perPage = 10;
    public $sortField = 'name';
    public $sortAsc = true;
    public $search = '';

    public function sortBy($field)
    {
        if($this->sortField === $field)
            $this->sortAsc = ! $this->sortAsc;
        else 
            $this->sortAsc = true;

            $this->sortField = $field;
    }

    public function render()
    {
        return view('Contacts.Livewire.contacts-table', [
            'contacts' => Contact::query()->search($this->search)
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate($this->perPage),
        ]);
    }

    public function destroy($id)
    {
        Contact::destroy($id);
    }
}
