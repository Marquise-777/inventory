<style>
    @media screen and (min-width: 768px) {

        #add-card {
            width: 40rem;
        }
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sales') }}
        </h2>
    </x-slot>

    <div class="">
        <div class="max-w-1xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 row justify-content-evenly">
                        <div class=" mt-2" id="add-card">
                            <form action="/sale" method="POST">
                                @csrf
                                <label for="all"> Customer Credentials</label>
                                <div class="mb-3 row">
                                    <label for="customer_name" class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input name="customer_name" type="text" class="form-control"
                                            id="exampleFormControlInput1" placeholder="Khiangawia">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="customer_address" class="col-sm-3 col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <input name="customer_address" type="text" class="form-control"
                                            id="exampleFormControlInput1" placeholder="Zohnuai">
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <div class="mb-3 row">
                                    <div class="col-sm-12 align-self-end">
                                        <div class="btn btn-secondary mb-3" id="rowAdder" onclick="">
                                            Add Items <i class="fa fa-plus"></i></div>
                                    </div>
                                </div>
                                <div class="inputsale">
                                    <div class="row mb-3">
                                        <div class="mb-3 col">
                                            <div class="">
                                                <select name="title" class="form-select "
                                                    aria-label="Default select example">
                                                    @foreach ($items as $item)
                                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 col">
                                            <div class="">
                                                <input name="unit" type="number" class="form-control"
                                                    id="exampleFormControlInput1" placeholder="Qty">
                                            </div>
                                        </div>
                                        <div class="mb-3 col">
                                            <div class="">
                                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                                    value="Price auto calculate" readonly>
                                            </div>
                                        </div>
                                        {{-- <div class="btn btn-secondary" id="DeleteRow">
                                            Remove <i class="fa fa-trash"></i>
                                        </div> --}}
                                    </div>
                                    
                                </div>

                                <div class="dropdown-divider"></div>

                                <div class="mb-3">
                                    <div class="d-flex">
                                        <div class="">
                                            <input type="reset" value="Reset" class="btn" style="color: grey;">
                                        </div>
                                        <div class="">
                                            <x-primary-button type="submit" class="ml-3">
                                                Proceed <i class=" mdi mdi-arrow-right"></i>
                                            </x-primary-button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>                   
                    {{-- </div> --}}
                    {{-- <div class="col-sm-6">
                            @include('sale.invoice')
                        </div> --}}
                </div>
            </div>
        </div>
    </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            var i = 0;
            $('#rowAdder').click(function() {
                ++i;
                $('.inputsale').append('<div class="row mb-3" id="row"><div class="mb-3 col"><div class=""><select name="title" class="form-select "aria-label="Default select example">@foreach ($items as $item)<option value="{{ $item->id }}">{{ $item->title }}</option>@endforeach</select></div></div><div class="mb-3 col"><div class=""><input name="unit" type="number" class="form-control"id="exampleFormControlInput1" placeholder="Qty"></div></div><div class="mb-3 col"><div class=""><input type="text" class="form-control" id="exampleFormControlInput1"value="Price auto calculate" readonly></div></div><div class="btn btn-secondary" id="DeleteRow">Remove <i class="fa fa-trash"></i></div></div>');
            });
            $("body").on("click", "#DeleteRow", function () {
                $(this).parents("#row").remove();
           })
        });
    </script>
</x-app-layout>

{{-- <script type="text/javascript">
    $(document).ready(async function(){
       alert('hghg')
           $("#rowAdder").click(function (e) {
               alert('test');
               e.preventDefault();
               newRowAdd ='<div class="mb-3 row"><label for="unit" class="col-sm-3 col-form-label">Customer Name</label><div class="col-sm-9"><input name="customer_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Khiangawia"> </div></div><div class="mb-3 row"><label for="title" class="col-sm-3 col-form-label">Product Name</label><div class="col-sm-9"> <select name="title" class="form-select "aria-label="Default select example"> @foreach ($items as $item)<option value="{{ $item->id }}">{{ $item->title }}</option> @endforeach</select</div> </div><div class="mb-3 row"><label for="unit" class="col-sm-3 col-form-label">Quantity</label><div class="col-sm-9"><input name="unit" type="number" class="form-control"id="exampleFormControlInput1" placeholder="10"> </div></div><div class="mb-3 row"> <label for="price" class="col-sm-3 col-form-label">Price</label><div class="col-sm-9"><input type="text" class="form-control" id="exampleFormControlInput1" value="Price auto calculate" readonly> </div> </div><div class="mb-3 row"> <div class="col-sm-7"><div class="btn btn-secondary" id="DeleteRow">Remove <i class="fa fa-trash"></i></div></div><div class="col-sm-5"><input type="reset" value="Reset" class="btn" style="color: grey;"><x-primary-button type="submit" class="ml-3">Proceed</x-primary-button></div></div>';
               $('#addsale').append('<div class="mb-3 row"><label for="unit" class="col-sm-3 col-form-label">Customer Name</label><div class="col-sm-9"><input name="customer_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Khiangawia"> </div></div><div class="mb-3 row"><label for="title" class="col-sm-3 col-form-label">Product Name</label><div class="col-sm-9"> <select name="title" class="form-select "aria-label="Default select example"> @foreach ($items as $item)<option value="{{ $item->id }}">{{ $item->title }}</option> @endforeach</select</div> </div><div class="mb-3 row"><label for="unit" class="col-sm-3 col-form-label">Quantity</label><div class="col-sm-9"><input name="unit" type="number" class="form-control"id="exampleFormControlInput1" placeholder="10"> </div></div><div class="mb-3 row"> <label for="price" class="col-sm-3 col-form-label">Price</label><div class="col-sm-9"><input type="text" class="form-control" id="exampleFormControlInput1" value="Price auto calculate" readonly> </div> </div><div class="mb-3 row"> <div class="col-sm-7"><div class="btn btn-secondary" id="DeleteRow">Remove <i class="fa fa-trash"></i></div></div><div class="col-sm-5"><input type="reset" value="Reset" class="btn" style="color: grey;"><x-primary-button type="submit" class="ml-3">Proceed</x-primary-button></div></div>');
           });
    
           $("body").on("click", "#DeleteRow", function () {
               $(this).parents("#row").remove();
           })
   });
       </script> --}}
