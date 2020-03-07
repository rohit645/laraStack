<div>
    <form action="/customer/{{ $customer->id }}" method="post">
        @csrf
        @method('PATCH')
         @include('customer.form')
    </form>
</div>

<div>
    <form action="/customer/{{ $customer->id }}" method="post">
        @method('DELETE')
        @csrf
        <button>Delete</button>  
    </form>
</div>

