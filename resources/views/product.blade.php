@include('partials/header')
<x-nav />

<div class="containter mx-auto">
    <table class="table-auto ">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Amount to Order</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $items)
                <form method="POST" action="{{ route('order.store') }}">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $items->id }}" required>
                    <tr>
                        <td>{{ $items->name }}</td>
                        <td>₱ {{ $items->price }}</td>
                        <td><input type="number" name="amount" required></td>
                        <td><button class="btn" type="submit">Order</button></td>
                    </tr>
                </form>
            @endforeach
        </tbody>
    </table>
</div>

@include('partials/footer')