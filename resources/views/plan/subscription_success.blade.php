<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Success
        </h2>
    </x-slot>

    <div class="">
        <div class="max-w-1xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="">

                        <div class="card-body">

                            <div class="alert alert-success">
                                Subscription purchased successfully!
                            </div>
                            <a href="/dashboard" class="btn btn-secondary"> Go Back To Dashboard</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
