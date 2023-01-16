<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add Category
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <center>
                        <div class="mt-2" id="add-card">
                            <form action="/addCategory" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Title</label>
                                    <input name="title" type="text" class="form-control"
                                        id="exampleFormControlInput1" placeholder="Matress">
                                </div>

                                <div class="mb-3">
                                    <x-primary-button type="submit" class="ml-3">
                                        Add
                                    </x-primary-button>
                                    <input type="reset" value="Reset" class="btn">
                                </div>
                            </form>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
