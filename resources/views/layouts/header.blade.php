<nav class="bg-white-500 flex flex-wrap items-center justify-between border-b-2 p-6">
    <div class="mr-6 flex flex-shrink-0 items-center text-white">
        <img src="{{ asset('storage/images/logoeam.png') }}" alt="None">
    </div>
    <div class="block lg:hidden">
    </div>
    <div class="block w-full flex-grow-0 lg:flex lg:w-auto lg:items-center">
        <div class="text-sm lg:flex-grow">
            <a href="/" class="block text-2xl text-gray-700 hover:text-gray-500 lg:mt-0 lg:inline-block">
                Home
            </a>

        </div>
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/appraisals') }}"
                    class="ml-4 block text-2xl text-gray-700 hover:text-gray-500 lg:mt-0 lg:inline-block">Appraisals</a>
                <a href="{{ url('/loans') }}"
                    class="ml-4 block text-2xl text-gray-700 hover:text-gray-500 lg:mt-0 lg:inline-block">Loans</a>


                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="route('logout')"
                        class="ml-4 block text-2xl text-gray-700 hover:text-gray-500 lg:mt-0 lg:inline-block" onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
            @else
                <a href="{{ route('login') }}"
                    class="ml-4 block text-2xl text-gray-700 hover:text-gray-500 lg:mt-0 lg:inline-block">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="ml-4 block text-2xl text-gray-700 hover:text-gray-500 lg:mt-0 lg:inline-block">Register</a>
                @endif
            @endauth
        @endif
    </div>
</nav>
