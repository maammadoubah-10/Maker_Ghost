<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Ajouter un produit au panier.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function add(Product $product)
    {
        $cart = session()->get('cart');
    
        // Si le panier est vide, initialise-le
        if (!$cart) {
            $cart = [
                $product->id => [
                    'name' => $product->name,
                    'quantity' => 1,
                    'price' => $product->price,
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Produit ajouté au panier avec succès.');
        }
    
        // Si le produit est déjà dans le panier, incrémente la quantité
        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Quantité du produit augmentée dans le panier.');
        }
    
        // Si le produit n'est pas dans le panier, ajoute-le
        $cart[$product->id] = [
            'name' => $product->name,
            'quantity' => 1,
            'price' => $product->price,
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Produit ajouté au panier avec succès.');
    }

    /**
     * Afficher le contenu du panier.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Logique pour afficher le contenu du panier
        // Par exemple, récupérer les produits ajoutés depuis la session ou la base de données

        // Exemple simple : récupérer les ID des produits depuis la session et trouver les produits correspondants
        $cart = $request->session()->get('cart', []);
        $products = Product::whereIn('id', array_keys($cart))->get();

        return view('cart.index', ['products' => $products]);
    }

    public function showCart()
    {
        // Logique pour récupérer les produits ajoutés au panier
        $cartItems = session('cart'); // Supposons que vos produits ajoutés au panier sont stockés en session

        // Retourner la vue avec les produits ajoutés au panier
        return view('cart.show', ['cartItems' => $cartItems]);
    }

    public function checkout(Request $request)
    {
        // Logique pour le processus de paiement ou de commande
        // Par exemple, créer une nouvelle commande dans la base de données

        $order = new Order(); // Créer une nouvelle instance de modèle Order
        $order->user_id = auth()->user()->id; // Attribuer l'ID de l'utilisateur actuellement authentifié
        // Autres attributions pour la commande (comme les produits, le montant total, etc.)
        $order->save(); // Sauvegarder la commande dans la base de données

        // Vous pouvez également rediriger l'utilisateur vers une page de confirmation de commande
        return redirect()->route('confirmation')->with('success', 'Votre commande a été passée avec succès.');
    }

    // Autres méthodes du contrôleur...
}
