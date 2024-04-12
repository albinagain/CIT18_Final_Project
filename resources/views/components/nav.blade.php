@if (Route::has('login'))
    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10 flex space-x-4">
        <x-responsive-nav-link :href="route('profile.edit')">
            {{ __('Profile') }}
        </x-responsive-nav-link>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-responsive-nav-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-responsive-nav-link>
        </form>
    </div>
@endif
<div class="flex justify-center space-x-3 py-3">
    <a class="btn" href="{{ route('dashboard') }}">Dashboard</a>
    <a class="btn" href="{{ route('product') }}">New Order</a>
    <a class="btn" href="{{ route('update-order') }}">Edit Orders</a>
    <a class="btn" href="{{ route('delete-order') }}">Delete Orders</a>
</div>