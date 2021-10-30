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
      <th scope="col">details</th>
    </tr>
  </thead>
  <tbody>
    <?php $i =0;?>
    @foreach($cus as $customer)
    <tr>
      <th scope="row">@php $i++; echo $i @endphp</th>
      <td>{{$customer->name}}</td>
      <td>0.{{$customer->phone}}</td>
      <td>{{$customer->address}}</td>
      <td>{{$customer->status}}</td>
      <td><a href="{{route('customer_detail',['id'=>$customer->id])}}">chi tiết</a></td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection