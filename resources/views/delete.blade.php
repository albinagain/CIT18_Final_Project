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
                <th></th>
            </tr>
        </thead>
        <form method="POST" action="{{ route('order.destroy') }}">
            @csrf
            @method('DELETE')
            <tbody>
                @foreach($data as $items)
                    <tr>
                        <td>{{ $items->product->name }}</td>
                        <td>₱ {{ $items->product->price }}</td>
                        <td>{{ $items->amount }}</td>
                        <td>{{ $items->created_at }}</td>
                        <td><input type="checkbox" name="to-delete[]" value="{{ $items->id }}"></td>
                    </tr>
                @endforeach
            </tbody>
            <button class="btn" type="submit">Delete Selected</button>
        </form>
    </table>
</div>
@include('partials/footer')