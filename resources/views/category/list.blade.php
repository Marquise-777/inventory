<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Categories
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
                    <a href="/addcat">
                        <x-primary-button class="ml-3 mb-2">
                            Add Category
                        </x-primary-button>
                    </a>
                    <table class="itemstable">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category as $cat)
                            <tr>
                                <td>{{ $cat->id }}</td>
                                <td>{{ $cat->title }}</td>
                                <td>
                                    <a href="javascript:;" data-toggle="modal" data-target="#exampleModalCenter"
                                        class="delbtn">
                                        <i class="fa fa-trash">
                                            Remove
                                        </i>
                                    </a>
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
                                <h5 id="exampleModalLabel">Are you sure want to delete this Category?
                                    It will effect to the Product Related to it
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
                document.getElementById("delete-form").action = '/deletecat/' + data[0];
                $('#delid').val(data[0])
                $('#deldis').html(data[1])
            });
        })
    </script>
</x-app-layout>
