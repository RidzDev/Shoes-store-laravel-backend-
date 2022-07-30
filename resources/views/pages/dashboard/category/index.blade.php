<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category') }}
        </h2>
    </x-slot>

    <x-slot name="script">
        <script>
            // AJAX DataTable

            var dataTable = $('#crudTable').DataTable({
                ajax: {
                    url: "{{ route('dashboard.category.index') }}"
                    // url: "{!! url()->current() !!}",
                },
                columns: [
                    {data: 'id', name: 'id', width: '5%'},
                    {data: 'name', name: 'name'},
                    {
                        data: 'action',
                        name: 'action',
                        orderable: 'false',
                        searchable: 'false',
                        width: '25%',
                    }
                ],
            })
        </script>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-10">
                <a href="{{ route('dashboard.category.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold pt-2 pb-3 px-4 rounded shadow-lg">
                + Create Category
            </a>
            </div>
        
            <div class="shadow overflow-hidden sm:rounded-md mt-10">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <table id="crudTable" class="w-full table-auto">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-center"></tbody>
                    </table>
                </div>
            </div>
            {{-- <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div> --}}
    </div>
</div>
</x-app-layout>