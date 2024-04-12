@include('partials/header')
<x-nav />

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