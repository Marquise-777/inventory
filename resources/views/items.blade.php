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
    <div class="py-0">
        <div class="max-w-1xl mx-auto sm:px-6 lg:px-8">
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
                                <th>Supplier</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($iPro as $item)
                                <tr class="mb-2">
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ substr($item->desc, 0, 20) }}</td>
                                    <td>{{ $item->unit }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->category ? $item->category->title : '-' }}</td>
                                    <td>{{ $item->supplier ? $item->supplier->title : '-' }}</td>
                                    <td>
                                        <div class="d-flex">

                                            <a href="/items/{{ $item->id }}" class="me-3">
                                                <i class="fa fa-pencil">
                                                    Edit
                                                </i>
                                            </a>

                                            <a href="javascript:;" data-toggle="modal" data-target="#exampleModalCenter"
                                                class="delbtn"><i class="fa fa-trash">
                                                    Remove
                                                </i></a>
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



    <div id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true" class="modal">
        <div role="document">
            <div class="modal-dialog">
                <div class="modal-content">
                    <center>
                        <form action="#" method="post" id="delete-form">
                            @csrf
                            @method('DELETE')
                            <div class="modal-body" style="color:gray;">
                                {{-- <input type=hidden id="delid" name=id> --}}
                                <h5 id="exampleModalLabel">Are you sure want to delete?
                                    <b>
                                        <div id="deldis"></div>
                                    </b>
                                </h5>

                                <button type=button data-dismiss="modal" class="me-4">No</button>
                                <button type=submit class="btn btn-primary">Yes</button>
                            </div>
                        </form>
                    </center>
                </div>
            </div>
        </div>
    </div>

    <div style="color: grey">
        @include('sweetalert::alert')
    </div>
    <script>
        $(document).ready(function() {


            $('.delbtn').click(function() {
                $tr = $(this).closest('tr');
                var data = $tr.children('td').map(function() {
                    return $(this).text();
                }).get();
                document.getElementById("delete-form").action = '/items/' + data[0];
                $('#delid').val(data[0])
                $('#deldis').html(data[1])
            });
        })
    </script>


</x-app-layout>
