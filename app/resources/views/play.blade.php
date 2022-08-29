<?php
  use App\Models\Item;
?>

@foreach(Item::all() as $Item)
    <h1>Id: {{ $Item->iditem }}</h1>
    <h1>Name: {{$Item->name}}</h1>
@endforeach
