<form action="/customer" method="post">  
    @csrf
    <h1>Add new customer</h1>
    <div>
        <label for="name">customer's name</label>
        <input type="text" name="name" id=""autocomplete = false value="{{ old('name') }}">
        @error('name') <strong><p>{{ $message }}</p></strong> @enderror
    </div>
    <br>
    <div>
        <label for="email">customer's email address</label>
        <input type="email" name="email" id=""autocomplete = false value="{{ old('email') }}">
        @error('email') <strong><p>{{ $message }}</p></strong> @enderror
    </div>
    <br>
    <button type="submit">Add customer</button> 
</form>

