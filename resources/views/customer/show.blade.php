<div>
    <a href="/customer">back</a>
    <div>
        <a href="/customer/{{ $customer->id }}/edit">Edit</a>
    </div>
    <br>
    <div>
        {{ $customer->name }}  
    </div>
    <div>
        {{ $customer->email }}
    </div>
</div>