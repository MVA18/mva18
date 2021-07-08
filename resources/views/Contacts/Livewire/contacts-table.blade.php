<div>
    <div class="w-1/2 text-center row">
        <div class="col form-inline">
            Per Page: &nbsp;
            <select wire:model="perPage" class="form-control">
                <option>10</option>
                <option>15</option>
                <option>20</option>
                <option>30</option>
                <option>40</option>
                <option>50</option>
            </select>
        </div>
    </div>
    <div class="max-w-3/4 bg-gray-100 flex items-center justify-center bg-gray-100">
        <div class="bg-white shadow-md rounded my-6  h-1/3">

            <table class="text-left w-96 table-auto">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">
                            <a wire:click.prevent="sortBy('name')" role="button" href="#">
                                <span class="float-left">Name</span>
                                <div class="float-right mt-1">@include('Contacts.Livewire.includes._sort-icon', ['field' => 'name'])</div>
                            </a>
                        </th>
                        <th class="py-3 px-6 text-left">
                            <a wire:click.prevent="sortBy('email')" role="button" href="#">
                                <span class="float-left">E-Mail</span>
                                <div class="float-right mt-1">@include('Contacts.Livewire.includes._sort-icon', ['field' => 'email'])</div>
                            </a>
                        </th>
                        <th class="py-3 px-15 text-left">
                            <a wire:click.prevent="sortBy('cell_number')" role="button" href="#">
                                <span class="float-left">Cellphone</span>
                                <div class="float-right mt-1">@include('Contacts.Livewire.includes._sort-icon', ['field' => 'cell_number'])</div>
                            </a>
                        </th>
                        <th class="py-3 px-15 text-left">
                            <a wire:click.prevent="sortBy('dob')" role="button" href="#">
                                <span class="float-left">Birthday</span>
                                <div class="float-right mt-1">@include('Contacts.Livewire.includes._sort-icon', ['field' => 'dob'])</div>
                            </a>
                        </th>
                        <th class="py-3 px-6 text-left">Search<input class="ml-2 px-6" wire:model="search" type="text"></th>
                    </tr>
                </thead>

                <tbody class="text-gray-600 text-sm font-light w-full">
                    @foreach ($contacts as $contact)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap">
                            <div class="flex items-left">
                                <span class="font-medium">{{$contact->name}}</span>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-left">
                            <div class="flex items-left">
                                <span>{{$contact->email}}</span>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-left whitespace-nowrap">
                            <div class="flex items-left">
                                <span>{{$contact->cell_number}}</span>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-left">
                            <div class="flex items-left">
                                <span>{{$contact->dob->format('d-m-Y')}}</span>
                            </div>
                        </td>
                        <td class="py-3 px-3 text-center">
                            <div class="flex item-center justify-center">
                                <div class="w-4 mr-2 transform hover:text-blue-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                    </svg>
                                </div>
                                <div class="w-4 mr-2 transform hover:text-red-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row flex justify-center mt-10 ml-5">
                <div class="col">
                   {{ $contacts->links() }}
                </div>
            </div>
        </div>

    </div>

</div>