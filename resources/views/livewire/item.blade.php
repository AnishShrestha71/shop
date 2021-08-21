<div>
    <input type="text" name="search" id="search" placeholder="type to search item" autocomplete="off"
        wire:model="searchTerm"
        class="typeahead shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ">
    <div class="mt-12">
        Item no's to show: <select name="" id="" wire:model="paginate">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <table class="mt-4">
            <thead class="h-12">
                <tr>
                    <th class="border border-green-600">Item</th>
                    <th class="border border-green-600">Quantity</th>
                    <th class="border border-green-600">Price</th>
                    @if (Auth::user())
                        <th class="border border-green-600">Actions</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr class="my-4 h-12">
                        <td class="border border-green-600 w-96 text-center ">{{ $item->name }}</td>
                        <td class="border border-green-600 w-96 text-center ">{{ $item->quantity }}</td>
                        <td class="border border-green-600 w-96 text-center ">Rs {{ $item->price }}</td>
                        @if (Auth::user())
                            <td class="border border-green-600 w-96 text-center ">
                                <a href="{{ route('item.edit', $item->id) }}">
                                    <button
                                        class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                        edit
                                    </button>
                                </a>
                                <a href="{{ route('item.delete', $item->id) }}">
                                    <button
                                        class="bg-red-800 hover:bg-gray-100 text-white font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                        delete
                                    </button>
                                </a>
                            </td>
                        @endif

                    </tr>
                @endforeach


            </tbody>

        </table>

        <div class="mt-2">
            {{ $items->links() }}

        </div>

    </div>
</div>
