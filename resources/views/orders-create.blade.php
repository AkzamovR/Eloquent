@extends('layout.base') 

@section('title', 'DétailCommande') 

@section('content')
<form action="/orders/create" method="post" class="bg-white shadow-md rounded-lg p-6 space-y-4 ">
  @csrf
  <div>
    <label for="orderNumber" class="block font-medium mb-1">Numéro de commande</label>
    <input type="text" name="orderNumber" id="orderNumber" class="border rounded-md px-3 py-2 w-full">
  </div>
  <div>
    <label for="status" class="block font-medium mb-1">Statut</label>
        <select name="status" id="status" class="border rounded-md px-3 py-2 w-full">
            <option value="Shipped">Shipped</option>
            <option value="Cancelled">Cancelled</option>
            <option value="Disputed">Disputed</option>
            <option value="On Hold">On Hold</option>
            <option value="In Progress">In Progress</option>
        </select>
  </div>
  <div>
    <label for="comments" class="block font-medium mb-1">Commentaires</label>
    <textarea name="comments" id="comments" cols="30" rows="5" class="border rounded-md px-3 py-2 w-full"></textarea>
  </div>
  <div>
    <label for="customerNumber" class="block font-medium mb-1">Numéro de client</label>
    <select name="customerNumber" id="customerNumber" class="border rounded-md px-3 py-2 w-full">
      @foreach($customers as $customer)
        <option value="{{$customer->customerNumber}}">{{$customer->contactLastName}} {{$customer->contactFirstName}}</option>
      @endforeach
    </select>
  </div>
  <div>
    <label for="checkNumber" class="block font-medium mb-1">Commande Check</label>
    <input type="text" name="checkNumber" id="checkNumber" class="border rounded-md px-3 py-2 w-full">
  </div>
  <div>
    <label for="amount" class="block font-medium mb-1">Montant</label>
    <input type="text" name="amount" id="amount" class="border rounded-md px-3 py-2 w-full">
  </div>
  <div>
    <input type="submit" value="Créer la commande" class="bg-blue-500 hover:bg-blue-600 text-white font-medium px-4 py-2 rounded-md">
  </div>
</form>
@endsection