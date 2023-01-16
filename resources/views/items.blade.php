{{-- @extends('layout.boilerplate')

@section('content')
    <table class="table table-stripe" cellpadding='10'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Desc</th>
                <th>Qt.</th>
                <th>Price</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($iPro as $items)
                <tr>
                    <td>{{ $items->id }}</td>
                    <td>{{ $items->title }}</td>
                    <td>{{ $items->desc }}</td>
                    <td>{{ $items->unit }}</td>
                    <td>{{ $items->price }}</td>
                    <td>{{ $items->cat_id }}</td>
                    <td>
                        <a href="/items/{{ $items->id }}">edit</a>
                        <form action="{{ '/items/' . $items->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">DELETE</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection --}}

{{-- @include('modal.del') --}}



<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Products
        </h2>
    </x-slot>

    {{-- <div class="d-flex justify-content-evenly">
        <div class="">
            <a href="/add">
                <x-primary-button class="ml-3">
                    Add Product
                </x-primary-button>
            </a>
        </div>
    </div> --}}
    <div class="py-3">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900  table-responsive">
                    <a href="/add">
                        <x-primary-button class="ml-3 mb-2">
                            Add Product
                        </x-primary-button>
                    </a>
                    <table class="itemstable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Desc</th>
                                <th>Qt.</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($iPro as $items)
                                <tr class="mb-2">
                                    <td>{{ $items->id }}</td>
                                    <td>{{ $items->title }}</td>
                                    <td>{{ $items->desc }}</td>
                                    <td>{{ $items->unit }}</td>
                                    <td>{{ $items->price }}</td>
                                    <td>{{ $items->category ? $items->category->title : '-' }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="/display/{{ $items->id }}">
                                                <i class="fa fa-eye me-3">
                                                    View
                                                </i>
                                            </a>
                                            <a href="/items/{{ $items->id }}" class="me-3">
                                                <i class="fa fa-pencil">
                                                    Edit
                                                </i>
                                            </a>
                                            {{-- <form action="{{ '/items/' . $items->id }}" method="post" class="delbtn">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">
                                                    <i class="fa fa-trash">
                                                        Remove
                                                    </i>
                                                </button>
                                            </form> --}}
                                            <a class="delbtn">Delete</a>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <li style="color: red" class="mt-5">{{ $error }}</li>
        @endforeach
    @endif
    {{--  --}}
    <div style="color: grey">
        @include('sweetalert::alert')
    </div>
    
</x-app-layout>
