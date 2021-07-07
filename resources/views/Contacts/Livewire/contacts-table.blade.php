<div class="max-w-3/4 bg-gray-100 flex items-center justify-center bg-gray-100 overflow-auto">
    <div class="bg-white shadow-md rounded my-6  h-1/3">

        <table class="text-left w-96">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">Name</th>
                    <th class="py-3 px-6 text-left">E-Mail</th>
                    <th class="py-3 px-6 text-left">Cellphone</th>
                    <th class="py-3 px-20 text-left">Birthday</th>
                    <th class="py-3 px-3 text-center">Search<input class="ml-2 px-6" wire:model="search" type="text"></th>
                </tr>
            </thead>

            <tbody class="text-gray-600 text-sm font-light w-full">
                @foreach ($contacts as $contact)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-left whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="mr-2">
                                <img class="w-6 h-6 rounded-full" src="https://randomuser.me/api/portraits/men/1.jpg">
                            </div>
                            <span class="font-medium">{{$contact->name}}</span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-left">
                        <div class="flex items-left">
                            <span>{{$contact->email}}</span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-left">
                        <div class="flex items-left">
                            <span>{{$contact->cell_number}}</span>
                        </div>
                    </td>
                    <td class="py-3 px-20 text-left">
                        <span>{{$contact->dob}}</span>
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
    </div>
</div>