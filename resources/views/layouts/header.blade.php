<nav class="bg-white-500 flex flex-wrap items-center justify-between border-b-2 p-6">
    <div class="mr-6 flex flex-shrink-0 items-center text-white">
        <img src="{{ asset('storage/images/logoeam.png') }}" alt="None">
    </div>
    <div class="block lg:hidden">
    </div>
    <div class="block w-full flex-grow-0 lg:flex lg:w-auto lg:items-center">
        <div class="text-sm lg:flex-grow">
            <a href="/" class="ml-4 block text-xl text-gray-700 hover:text-gray-500 lg:mt-0 lg:inline-block">
                Home
            </a>
            @if (Auth::check())
                @if (auth()->user()->user_type == 'admin')
                    <a href="{{ url('/users') }}"
                        class="ml-4 block text-xl text-gray-700 hover:text-gray-500 lg:mt-0 lg:inline-block">Users</a>
                @endif
                <a href="{{ url('/appraisals') }}"
                    class="ml-4 block text-xl text-gray-700 hover:text-gray-500 lg:mt-0 lg:inline-block">Appraisals</a>
                <a href="{{ url('/loans') }}"
                    class="ml-4 block text-xl text-gray-700 hover:text-gray-500 lg:mt-0 lg:inline-block">Loans</a>
                <div class="ml-4 block text-xl text-gray-700 hover:text-gray-500 lg:mt-0 lg:inline-block">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="route('logout')" onclick="event.preventDefault();
                        this.closest('form').submit();">Log Out
                        </a>
                </div>
                </form>
            @else
                <a href="{{ route('login') }}"
                    class="ml-4 block text-xl text-gray-700 hover:text-gray-500 lg:mt-0 lg:inline-block">Log in</a>
                <a href="{{ route('register') }}"
                    class="ml-4 block text-xl text-gray-700 hover:text-gray-500 lg:mt-0 lg:inline-block">Register</a>
            @endif
        </div>

    </div>
</nav>
