<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Inventory Subscription
        </h2>
        <h3 class="text-gray-800">Pricing</h3>
    </x-slot>

    <div class="">
        <div class="max-w-1xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                    <div class="row text-center align-items-end">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <div class="bg-white p-5 rounded-lg shadow">
                                <h1 class="h6 text-uppercase font-weight-bold mb-4">FREE</h1>
                                <h2 class="h1 font-weight-bold">₹0<span class="text-small font-weight-normal ml-2">/
                                        free</span>
                                </h2>

                                <div class="custom-separator my-4 mx-auto bg-primary"></div>

                                <ul class="list-unstyled my-5 text-small text-left">
                                    <li class="mb-3">
                                        <i class="fa fa-check mr-2 text-primary"></i> Basic Feature
                                    </li>
                                    <li class="mb-3">
                                        <i class="fa fa-check mr-2 text-primary"></i> 10mbps Bandwidth
                                    </li>
                                    <li class="mb-3">
                                        <i class="fa fa-check mr-2 text-primary"></i> 300MB
                                    </li>
                                    <li class="mb-3 text-muted">
                                        <i class="fa fa-times mr-2"></i>
                                        <del>Remove WaterMark</del>
                                    </li>
                                    <li class="mb-3 text-muted">
                                        <i class="fa fa-times mr-2"></i>
                                        <del>Unlimited Categories</del>
                                    </li>
                                    <li class="mb-3 text-muted">
                                        <i class="fa fa-times mr-2"></i>
                                        <del>Unlimited Suppliers</del>
                                    </li>
                                </ul>
                                <a href="#" class="btn btn-primary btn-block shadow rounded-pill">Free</a>
                            </div>
                        </div>

                        @foreach ($plans as $plan)
                            <div class="col-lg-4 mb-5 mb-lg-0">
                                <div class="bg-white p-5 rounded-lg shadow">
                                    <h1 class="h6 text-uppercase font-weight-bold mb-4">{{ $plan->name }}</h1>
                                    <h2 class="h1 font-weight-bold">₹{{ $plan->price }}<span
                                            class="text-small font-weight-normal ml-2">/ month</span></h2>

                                    <div class="custom-separator my-4 mx-auto bg-primary"></div>

                                    <ul class="list-unstyled my-5 text-small text-left font-weight-normal">
                                        <li class="mb-3">
                                            <i class="fa fa-check mr-2 text-primary"></i> Basic Feature
                                        </li>
                                        <li class="mb-3">
                                            <i class="fa fa-check mr-2 text-primary"></i> 100mbps Bandwidth
                                        </li>
                                        <li class="mb-3">
                                            <i class="fa fa-check mr-2 text-primary"></i> 1Gb
                                        </li>
                                        <li class="mb-3">
                                            <i class="fa fa-check mr-2 text-primary"></i>Remove WaterMark
                                        </li>

                                        <li class="mb-3 {{ $plan->name == 'Premium' ? '' : 'text-muted' }}">
                                            <i
                                                class="fa mr-2  {{ $plan->name == 'Premium' ? 'fa-check text-primary' : 'fa-times' }} "></i>
                                            {{-- {{ $plan->name == 'Premium' ? ' Unlimited Categories' : '<del>Unlimited Categories</del>' }} --}}
                                            @if ($plan->name == 'Premium')
                                                Unlimited Categories
                                            @else
                                                <del>Unlimited Categories</del>
                                            @endif
                                        </li>

                                        <li class="mb-3 {{ $plan->name == 'Premium' ? '' : 'text-muted' }}">
                                            <i
                                                class="fa mr-2 {{ $plan->name == 'Premium' ? 'fa-check text-primary' : 'fa-times' }} "></i>
                                            {{-- <del>Unlimited Suppliers</del> --}}
                                            @if ($plan->name == 'Premium')
                                                Unlimited Suppliers
                                            @else
                                                <del>Unlimited Suppliers</del>
                                            @endif
                                        </li>
                                    </ul>
                                    <a href="{{ route('plans.show', $plan->slug) }}"
                                        class="btn btn-primary btn-block shadow rounded-pill">Buy Now</a>
                                </div>
                            </div>
                        @endforeach
                    </div>


                </div>
            </div>
        </div>
</x-app-layout>
