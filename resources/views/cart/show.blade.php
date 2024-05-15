@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Produits dans votre panier</h1>
        @if($cartItems)
            <table class="table">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Prix</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($cartItems as $item)
    <tr>
        <td>{{ $item['name'] }}</td>
        <td>{{ isset($item['description']) ? $item['description'] : 'Description non disponible' }}</td>
        <td>{{ $item['price'] }}</td>
    </tr>
@endforeach


                </tbody>
            </table>
            <!-- Ajoutez ici la logique pour acheter les produits -->
            <a href="{{ route('checkout') }}" class="btn btn-primary">Acheter les produits</a>
        @else
            <p>Votre panier est vide.</p>
        @endif
    </div>
@endsection
