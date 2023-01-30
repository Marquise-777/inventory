<x-app-layout>
    <x-slot name="header">
        <div class="d-flex">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight p-2 flex-grow-1">
                Customers
            </h2>
            <nav aria-label="breadcrumb p-2">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/sale">Sale</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Customer</li>
                </ol>
            </nav>
        </div>
          
    </x-slot>

    
    <div class="py-0">
        <div class="max-w-1xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900  table-responsive">
                    <table class="itemstable">
                        <a href="/sale">
                            <x-primary-button class="ml-3 mb-2">
                                <i class=" mdi mdi-arrow-left me-3"></i>
                                Back to Sales Entry
                            </x-primary-button>
                        </a>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Contact</th>
                                <th>Amount Paid</th>
                                <th>Bought Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($customers as $customer)
                                <tr class="mb-2">
                                    <td>{{ $customer->id }}</td>
                                    <td>{{ $customer->customer_name }}</td>
                                    <td>{{ $customer->customer_address }}</td>
                                    <td>{{ $customer->customer_contact }}</td>
                                    <td>{{ $customer->totalprice }}</td>
                                    <td>{{ date('d-M-y', strtotime($customer->created_at)) }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="/purchase/{{ $customer->id }}" class="me-3">
                                                <i class="fa fa-eye">
                                                    View
                                                </i>
                                            </a>
                                            <a href="/invoice/{{ $customer->id }}" class="me-3">
                                                <i class="mdi mdi-newspaper ">
                                                    Regenerate Invoice
                                                </i>
                                            </a>

                                            {{-- <a href="javascript:;" data-toggle="modal" data-target="#exampleModalCenter"
                                                class="delbtn"><i class="fa fa-trash">
                                                    Remove
                                                </i></a> --}}
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