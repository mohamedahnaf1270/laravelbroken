@extends('templayout')
@section('page')
<form method="POST" action="{{route('items.store')}}">
    @csrf
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <textarea name="name" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Name"></textarea>
</div>
<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">brand</label>
    <textarea name="brand" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Brand"></textarea>
</div>
<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Category</label>
    <textarea name="category" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Category"></textarea>
</div>
<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Expirey date</label>
    <textarea name="expirey_date" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Expirey date"></textarea>
</div>
<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Price</label>
    <textarea name="price" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Price"></textarea>
</div>
<button href="{{route('items.create')}}"class="btn btn-outline-dark" type="submit">Submit</button>
</form>
@endsection