<h1>customer page</h1>

@forelse ($customers as $customer)
<a href="/customer/{{ $customer->id }}"><p><strong>{{ $customer->name}}</strong></p></a>
@empty
<p>No customer to show</p>
@endforelse