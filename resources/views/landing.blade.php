@include('partials/header')
@if (Route::has('login'))
    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
        @auth
            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                Dashboard
            </a>
        @else
            <a href="{{ route('login') }}" class="font-semibold text-gray-900 hover:text-gray-600 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                Log in
            </a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-900 hover:text-gray-600 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                    Register
                </a>
            @endif
        @endauth
    </div>
@endif

<div class="container mx-auto antialiased">
    <div class="flex flex-col items-center">
        <h1 class="text-4xl md:text-7xl lg:text-8xl text-center py-10 md:py-16 lg:py-20 font-bold">Welcome to a totally legit plant store!</h1>
        <a href="{{ route('register') }}" class="btn">Make a New Account</a>
        <p>Something</p>
    </div>
</div>


@include('partials/footer')