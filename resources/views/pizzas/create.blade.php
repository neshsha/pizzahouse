@extends('layouts.app')

@section('content')

@section('content')
       <div class="wrapper create-pizza">
       	<h1>Create a new pizza</h1>
       	<form action="/pizzas" method="POST">
       		@csrf
       		<label for="name">Your name:</label>
       		<input type="text" name="name" id="name">
       		<label for="type">Choozze pizza type:</label>
       		 <select name="type" id="type">
       		 	<option value="margarita">Margarita</option>
       		 	<option value="hawaiian">Hawaian</option>
       		 	<option value="veg supreme">Veg supreme</option>
       		 	<option value="vulcano">Vulcano</option>
       		 </select>
       		 <label for="base">Choozze pizza base:</label>
       		 <select name="base" id="base">
       		 	<option value="cheesy crust">Cheesy crust</option>
       		 	<option value="garlic crust">Garlic crust</option>
       		 	<option value="thin & crispy">Thin & crispy</option>
       		 	<option value="thick">Thick</option>
       		 </select>
       		 <fieldset>
       		 	<label>Extra toppings</label><br>
       		 	<input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms <br>
       		 	<input type="checkbox" name="toppings[]" value="peppers">Peppers <br>
       		 	<input type="checkbox" name="toppings[]" value="garlic">Garlic <br>
       		 	<input type="checkbox" name="toppings[]" value="olives">Olives <br>
       		 </fieldset>
       		 <input type="submit" value="Order pizza">
       	</form>
       </div>
@endsection
