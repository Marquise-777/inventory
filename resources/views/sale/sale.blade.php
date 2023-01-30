<style>
    @media screen and (min-width: 768px) {

        #add-card {
            width: 40rem;
        }
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <div class=" d-flex">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight p-2 flex-grow-1">
                {{ __('Sales') }}
            </h2>
    
            <nav aria-label="breadcrumb p-2">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">Sale</li>
                </ol>
            </nav>
        </div>
          
    </x-slot>

    <div class="">
        <div class="max-w-1xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 row justify-content-evenly">
                        <div class=" mt-2" id="add-card">
                            <a href="/customers">
                                <x-primary-button class="mb-1">
                                    View Customers <i class="ms-2 mdi mdi-wunderlist "></i>
                                </x-primary-button>
                            </a>
                            <div class="dropdown-divider"></div>
                            <form action="/sale" method="POST">
                                @csrf
                                <label for="all"> Customer Credentials</label>
                                <div class="mb-3 row">
                                    <label for="customer_name" class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input name="customer_name" type="text" class="form-control"
                                            id="exampleFormControlInput1" placeholder="Khiangawia" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="customer_address" class="col-sm-3 col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <input name="customer_address" type="text" class="form-control"
                                            id="exampleFormControlInput1" placeholder="Zohnuai" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="customer_contact" class="col-sm-3 col-form-label">Contact</label>
                                    <div class="col-sm-9">
                                        <input name="customer_contact" type="text" class="form-control"
                                            id="exampleFormControlInput1" placeholder="9612656575" required>
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
                                        <div class="mb-3 col-sm">
                                                <select name="sale[0][title]" class="form-select select2pro" aria-label="Default select example" id="product0" required>
                                                    <option value="" selected disabled hidden>Choose</option>
                                                    @foreach ($items as $item)
                                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                        <div class="mb-3 col-sm">
                                                <input name="sale[0][unit]" type="number" class="form-control"
                                                    id="qty0" placeholder="Qty" required>
                                        </div>x
                                        <div class="mb-3 col-sm">
                                            <input type="text" id="price0" name="sale[0][price]" class="form-control" placeholder="Price" readonly  >
                                        </div>:
                                        <div class="mb-3 col-sm">
                                            <input type="text" id="sellingprice0" name="sale[0][sellingprice]" class="form-control buying-price" placeholder="Sub Price" readonly >
                                        </div>
                                        {{-- <div class="mb-3 col-sm">
                                            <input type="hidden" id="" name="sale[0][customer_id]" class="form-control">
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="row">
                                    {{-- <label for="discount" class="col-sm-3 col-form-label ">Discount</label> --}}
                                    <div class="col-sm-6">
                                    {{-- <input name="discount" type="number" class="form-control mb-1 " id="discount"> --}}
                                    </div>
                                    <label for="totalprice" class="col-sm-3 col-form-label">Total</label>
                                    <div class="col-sm-3">
                                    <input name="totalprice" type="number" class="form-control mb-1 " id="TotalPrice"  required>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>

                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <input type="reset" id ="reset" value="Reset" class="btn btn-secondary mb-1" style="color: grey;">
                                        </div>
                                        <div class="col-sm-3 ">
                                            <x-primary-button type="submit" class="mb-1">
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
            var i = 0,s;
            var limit = 5;
            var total = 0;
            $('#reset').on('click', function(){
                for(let p = 0; p <= limit; p++){
                    $('#qty'+p).attr('placeholder','Qty');
                }
                totalamount()
            });

            for(let z = 0; z<=limit; z++){
                $(document).on('input','#qty'+z,function() {
                    let product = $('#product'+z).val();
                    let url = "{{ url('/api/v2') }}";
                    $.get( url , function( data ) {
                        for(let x in data){
                            if(product == data[x].id){
                                let d = data[x].price;
                                if(data[x].unit < $('#qty'+z).val()){
                                    alert('You Exceed Stock Amount');
                                }
                                else{
                                     s = data[x].price * $('#qty'+z).val();
                                    $('#price'+z).val(d);
                                    $('#sellingprice'+z).val(s);
                                    totalamount()
                                }
                            }
                        }
                    });
                });
                
                $(document).on('change','#product'+z,function() {
                    let product = $('#product'+z).val();
                    let url = "{{ url('/api/v2') }}";
                    $.get( url , function( data ) {
                        for(let x in data){
                            if(product == data[x].id){
                                $('#qty'+z).attr('placeholder','Stock : ' + data[x].unit);
                                let d = data[x].price;
                                let u = data[x].price * $('#qty'+z).val();
                                $('#price'+z).val(d);
                                $('#sellingprice'+z).val(u);
                                totalamount()

                            }
                        }
                    });
                });
            }
            function totalamount() {
                let sum = 0;
                $('.buying-price').each(function() {
                    let value = $(this).val();
                    if(!isNaN(value) && value.length != 0){
                        sum += parseFloat(value);
                    }
                });
                $('#TotalPrice').val(sum);
            }
            $('#rowAdder').click(function() {
                ++i;
                if(limit>i){
                $('.inputsale').append('<div class="row mb-3" id="row">'+
                                        '<div class="mb-3 col-sm">'+
                                                '<select name="sale['+i+'][title]" class="form-select" aria-label="Default select example" id="product'+i+'" required>'+
                                                    '<option value="" selected disabled hidden>Choose</option>'+
                                                    '@foreach ($items as $item)'+
                                                    '<option value="{{ $item->id }}">{{ $item->title }}</option>'+
                                                    '@endforeach'+
                                                '</select>'+
                                        '</div>'+
                                        '<div class="mb-3 col-sm">'+
                                                '<input name="sale['+i+'][unit]" type="number" class="form-control"'+
                                                    'id="qty'+i+'" placeholder="Qty" required>'+
                                        '</div>x'+
                                        '<div class="mb-3 col-sm">'+
                                            '<input type="text" id="price'+i+'" name="sale['+i+'][price]" class="form-control" placeholder="Price" readonly>'+
                                        '</div>:'+
                                        '<div class="mb-3 col-sm">'+
                                            '<input type="text" id="sellingprice'+i+'" name="sale['+i+'][sellingprice]" class="form-control buying-price" placeholder="Sub Price" readonly>'+
                                        '</div>'+
                                        '<div class="btn btn-secondary mb-2" id="DeleteRow">Remove <i class="fa fa-trash"></i></div></div>'+
                                    '</div>');}
                                    else{
                                        alert('Limit Reach');
                                    }
            });
            
            $("body").on("click", "#DeleteRow", function () {
                --i;
                $(this).parents("#row").remove();
                totalamount()
            });
            $('.select2pro').select2();

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
