@include('partials/header')

<x-nav />
<x-toast />

<div class="containter mx-auto flex justify-center">
    <table class="table-auto">
        <thead>
            <tr>
                <th class="px-3 py-1">Product Name</th>
                <th class="px-3 py-1">Product Price</th>
                <th class="px-3 py-1">Amount Ordered</th>
                <th class="px-3 py-1">Date Ordered</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $items)
            <tr>
                <td class="px-3 py-1">{{ $items->product->name }}</td>
                <td class="px-3 py-1 text-center">₱ {{ $items->product->price }}</td>
                <td class="px-3 py-1 text-center">{{ $items->amount }}</td>
                <td class="px-3 py-1 text-center">{{ $items->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@include('partials/footer')