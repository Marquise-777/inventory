<x-app-layout>
    <style>
        @media screen and (min-width: 768px) {

            #add-card {
                width: 40rem;
            }
        }
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add Supplier
        </h2>
    </x-slot>

    <div class="py-3">
        <div class="max-w-1xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <center>
                        <div class="mt-2" id="add-card">
                            <form action="/addsupplier" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Title</label>
                                    <input name="title" type="text" class="form-control"
                                        id="exampleFormControlInput1" placeholder="Matress">
                                </div>

                                <div class="mb-3">
                                    <x-primary-button type="submit" class="ml-3 me-2">
                                        Add
                                    </x-primary-button>
                                    <input type="reset" value="Reset" class="">
                                </div>
                            </form>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
