@include('partials/header')

<x-nav />
<x-toast />

<div class="containter mx-auto flex justify-center">
    <table class="table-auto ">
        <thead>
            <tr>
                <th class="px-3 py-1">Product Name</th>
                <th class="px-3 py-1">Product Price</th>
                <th class="px-3 py-1">Amount Ordered</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $items)
            <form method="POST" action="{{ route('order.update', $items->id) }}">
                @csrf
                @method('PUT')
                <tr>
                    <td class="px-3 py-1">{{ $items->product->name }}</td>
                    <td class="px-3 py-1">₱ {{ $items->product->price }}</td>
                    <td class="px-3 py-1"><input type="number" name="amount" value="{{ $items->amount }}" required></td>
                    <td class="px-3 py-1"><button class="btn" type="submit">Update</button></td>
                </tr>
            </form>
        @endforeach
        </tbody>
    </table>
</div>

@include('partials/footer')