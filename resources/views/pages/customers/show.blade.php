@extends('home')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">status</th>
    </tr>
  </thead>
  <tbody>
    <?php $i =0;?>
    @foreach($cus as $customer)
    <tr>
      <th scope="row">@php $i++; echo $i @endphp</th>
      <td>{{$customer->name}}</td>
      <td>{{$customer->phone}}</td>
      <td>{{$customer->address}}</td>
      <td>{{$customer->status}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection