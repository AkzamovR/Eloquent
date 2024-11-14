@extends('layout.base')
@section('title', 'Détail Client')
@section('content')
<div class="container my-5">
  <div class="row">
    <div class="col-12 col-md-8 offset-md-2">
      <div class="card shadow-sm">
        <div class="card-body">
          <h2 class="card-title mb-4 text-2xl font-bold">Client</h2>
          <div class="mb-3">
            <span class="fw-bold">Numéro de Client :</span> {{ $customer->customerNumber }}
          </div>
          <div class="mb-3">
            <span class="fw-bold">Nom du client :</span> {{ $customer->customerName }}
          </div>
          <div class="mb-3">
            <span class="fw-bold">Nom du contact :</span> {{ $customer->contactLastName }}
          </div>
          <div class="mb-3">
            <span class="fw-bold">Prénom du contact :</span> {{ $customer->contactFirstName }}
          </div>
          <div class="mb-3">
            <span class="fw-bold">Numéro de téléphone :</span> {{ $customer->phone }}
          </div>
          <div class="mb-3">
            <span class="fw-bold">Adresse :</span> {{ $customer->adresseLine1 }} {{ $customer->adresseLine2 }} {{ $customer->city }} {{ $customer->state }} {{ $customer->postalCode }} {{ $customer->country }}
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-12 col-md-8 offset-md-2">
      <div class="card shadow-sm">
        <div class="card-body">
          <h2 class="card-title mb-4 text-2xl font-bold">Commandes</h2>
          @foreach($customer->orders as $order)
          <div class="mb-3">
            <span class="fw-bold">Numéro de commande :</span> {{ $order->orderNumber }}
          </div>
          <div class="mb-3">
            <span class="fw-bold">Statut :</span> {{ $order->status }}
          </div>
          @foreach ($order->orderdetails as $orderdetail)
          <div class="card mb-3">
            <div class="card-body">
              <div class="mb-2">
                <span class="fw-bold">Code produit :</span> {{ $orderdetail->product->productCode }}
              </div>
              <div class="mb-2">
                <span class="fw-bold">Nom du produit :</span> {{ $orderdetail->product->productName }}
              </div>
              <div class="mb-2">
                <span class="fw-bold">Ligne de produit :</span> {{ $orderdetail->product->productLine }}
              </div>
              <div class="mb-2">
                <span class="fw-bold">Fournisseur :</span> {{ $orderdetail->product->productVendor }}
              </div>
            </div>
          </div>
          @endforeach
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-12 col-md-8 offset-md-2">
      <div class="card shadow-sm">
        <div class="card-body">
          <h2 class="card-title mb-4 text-2xl font-bold">Catégories</h2>
          @foreach ($customer->categories as $categorie)
          <div class="mb-3">
            <span class="fw-bold">Nom de la catégorie :</span> {{ $categorie->name }}
          </div>
          <div class="mb-3">
            <span class="fw-bold">Description :</span> {{ $categorie->description }}
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection