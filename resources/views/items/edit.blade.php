@extends('templayout')
@section('page')
<form method="POST" action="{{route('items.update',$items->id)}}">
    @method('PUT')
    @csrf
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input value="{{$items->name}}" name="name" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Name"></input>
</div>
<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">brand</label>
    <input value="{{$items->brand}}" name="brand" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Brand"></input>
</div>
<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Category</label>
    <input value="{{$items->category}}" name="category" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Category"></input>
</div>
<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Expirey date</label>
    <input value="{{$items->expirey_date}}" name="expirey_date" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Expirey date"></input>
</div>
<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Price</label>
    <input value="{{$items->price}}" name="price" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Price"></input>
</div>
<button href="{{route('items.create')}}"class="btn btn-outline-dark" type="submit">Submit</button>
</form>
@endsection