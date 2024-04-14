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
    <div class="h-screen flex flex-col items-center pt-10 md:pt-16 lg:pt-32">
        <h1 class="text-4xl md:text-7xl lg:text-8xl text-center pb-10 md:pb-16 lg:pb-20 font-bold">Welcome to a totally legit plant store!</h1>
        <p class="font-bold text-center text-lg md:text-xl pb-7 md:pb-12 lg:pb-16 px-10">A totally legit plant store offers a huge variety of thing that you and only you can buy!</p>
        <a href="{{ route('register') }}" class="btn-lg text-xl">Start Buying Plants!</a>
    </div>
    <div>
        <h3>What is a totally legit plant store?</h3>
        <p>            
            Welcome to a totally legit plant store, your digital sanctuary for 
            all things green and glorious! Nestled within the virtual realms of cyberspace, 
            this verdant emporium is a haven for plant enthusiasts, whether you're a seasoned 
            horticulturist or a budding green thumb just beginning your leafy journey.
        </p>
        <p>
            As you venture through the digital corridors of this botanical wonderland, 
            you'll find yourself immersed in a kaleidoscope of colors, textures, and scents, 
            each beckoning you to explore further. From the delicate tendrils of trailing 
            vines to the robust foliage of tropical giants, there's a plant for every corner 
            of your home, office, or garden oasis.
        </p>
        <p>
            At a totally legit plant store, authenticity reigns supreme. Every plant offered 
            is sourced with care and consideration, cultivated by passionate growers dedicated 
            to nurturing nature's bounty. Whether you're seeking rare specimens to add to your 
            collection or dependable classics to brighten your space, rest assured that each 
            leafy friend is hand-selected for its health, vitality, and sheer botanical beauty.
        </p>
        <p>
            But this isn't just any ordinary online nursery. a totally legit plant store is 
            more than just a place to purchase plants—it's a thriving community of plant 
            enthusiasts united by a shared love of all things green. Dive into our vibrant 
            forums, where you can swap gardening tips, share success stories, and seek advice 
            from fellow plant aficionados. Connect with like-minded individuals from across the 
            globe and cultivate friendships as lush and vibrant as the foliage in your own home.
        </p>
        <p>
            So whether you're seeking to transform your living space into a lush urban jungle, 
            create a serene sanctuary filled with greenery, or simply add a touch of natural beauty 
            to your surroundings, look no further than a totally legit plant store. With our 
            unparalleled selection, expert guidance, and vibrant community, we're here to help you 
            cultivate your greenest dreams and embark on a botanical adventure unlike any other. \
            Welcome to the jungle — it's totally legit.
        </p>
    </div>
</div>


@include('partials/footer')