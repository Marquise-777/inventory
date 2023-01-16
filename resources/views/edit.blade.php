{{-- @extends('layout.boilerplate')

@section('content') --}}
<style>
    #add-card {
        width: 40rem;
    }

    @media screen and (max-width: 450px) {

        #add-card {
            width: 20rem;
        }
    }

    @media screen and (min-width: 451px) {

        #add-card {
            width: 30rem;
        }
    }

    @media screen and (min-width: 768px) {

        #add-card {
            width: 40rem;
        }
    }
</style>
{{-- 
    <center>
        <div class="card mt-5" id="add-card">
            <div class="card-body">
                <form action="/items/{{ $data->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                        <input name="title" type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="NIVEA MEN" value="{{ $data->title }}">
                    </div>
                    <div class="mb-3">

                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3" value="">{{ $data->desc }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Quantity</label>
                        <input name="unit" type="number" class="form-control" id="exampleFormControlInput1"
                            placeholder="10" value="{{ $data->unit }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Category</label>
                        <input name="cat_id" type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Sports" value="{{ $data->cat_id }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Price</label>
                        <input name="price" type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="$20/unit" value="{{ $data->price }}">
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Add" class="btn btn-primary">
                        <input type="reset" value="Reset" class="btn btn-secondary">
                    </div>
                </form>
            </div>
        </div>
    </center>
@endsection --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Update
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <center>
                        <div class=" mt-5" id="add-card">
                            <div class="">
                                <form action="/items/{{ $data->id }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                                        <input name="title" type="text" class="form-control"
                                            id="exampleFormControlInput1" placeholder="NIVEA MEN"
                                            value="{{ $data->title }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Quantity</label>
                                        <input name="unit" type="number" class="form-control"
                                            id="exampleFormControlInput1" placeholder="10" value="{{ $data->unit }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Price</label>
                                        <input name="price" type="text" class="form-control"
                                            id="exampleFormControlInput1" placeholder="$20/unit"
                                            value="{{ $data->price }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                        <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3" value="">{{ $data->desc }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Category</label>
                                        <select name="category_id" class="form-select "
                                            aria-label="Default select example">
                                            @foreach ($category as $cat)
                                                <option value="{{ $cat->id }}" {{ $data->category_id==$cat->id? 'selected':''}}>{{ $cat->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        {{-- <input type="submit" value="Add" class="btn btn-primary"> --}}
                                        <x-primary-button type="submit" class="ml-3">
                                            Submit
                                        </x-primary-button>
                                        <input type="reset" value="Reset" class="">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
