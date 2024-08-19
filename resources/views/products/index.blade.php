
<x-layout>
    <h1>
        Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh
    </h1>

    <a href="{{ route('products.create') }}">Create Product</a>

    @foreach ($products as $product)
        <a href="{{ route('products.show', $product->id) }}"><h2>{{ $product->name }}</h2></a>
        <p>{{ $product->description }}</p>
        <p>{{ $product->price }}</p>
    @endforeach

    {{ $products->links('vendor.pagination.simple-default') }}
</x-layout>


