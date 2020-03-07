<div>
    <h1>Add new customer</h1>
    <label for="name">customer's name</label>
    <input type="text" name="name" id=""autocomplete = false  value="{{ $customer->name ?? old('name') }}">
    @error('name') <p><strong>{{ $message }}</strong></p> @enderror
</div>
<br>
<div>
    <label for="email">customer's email address</label>
    <input type="email" name="email" id=""autocomplete = false value="{{ $customer->email ?? old('email') }}">
    @error('name') <p><strong>{{ $message }}</strong></p> @enderror
</div>
<br>
<button type="submit">save customer</button>