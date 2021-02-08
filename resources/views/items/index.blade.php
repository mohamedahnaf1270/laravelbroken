@extends('templayout')
@section('page')
<table class="table">
    <thead>
          
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Brand</th>
        <th scope="col">Category</th>
        <th scope="col">Expirey-Date</th>
        <th scope="col">Price</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($itemlist as $items)
      <tr>
        <th>{{$items->id}}</th>
        <td>{{$items->name}}</td>
        <td>{{$items->brand}}</td>
        <td>{{$items->category}}</td>
        <td>{{$items->expirey_date}}</td>
        <td>{{$items->price}}MVR</td>
        <td><button class="btn btn-sm btn-outline-primary"><a href="{{route('items.edit',$items->id)}}" class="far fa-edit"></a></button></td>
        <td> 
          <form action="{{route('items.destroy',$items->id)}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn-sm btn  btn-outline-danger"><i class="far p-1 fa-trash-alt "></i></button>
        </form>
        </td>
      </tr>
    </tbody>
    @endforeach
  </table>
  @endsection