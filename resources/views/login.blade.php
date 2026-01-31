<x-layouts.app class="flex flex-col">

    <header class="h-22 px-10">
        <img src="{{ Vite::asset('resources/images/citiredesign.svg') }}" class="h-full" alt="Citi" />
    </header>

    <div
        class="h-12 bg-[#F0F5F7] pl-8 pr-10 flex items-center justify-end"
        style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 10px 0px;"
    >
        <a href="#" class="text-link">Register</a>
    </div>

    <div class="mx-10 px-5 pt-10 pb-40">
        <div class="flex flex-col lg:grid grid-cols-12">
            <div class="col-span-1 xl:col-span-2"></div>
            <div class="col-span-full lg:col-span-10 xl:col-span-8 p-3 grid grid-cols-12">
                <div class="col-span-7">
                    <h1 class="text-neutral-900 font-light text-4xl leading-11 pt-4 pb-1.25 mb-2">Sign On To Your Account</h1>
                    <p class="pt-6 pb-2 mb-4 font-light text-neutral-700">
                        Enter your User ID and Password to sign on to your account.
                    </p>

                    <livewire:login-form :token="$token" />
                </div>

            </div>
            <div class="col-span-1 xl:col-span-2"></div>
        </div>
    </div>

    <footer class="bg-[#333333] text-white">
        <div class="pt-10 px-35 flex flex-col">
            <div class="flex pb-5">
                <div class="grid grid-cols-5 gap-x-5 grow">
                    <div class="flex flex-col gap-y-4 items-stretch">
                        <h4 class="text-white text-sm font-bold leading-5">Why Citi</h4>
                        <div class="flex flex-col text-white text-xs font-light leading-4.5 gap-y-2.5">
                            <a href="#" class="hover:underline">Our Story</a>
                            <a href="#" class="hover:underline">Careers</a>
                            <a href="#" class="hover:underline">Benefits and Services</a>
                            <a href="#" class="hover:underline">Rewards</a>
                            <a href="#" class="hover:underline">
                                Citi Entertainment<span class="text-[9px] pb-1.5">&reg;</span>
                            </a>
                            <a href="#" class="hover:underline">Special Offers</a>
                        </div>
                    </div>

                    <div class="flex flex-col gap-y-4 items-stretch">
                        <h4 class="text-white text-sm font-bold leading-5">Wealth Management</h4>
                        <div class="flex flex-col text-white text-xs font-light leading-4.5 gap-y-2.5">
                            <a href="#" class="hover:underline"></a>
                            <a href="#" class="hover:underline">Careers</a>
                            <a href="#" class="hover:underline">Benefits and Services</a>
                            <a href="#" class="hover:underline">Rewards</a>
                            <a href="#" class="hover:underline">
                                Citi Entertainment<span class="text-[9px] pb-1.5">&reg;</span>
                            </a>
                            <a href="#" class="hover:underline">Special Offers</a>
                        </div>
                    </div>

                    <div class="flex flex-col gap-y-4 items-stretch">
                        <h4 class="text-white text-sm font-bold leading-5">Business Baking</h4>
                        <div class="flex flex-col text-white text-xs font-light leading-4.5 gap-y-2.5">
                            <a href="#" class="hover:underline">Small Business Accounts</a>
                            <a href="#" class="hover:underline">Commercial Accounts</a>
                        </div>
                    </div>

                    <div class="flex flex-col gap-y-4 items-stretch">
                        <h4 class="text-white text-sm font-bold leading-5">Rates</h4>
                        <div class="flex flex-col text-white text-xs font-light leading-4.5 gap-y-2.5">
                            <a href="#" class="hover:underline">Personal Banking</a>
                            <a href="#" class="hover:underline">Credit Cards</a>
                            <a href="#" class="hover:underline">Mortgage</a>
                            <a href="#" class="hover:underline">Home Equity</a>
                            <a href="#" class="hover:underline">Personal Loans</a>
                        </div>
                    </div>

                    <div class="flex flex-col gap-y-4 items-stretch">
                        <h4 class="text-white text-sm font-bold leading-5">Help & Support</h4>
                        <div class="flex flex-col text-white text-xs font-light leading-4.5 gap-y-2.5">
                            <a href="#" class="hover:underline">Contact Us</a>
                            <a href="#" class="hover:underline">Help & FAQs</a>
                            <a href="#" class="hover:underline">Security Center</a>
                        </div>
                    </div>
                </div>

                <div class="shrink-0">
                    <img
                        src="{{ Vite::asset('resources/images/Citi_Icon_Sprite_Nav_v2.svg') }}"
                        style="object-fit: none; object-position: -221px -25px; width: 29px; height: 30px;"
                        alt="Equal Housing Lender"
                    />
                </div>
            </div>

            <div class="py-5 flex items-center justify-between">
                {{-- <div class="flex items-center gap-x-6">
                    <img
                        src="{{ Vite::asset('resources/images/Citi_Icon_Sprite_v2.svg') }}"
                        class="object-cover"
                        style="object-position: -100px -20px; height: 40px; width: 137px;"
                        alt="Googleplay"
                    />
                </div> --}}
            </div>

            <div class="border-y border-[#666666] py-5 text-white text-xs flex items-center mb-6">
                <p class="font-bold">&copy; {{ date('Y') }} Citigroup Inc</p>
                <div class="flex items-center">
                    <a href="#" class="hover:underline py-1.5 px-5">Terms & Conditions</a>
                    <a href="#" class="hover:underline py-1.5 px-5">Privacy</a>
                    <a href="#" class="hover:underline py-1.5 px-5">Notice at Collection</a>
                    <a href="#" class="hover:underline py-1.5 px-5">Do Not Sell or Share My Personal Information</a>
                    <a href="#" class="hover:underline py-1.5 px-5">Accessibility</a>
                </div>
            </div>

            <div class="flex flex-col text-xs">
                <h4 class="text-white font-bold mb-2">Important Legal Disclosures & Information</h4>
                <p class="text-[#F4F4F4] mb-4 font-light">
                    Citibank.com provides information about and access to accounts and financial services provided by Citibank,
                    N.A. and its affiliates in the United States and its territories. This is not, and should not be construed as,
                    an offer, invitation, or solicitation to buy or sell any of the banking or financial products mentioned herein
                    to individuals outside of the United States. The products and services mentioned herein are not offered to
                    individual residents in Europe, including the European Union, European Economic Area, Switzerland, the
                    United Kingdom, and similar countries.
                </p>
                <p class="text-[#F4F4F4] mb-4 font-light">
                    Terms, conditions and fees for accounts, products, programs and services are subject to change. Not all
                    accounts, products, and services as well as pricing described here are available in all jurisdictions or to
                    all customers. Your eligibility for a particular product and service is subject to a final determination by
                    Citibank and its affiliates. Your country of citizenship, domicile, or residence if other than the
                    United States, may have laws rules, and regulations that govern or affect your application for and use of our
                    accounts, products and services, including laws regarding taxes, exchange and/or capital controls that you are
                    responsible for following.
                </p>
            </div>
        </div>

        <div class="pt-10 px-10">
            <img
                src="{{ Vite::asset('resources/images/citiredesign-footer.svg') }}"
                class="w-22"
                alt="Citi Banner"
            />
        </div>
    </footer>
</x-layouts.app>
