    @extends('layouts.master')
    @section('title', 'Pay Installment')
    @section('content')
        <div class="flex min-h-screen">
            <aside class="h-screen min-w-[270px] overflow-y-auto bg-tedja-black text-white [&::-webkit-scrollbar]:hidden">
                <div class="flex h-full w-full flex-col gap-[40px] pt-[40px]">
                    <div class="pl-[30px]">
                        <a href="overview.html" class="shrink-0">
                            <img src="{{ asset('assets/images/logos/logo-white.svg') }}" alt="icon" />
                        </a>
                    </div>
                    <nav class="flex flex-col gap-[40px] pb-[40px] pl-[30px]">
                        <section id="General" class="flex flex-col gap-[24px]">
                            <h3 class="text-sm font-semibold leading-[21px]">GENERAL</h3>
                            <ul class="flex flex-col gap-[24px]">
                                <li class="group">
                                    <a href="">
                                        <div class="relative flex items-center gap-[6px]">
                                            <img src="{{ asset('assets/images/icons/overview-n.svg') }}" alt="icon"
                                                class="shrink-0 group-[&.active]:hidden" />
                                            <p class="group-[&.active]:font-semibold group-[&.active]:text-tedja-green">
                                                Overview</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="active group">
                                    <a href="{{ route('dashboard') }}">
                                        <div class="relative flex items-center gap-[6px]">
                                            <img src="{{ asset('assets/images/icons/mortgages-y.svg') }}" alt="icon"
                                                class="hidden shrink-0 group-[&.active]:block" />
                                            <p class="group-[&.active]:font-semibold group-[&.active]:text-tedja-green">
                                                Mortgages</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="group">
                                    <a href="">
                                        <div class="relative flex items-center gap-[6px]">
                                            <img src="{{ asset('assets/images/icons/bank-interests-n.svg') }}" alt="icon"
                                                class="shrink-0 group-[&.active]:hidden" />
                                            <p class="group-[&.active]:font-semibold group-[&.active]:text-tedja-green">Bank
                                                Interests</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="group">
                                    <a href="">
                                        <div class="relative flex items-center gap-[6px]">
                                            <img src="{{ asset('assets/images/icons/big-rewards-n.svg') }}" alt="icon"
                                                class="shrink-0 group-[&.active]:hidden" />
                                            <p class="group-[&.active]:font-semibold group-[&.active]:text-tedja-green">Big
                                                Rewards</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </section>
                        <section id="Others" class="flex flex-col gap-[24px]">
                            <h3 class="text-sm font-semibold leading-[21px]">OTHERS</h3>
                            <ul class="flex flex-col gap-[24px]">
                                <li class="group">
                                    <a href="">
                                        <div class="relative flex items-center gap-[6px]">
                                            <img src="{{ asset('assets/images/icons/help-center-n.svg') }}" alt="icon"
                                                class="shrink-0 group-[&.active]:hidden" />
                                            <p class="group-[&.active]:font-semibold group-[&.active]:text-tedja-green">Help
                                                Center</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="group">
                                    <a href="">
                                        <div class="relative flex items-center gap-[6px]">
                                            <img src="{{ asset('assets/images/icons/supports-n.svg') }}" alt="icon"
                                                class="shrink-0 group-[&.active]:hidden" />
                                            <p class="group-[&.active]:font-semibold group-[&.active]:text-tedja-green">
                                                Supports</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="group">
                                    <a href="">
                                        <div class="relative flex items-center gap-[6px]">
                                            <img src="{{ asset('assets/images/icons/settings-n.svg') }}" alt="icon"
                                                class="shrink-0 group-[&.active]:hidden" />
                                            <p class="group-[&.active]:font-semibold group-[&.active]:text-tedja-green">
                                                Settings</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </section>
                    </nav>
                </div>
            </aside>
            <div class="h-screen w-full overflow-y-auto pt-[30px] px-[30px]">
                <section id="NavTop" class="flex w-full items-center justify-between bg-white p-4 rounded-3xl">
                    <form class="relative">
                        <button type="submit" class="absolute right-5 top-1/2 shrink-0 translate-y-[-50%]">
                            <img src="{{ asset('assets/images/icons/search.svg') }}" alt="icon" />
                        </button>
                        <input type="text"
                            class="w-[440px] placeholder:font-normal placeholder:text-base placeholder:leading-[24px] placeholder:text-tedja-secondary rounded-full border border-tedja-black py-[14px] pl-5 focus:outline-none pr-[64px] outline-none focus:ring-[2px] focus:ring-tedja-blue focus:border-transparent transition-all duration-300"
                            placeholder="Search your mortgage" />
                    </form>
                    <div class="flex items-center gap-5">
                        <div class="flex items-center gap-[12px]">
                            <a href="" class="shrink-0">
                                <div
                                    class="p-[13px] rounded-full border border-[#F2F2F4] hover:ring-[2px] hover:ring-tedja-blue transition-all duration-300">
                                    <img src="{{ asset('assets/images/icons/device-message.svg') }}" alt="icon" />
                                </div>
                                
                            </a>
                            <a href="" class="shrink-0">
                                <div
                                    class="p-[13px] rounded-full border border-[#F2F2F4] hover:ring-[2px] hover:ring-tedja-blue transition-all duration-300">
                                    <img src="{{ asset('assets/images/icons/cup.svg') }}" alt="icon" />
                                </div>
                            </a>
                            <a href="" class="shrink-0">
                                <div
                                    class="p-[13px] rounded-full border border-[#F2F2F4] hover:ring-[2px] hover:ring-tedja-blue transition-all duration-300">
                                    <img src="{{ asset('assets/images/icons/folder-favorite.svg') }}" alt="icon" />
                                </div>
                            </a>

                        </div>
                        <div class="w-px bg-[#F2F2F4] h-[50px]"></div>
                        <button id="Profile" class="relative">
                            <div class="flex items-center gap-[14px]">
                                <div class="flex text-right flex-col gap-0.5">
                                    <p class="text-sm text-tedja-secondary">Hello,</p>
                                    <p class="font-semibold">
                                        {{ Auth::user()->name }}
                                    </p>
                                </div>
                                <div class="flex rounded-full size-[50px] overflow-hidden">
                                    <img src="{{ Storage::url(Auth::user()->photo) }}" class="w-full h-full object-cover" alt="photo">
                                </div>
                            </div>
                            <ul class="hidden absolute top-full mt-[10px] right-0 flex flex-col w-[170px] shrink-0 h-fit text-left rounded-xl border border-tedja-border py-5 px-5 bg-white shadow-[0px_10px_30px_0px_#B8B8B840] gap-[14px]">
                                <li>
                                    <a href="#" class="hover:text-tedja-blue transition-all duration-300">Rewards</a>
                                </li>
                                <li>
                                    <a href="{{ route('dashboard') }}" class="hover:text-tedja-blue transition-all duration-300">My Mortgages</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:text-tedja-blue transition-all duration-300">Learn Property</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:text-tedja-blue transition-all duration-300">Settings</a>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a :href="route('logout')" class="hover:text-tedja-blue transition-all duration-300"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </a>
                                </form>
                                </li>
                            </ul>
                        </button>
                    </div>
                </section>
                <main class="flex w-full flex-col justify-center gap-[30px] pt-[28px] pb-[70px]">
                    <nav>
                        <ol class="flex items-center gap-[14px]">
                            <li>
                                <a href="{{ route('dashboard') }}">Mortgages</a>
                            </li>
                            <li>/</li>
                            <li>
                                <a href="{{ route('dashboard.mortgage.details', $mortgageRequest) }}">Details</a>
                            </li>
                            <li>/</li>
                            <li>
                                <span class="font-bold">Payment</span>
                            </li>
                        </ol>
                    </nav>
                    <header class="flex flex-col gap-[6px]">
                        <h1 class="text-[26px] font-bold leading-[39px]">Mortgage Details</h1>
                        <p class="text-sm leading-[21px] text-tedja-secondary">Tedja always make your family comfortable</p>
                    </header>
                    <div class="flex gap-[30px]">
                        <section id="Hero"
                            class="flex flex-col h-fit gap-[12px] px-[10px] pt-[10px] pb-[20px] w-[357px] shrink-0 rounded-[30px] border border-[#F2F2F4] bg-white">
                            <div class="w-full h-[240px] rounded-[30px] overflow-hidden justify-center items-center">
                                <img src="{{ Storage::url($mortgageRequest->house->thumbnail) }}" alt="image"
                                    class="size-full object-cover">
                            </div>
                            <div class="flex flex-col gap-[18px] px-[10px]">
                                <div class="flex flex-col gap-[6px]">
                                    <h2 class="font-bold text-lg leading-[27px]">
                                        {{ $mortgageRequest->house->name }}
                                    </h2>
                                    <div class="flex items-center gap-[6px]">
                                        <img src="{{ asset('assets/images/icons/location.svg') }}" alt="icon" class="size-5 shrink-0">
                                        <p class="font-semibold text-sm leading-[21px]">
                                            {{ $mortgageRequest->house->city->name }}
                                        </p>
                                    </div>
                                </div>
                                <hr class="border-[#F2F2F4]">
                                <div class="grid grid-cols-2 gap-x-[12px] gap-y-[18px]">
                                    <div
                                        class="flex items-center gap-[6px] p-[10px] border border-[#F2F2F4] rounded-[14px]">
                                        <img src="{{ asset('assets/images/icons/slider-vertical.svg') }}" alt="icon"
                                            class="shrink-0 size-5">
                                        <p class="font-semibold text-sm leading-[21px]">
                                            {{ $mortgageRequest->house->bedroom }} Bedroom
                                        </p>
                                    </div>
                                    <div
                                        class="flex items-center gap-[6px] p-[10px] border border-[#F2F2F4] rounded-[14px]">
                                        <img src="{{ asset('assets/images/icons/slider-horizontal.svg') }}" alt="icon"
                                            class="shrink-0 size-5">
                                        <p class="font-semibold text-sm leading-[21px]">
                                            {{ $mortgageRequest->house->bathroom }} Bathroom
                                        </p>
                                    </div>
                                    <div
                                        class="flex items-center gap-[6px] p-[10px] border border-[#F2F2F4] rounded-[14px]">
                                        <img src="{{ asset('assets/images/icons/building.svg') }}" alt="icon" class="shrink-0 size-5">
                                        <p class="font-semibold text-sm leading-[21px]">
                                            {{ $mortgageRequest->house->land_area }} M²
                                        </p>
                                    </div>
                                    <div
                                        class="flex items-center gap-[6px] p-[10px] border border-[#F2F2F4] rounded-[14px]">
                                        <img src="{{ asset('assets/images/icons/maximize.svg') }}" alt="icon" class="shrink-0 size-5">
                                        <p class="font-semibold text-sm leading-[21px]">
                                            {{ $mortgageRequest->house->building_area }} M²
                                        </p>
                                    </div>
                                    <div
                                        class="flex items-center gap-[6px] p-[10px] border border-[#F2F2F4] rounded-[14px]">
                                        <img src="{{ asset('assets/images/icons/note-favorite.svg') }}" alt="icon" class="shrink-0 size-5">
                                        <p class="font-semibold text-sm leading-[21px]">
                                            {{ $mortgageRequest->house->certificate}}
                                        </p>
                                    </div>


                                    <div
                                        class="flex items-center gap-[6px] p-[10px] border border-[#F2F2F4] rounded-[14px]">
                                        <img src="{{ asset('assets/images/icons/flash.svg') }}" alt="icon" class="shrink-0 size-5">
                                        <p class="font-semibold text-sm leading-[21px]">
                                            {{ $mortgageRequest->house->electric}} Watts
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="w-full">
                            <form id="sampleForm" class="flex w-full flex-col gap-[30px]">
                                @csrf
                                <section id="KPRPaymentDetails"
                                    class="border border-[#F2F2F4] bg-white !h-fit w-full p-5 rounded-[20px] flex flex-col gap-4">
                                    <div class="flex items-center justify-between">
                                        <h4 class="font-semibold text-lg leading-[27px]">KPR Payment Details</h4>
                                        <button type="button" class="shrink-0" data-expand="KPRPaymentDetailsJ">
                                            <img src="{{ asset('assets/images/icons/arrow-circle-down.svg') }}" alt="icon"
                                                class="size-6 shrink-0 transition-all duration-300">
                                        </button>
                                    </div>

                                    <div class="flex flex-col gap-4" id="KPRPaymentDetailsJ">

                                        <hr class="border-[#F2F2F4]">
                                        <div class="flex flex-col gap-4">

                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center gap-2">
                                                    <img src="{{ asset('assets/images/icons/note.svg') }}" alt="icon"
                                                        class="size-6 shrink-0">
                                                    <p>Remaining Loan</p>
                                                </div>
                                                <strong class="font-semibold">
                                                    Rp {{ number_format($remainingLoanAmount, 0, '', '.') }}
                                                </strong>
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center gap-2">
                                                    <img src="{{ asset('assets/images/icons/note.svg') }}" alt="icon"
                                                        class="size-6 shrink-0">
                                                    <p>Monthly Payment</p>
                                                </div>
                                                <strong class="font-semibold">
                                                    Rp {{ number_format($monthlyPayment, 0, '', '.') }}
                                                </strong>
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center gap-2">
                                                    <img src="{{ asset('assets/images/icons/note.svg') }}" alt="icon"
                                                        class="size-6 shrink-0">
                                                    <p>PPN 11%</p>
                                                </div>
                                                <strong class="font-semibold">
                                                    Rp {{ number_format($totalTaxAmount, 0, '', '.') }}
                                                </strong>
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center gap-2">
                                                    <img src="{{ asset('assets/images/icons/note.svg') }}" alt="icon"
                                                        class="size-6 shrink-0">
                                                    <p>Insurance</p>
                                                </div>
                                                <strong class="font-semibold">
                                                    Rp {{ number_format($insurance, 0, '', '.') }}
                                                </strong>
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center gap-2">
                                                    <img src="{{ asset('assets/images/icons/note.svg') }}" alt="icon"
                                                        class="size-6 shrink-0">
                                                    <label for="grandTotal" class="text-gray-700 shrink-0">Grand Total
                                                        Amount</label>
                                                </div>
                                                <input type="text" id="grandTotal" name="grandTotal" value="Rp {{ number_format($grandTotalAmount, 0, '', '.') }}"
                                                    readonly
                                                    class="font-bold text-[20px] text-end leading-[30px] text-tedja-blue bg-transparent border-none focus:outline-none" />
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section id="MakeAPayment" class="border bg-white border-[#F2F2F4] !h-fit w-full p-5 rounded-[20px] flex flex-col gap-5">
                                @csrf
                                    <h4 class="font-semibold text-lg leading-[27px]">Make a Payment</h4>
                                    <hr class="border-[#F2F2F4]">
                                    <div class="flex items-center gap-[6px] pl-[7px] mx-auto">
                                        <img src="{{ asset('assets/images/icons/security-safe-blue-fill.svg') }}" alt="icon"
                                            class="size-6 shrink-0">
                                        <p class="font-semibold">All your privacy data secured with our system</p>
                                    </div>
                                    <hr class="border-[#F2F2F4]">
                                    <button type="submit" id="pay-button" class="bg-tedja-green rounded-full py-[14px] w-full flex justify-center font-semibold">Pay
                                        Now with Midtrans
                                    </button>
                                </section>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    @endsection
    @push('after-scripts')
    <script src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.clientKey') }}"></script>

        <script type="text/javascript">
            const payButton = document.getElementById('pay-button')
            payButton.addEventListener('click', function(e){
                e.preventDefault();
                // Fetch the snap token from your backend
                fetch('{{ route('dashboard.installment.payment_store_midtrans') }}',{
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
                    },
                    body: JSON.stringify({
                        // Any additional data you want to send with the request
                        mortgage_request_id: {{ $mortgageRequest->id }},
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.snap_token) {
                        // Trigger Midtrans Snap payment popup
                        snap.pay(data.snap_token, {
                            onSuccess: function(result){
                                window.location.href =
                                    '/dashboard/mortgage/{{ $mortgageRequest->id }}';
                            },
                            onPending: function(result){
                                alert('Payment Pending!');
                                window.location.href = "{{ route('dashboard') }}"
                            },
                            onError: function(result){
                                alert('Payment failed: ' + result.status_message);
                                window.location.href = "{{ route('dashboard') }}"
                            },
                            onClose: function(){
                                alert('Payment popup closed');
                                window.location.href = "{{ route('dashboard') }}"
                            }
                        });
                    } else {
                        alert('Error: ' + data.error);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            });
    </script>


        <script src="{{ asset('https://code.jquery.com/jquery-3.7.1.min.js') }}"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="{{  asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/navbar-dropdown.js')}}"></script>
    @endpush

