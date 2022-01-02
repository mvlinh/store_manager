@extends('admin.home')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-payroll">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0 w-5">#ID</th>
                                    <th class="border-bottom-0">Tên</th>
                                    <th class="border-bottom-0">Lương chăm sóc(triệu)</th>
                                    <th class="border-bottom-0">Lương bán(triệu)</th>
                                    <th class="border-bottom-0">Tổng (triệu)</th>
                                    <th class="border-bottom-0">Từ ngày</th>
                                    <th class="border-bottom-0">Đến ngày</th>
                                    <th class="border-bottom-0">Status</th>
                                    <th class="border-bottom-0">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($employee as $item)
                                <tr>
                                    <td>#{{$item->id}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <span class="avatar avatar-md brround mr-3" style="background-image: url({{asset('assets/images/users/'.$item->avatar)}})"></span>
                                            <div class="mr-3 mt-0 mt-sm-1 d-block">
                                                <h6 class="mb-1 fs-14">{{$item->name}}</h6>
                                                <p class="text-muted mb-0 fs-12">{{$item->email}}</p>
                                            </div>
                                        </div>
                                    </td>
                                    
                                    <td class="font-weight-semibold text-center">@php $flag =0; $care1 = 0; @endphp@foreach($payroll_care as $care) @if($care->id == $item->id) {{number_format($care->sum/1000000)}} @php $flag =1; $care1 = ($care->sum/1000000); @endphp @endif @endforeach @if($flag == 0)0 @endif</td>
                                    <td class="font-weight-semibold text-center">@php $flag =0; $sel1 = 0; @endphp@foreach($payroll_sel as $sel) @if($sel->id == $item->id) {{number_format($sel->sum/1000000)}} @php $flag =1; $sel1 = ($sel->sum/1000000); @endphp @endif @endforeach @if($flag == 0)0 @endif</td>
                                    <td class="font-weight-semibold text-center">{{number_format($sel1+$care1)}}</td>
                                    <td>{{$start}}</td>
                                    <td>{{$today}}</td>
                                    @if($item->status == 1)
                                        <td><span class="badge badge-success" style="padding: 5px 26px ;">Active</span></td>
                                    @else
                                        <td><span class="badge badge-danger" style="padding: 5px 28px ;">block</span></td>
                                    @endif
                                    <td class="text-left">
                                       
                                        <a href="#" class="action-btns" data-toggle="tooltip" data-placement="top" title="Print" onclick="javascript:window.print();">
                                            <i class="feather feather-printer text-success"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach   
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection