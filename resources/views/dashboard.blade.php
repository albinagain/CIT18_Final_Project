@include('partials/header')
<x-nav />

<div class="containter mx-auto">
    <table class="table-auto ">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Amount Ordered</th>
                <th>Date Ordered</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $items)
            <tr>
                <td>{{ $items->product->name }}</td>
                <td>₱ {{ $items->product->price }}</td>
                <td>{{ $items->amount }}</td>
                <td>{{ $items->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@include('partials/footer')