@include('partials/header')

<x-nav />
<x-toast />

<div class="containter mx-auto flex justify-center">
    <form method="POST" action="{{ route('order.destroy') }}">
        @csrf
        @method('DELETE')
        <table class="table-auto ">
            <thead>
                <tr>
                    <th class="px-3 py-1">Product Name</th>
                    <th class="px-3 py-1">Product Price</th>
                    <th class="px-3 py-1">Amount Ordered</th>
                    <th class="px-3 py-1">Date Ordered</th>
                    <th class="px-3 py-1"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $items)
                    <tr>
                        <td class="px-3 py-1">{{ $items->product->name }}</td>
                        <td class="px-3 py-1 text-center">₱ {{ $items->product->price }}</td>
                        <td class="px-3 py-1 text-center">{{ $items->amount }}</td>
                        <td class="px-3 py-1 text-center">{{ $items->created_at }}</td>
                        <td class="px-3 py-1"><input type="checkbox" name="to-delete[]" value="{{ $items->id }}"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button class="btn" type="submit">Delete Selected</button>
    </form>
</div>

@include('partials/footer')