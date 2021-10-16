@extends('home')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2>List Customer</h2>
            @if(session()->has('message'))
                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
            @endif  
            
            
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Tài khoản (Email)</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    @if($customer)
                        <tbody>
                            @php $i = 0; @endphp
                            @foreach($customer as $cus)
                                @php $i += 1; @endphp
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$cus->name}}</td>
                                    <td>{{$cus->phone}}</td> 
                                    <td>{{$cus->email}}</td>
                                    <td>{{$cus->address}}</td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    @else
                        <h4>No Data</h4>
                    @endif
                </table>
            </div>
        </div>
        
    </div>
    <div class="row">
        <div class="col-md-10"></div>
        <div class="col-md">
            <ul class="pagination pagination-sm m-t-none m-b-none">
                {!!$customer->links()!!}
            </ul>
        </div>
    </div>

@endsection