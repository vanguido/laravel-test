@csrf
        
<label for="name">Name</label>
<input type="text" name="name" id="name" value="{{ old('name', $product->name ?? '') }}">

<label for="description">Description</label>
<textarea name="description" id="description">{{ old('description', $product->description ?? '') }}</textarea>

<label for="price">Price</label>
<input type="text" name="price" id="price" placeholder="0.00" value="{{ old('price', $product->price ?? '') }}">

<button>Submit</button>
