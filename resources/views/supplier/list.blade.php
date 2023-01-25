<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Supplier
        </h2>
    </x-slot>

    {{-- <div class="d-flex justify-content-evenly">
        <div class="">
            <a href="/addcat">
                <x-primary-button class="ml-3">
                    Add Category
                </x-primary-button>
            </a>
        </div>
    </div> --}}

    <div class="">
        <div class="max-w-1xl mx-auto sm:px-6 lg:px-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900">
                    <a href="/addsupplier">
                        <x-primary-button class="ml-3 mb-2">
                            Add Supplier
                        </x-primary-button>
                    </a>
                    <table class="table">
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($suppliers as $supplier)
                            <tr>
                                <td>{{ $supplier->id }}</td>
                                <td>{{ $supplier->title }}</td>
                                <td>
                                    <form action="{{ '/deletesupplier/' . $supplier->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">
                                            <i class="fa fa-trash" style="width: 50px;">
                                                Remove
                                            </i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
