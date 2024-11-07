@extends('layout.base') 

@section('title', 'DétailCommande') 

@section('content')
<div class="bg-white shadow-md rounded-lg p-6">
  <h2 class="text-2xl font-bold mb-4">Commande</h2>
  <div class="space-y-2">
    <span>Numero de Commande : {{ $order->orderNumber }}</span><br>
    <span>Date de commande : {{ $order->orderDate }}</span><br>
    <span>Date de Livraison : {{ $order->requiredDate }}</span><br>
    <span>Date d'envoie : {{ $order->shippedDate }}</span><br>
    <span>Statut de commande : {{ $order->status }}</span><br>
    <span>Commentaires : {{$order->comments}}</span><br>
  </div>

  <h2 class="text-2xl font-bold mb-4 mt-6">Client</h2>
  <div class="space-y-2">
    <span>Numero de Client : {{ $order->customer->customerNumber }}</span><br>
    <span>Nom du Client : {{ $order->customer->customerName }}</span><br>
    <span>Nom du Contact : {{ $order->customer->contactLastName }}</span><br>
    <span>Prénom du Contact : {{ $order->customer->contactFirstName }}</span><br>
    <span>Numero de contact : {{ $order->customer->phone }}</span><br>
  </div>

  <h2 class="text-2xl font-bold mb-4 mt-6">Détail</h2>
  <div class="overflow-x-auto">
    <table class="w-full border-collapse">
      <thead>
        <tr class="bg-gray-200">
          <th class="px-4 py-2 text-left">Numero de Commande</th>
          <th class="px-4 py-2 text-left">Code Produit</th>
          <th class="px-4 py-2 text-left">Quantité</th>
          <th class="px-4 py-2 text-left">Prix Unitaire</th>
          <th class="px-4 py-2 text-left">#</th>
        </tr>
      </thead>
      <tbody>
        @foreach($order->orderdetails as $or)
        <tr class="border-b">
          <td class="px-4 py-2">{{$or->orderNumber}}</td>
          <td class="px-4 py-2">{{$or->productCode}}</td>
          <td class="px-4 py-2">{{$or->quantityOrdered}}</td>
          <td class="px-4 py-2">{{$or->priceEach}}</td>
          <td class="px-4 py-2">{{$or->orderLineNumber}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection