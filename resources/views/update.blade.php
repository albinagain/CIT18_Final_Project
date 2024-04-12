@include('partials/header')

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

<div class="containter mx-auto">
    <table class="table-auto ">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Amount Ordered</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $items)
            <form method="POST" action="{{ route('order.update', $items->id) }}">
                @csrf
                @method('PUT')
                <tr>
                    <td>{{ $items->product->name }}</td>
                    <td>₱ {{ $items->product->price }}</td>
                    <td><input type="number" name="amount" value="{{ $items->amount }}" required></td>
                    <td><button class="btn" type="submit">Update</button></td>
                </tr>
            </form>
        @endforeach
        </tbody>
    </table>
</div>

@include('partials/footer')