@include('partials/header')

<x-nav />
<x-toast />

<div class="containter mx-auto flex justify-center">
    <table class="table-auto ">
        <thead>
            <tr>
                <th class="px-3 py-1">Product Name</th>
                <th class="px-3 py-1">Product Price</th>
                <th class="px-3 py-1">Amount to Order</th>
                <th class="px-3 py-1"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $items)
                <form method="POST" action="{{ route('order.store') }}">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $items->id }}" required>
                    <tr>
                        <td class="px-3 py-1">{{ $items->name }}</td>
                        <td class="px-3 py-1 text-center">₱ {{ $items->price }}</td>
                        <td class="px-3 py-1"><input type="number" name="amount" required></td>
                        <td class="px-3 py-1"><button class="btn" type="submit">Order</button></td>
                    </tr>
                </form>
            @endforeach
        </tbody>
    </table>
</div>

@include('partials/footer')