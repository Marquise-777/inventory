<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Payments
        </h2>
    </x-slot>

    <div class="">
        <div class="max-w-1xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="">
                        <div class="card-header d-flex">
                            <img src="https://img.freepik.com/free-vector/concept-landing-page-credit-card-payment_23-2148298751.jpg?w=826&t=st=1674540000~exp=1674540600~hmac=b56f61d1b67595a328326e4c164f6258c42e2afb2d2b70ff4566651997e48d0b"
                                alt="" width="50" height="50">
                            <p class="mt-4 ms-3 text-md">
                                You will be charged <b class="text-success"> ₹{{ number_format($plan->price, 2) }} </b> for {{ $plan->name }} Plan
                            </p>
                        </div>

                        <div class="card-body">

                            <form id="payment-form" action="{{ route('subscription.create') }}" method="POST">
                                @csrf
                                <input type="hidden" name="plan" id="plan" value="{{ $plan->id }}">

                                <div class="row">
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" name="name" id="card-holder-name"
                                                class="form-control" value="" placeholder="Name on the card">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="">Card details</label>
                                            <div id="card-element"></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <hr>
                                        <button type="submit" class="btn btn-primary" id="card-button"
                                            data-secret="{{ $intent->client_secret }}">Purchase</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripe = Stripe('{{ env('STRIPE_KEY') }}')

        const elements = stripe.elements()
        const cardElement = elements.create('card')

        cardElement.mount('#card-element')

        const form = document.getElementById('payment-form')
        const cardBtn = document.getElementById('card-button')
        const cardHolderName = document.getElementById('card-holder-name')

        form.addEventListener('submit', async (e) => {
            e.preventDefault()

            cardBtn.disabled = true
            const {
                setupIntent,
                error
            } = await stripe.confirmCardSetup(
                cardBtn.dataset.secret, {
                    payment_method: {
                        card: cardElement,
                        billing_details: {
                            name: cardHolderName.value
                        }
                    }
                }
            )

            if (error) {
                cardBtn.disable = false
            } else {
                let token = document.createElement('input')
                token.setAttribute('type', 'hidden')
                token.setAttribute('name', 'token')
                token.setAttribute('value', setupIntent.payment_method)
                form.appendChild(token)
                form.submit();
            }
        })
    </script>
</x-app-layout>
