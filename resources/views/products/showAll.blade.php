@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Liste des Produits</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Prix</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Ajouter au Panier</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
