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
{{-- <center>
        <div class="card mt-5" id="add-card">
            <div class="card-body">
                <form action="/items" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                        <input name="title" type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="NIVEA MEN">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Quantity</label>
                        <input name="unit" type="number" class="form-control" id="exampleFormControlInput1"
                            placeholder="10">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Category</label>
                        <input name="cat_id" type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Sports">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Price</label>
                        <input name="price" type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="$20/unit">
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
            Add
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <center>
                        <div class=" mt-2" id="add-card">
                            <form action="/items" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Title</label>
                                    <input name="title" type="text" class="form-control"
                                        id="exampleFormControlInput1" placeholder="NIVEA MEN">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Quantity</label>
                                    <input name="unit" type="number" class="form-control"
                                        id="exampleFormControlInput1" placeholder="10">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Price</label>
                                    <input name="price" type="text" class="form-control"
                                        id="exampleFormControlInput1" placeholder="$20/unit">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                    <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                    {{-- <label for="exampleFormControlInput1" class="form-label">Category</label>
                                        <input name="cat_id" type="text" class="form-control"
                                            id="exampleFormControlInput1" placeholder="Sports"> --}}
                                    <label for="exampleFormControlInput1" class="form-label">Category</label>
                                    <select name="category_id" class="form-select " aria-label="Default select example">

                                        @foreach ($category as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <x-primary-button type="submit" class="ml-3">
                                        Add
                                    </x-primary-button>
                                    <input type="reset" value="Reset" class="btn" style="color: grey;">
                                </div>
                            </form>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
