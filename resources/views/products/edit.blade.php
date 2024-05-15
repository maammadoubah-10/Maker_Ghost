<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $product->name }}">
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description">{{ $product->description }}</textarea>
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="text" id="price" name="price" value="{{ $product->price }}">
        </div>
        <button type="submit">Save</button>
    </form>
</body>
</html>
