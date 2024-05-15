<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Assurez-vous que le chemin est correct par rapport à votre structure de fichiers


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Récupérer tous les produits

        // Passer les produits à la vue products.blade.php
        return view('products.index', compact('products'));
    }
    public function create()
{
    return view('products.create');
}

public function store(Request $request)
{
    // Validation des données du formulaire
    $validatedData = $request->validate([
        'name' => 'required',
        'description' => 'required', // Ajout de la règle pour la description
        'price' => 'required|numeric',
        // Autres règles de validation selon vos besoins
    ]);

    // Créer un nouveau produit avec les données validées
    $product = Product::create($validatedData);

    // Redirection avec un message de succès
    return redirect()->route('products.index')->with('success', 'Le produit a été ajouté avec succès.');
}

public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $validatedData = $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required|numeric',
    ]);

    $product->update($validatedData);

    return redirect()->route('products.index')->with('success', 'Product updated successfully.');
}


public function destroy($id)
{
    $product = Product::find($id);
    // Vérifiez si le produit existe
    if (!$product) {
        abort(404); // Produit non trouvé
    }
    $product->delete();
    // Redirection avec un message de succès
    return redirect()->route('products.index')->with('success', 'Le produit a été supprimé avec succès.');
}

public function edit($id)
{
    $product = Product::find($id);
    // Vérifiez si le produit existe
    if (!$product) {
        abort(404); // Produit non trouvé
    }
    return view('products.edit', compact('product'));
}

public function showAll()
{
    $products = Product::all(); // Récupérer tous les produits
    return view('products.showAll', compact('products'));
}


}
