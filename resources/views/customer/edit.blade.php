<form action="/customer" method="post">  
<h1>{{ $customer }}</h1>
    @csrf
    <h1>Add new customer</h1>
    <label for="name">customer's name</label>
<input type="text" name="name" id=""autocomplete = false placeholder="{{ $customer }}">
    <br>
    <label for="email">customer's email address</label>
    <input type="email" name="email" id=""autocomplete = false {{ $customer }}>
    <br>
    <button type="submit">Add customer</button> 
</form>

