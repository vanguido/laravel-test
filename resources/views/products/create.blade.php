<x-layout>
    <h1>New Product</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="post" action="{{ route('products.store') }}">

        @csrf
        
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">

        <label for="description">Description</label>
        <textarea name="description" id="description" value="{{ old('description') }}"></textarea>

        <label for="price">Price</label>
        <input type="text" name="price" id="price" placeholder="0.00" value="{{ old('price') }}">

        <button>Submit</button>
    </form>
</x-layout>>
