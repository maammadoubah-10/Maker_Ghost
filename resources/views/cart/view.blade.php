<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Contenu du Panier</div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Prix</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($cartItems) && count($cartItems) > 0)
                            <!-- Afficher les éléments du panier -->
                            @foreach($cartItems as $item)
                                <tr>
                                    <td>{{ $item->product->name }}</td>
                                    <td>{{ $item->product->description }}</td>
                                    <td>{{ $item->product->price }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3">Le panier est vide</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
