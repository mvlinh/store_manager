@extends('home')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<head>
    <style>
        * {
            margin: 0;
            padding: 0
        }
        
        body {
            /* background-color: #000 */
        }
        
        .card {
            width: 100%;
            height: 600px;
            background-color: #efefef;
            border: none;
            cursor: pointer;
            transition: all 0.5s
        }
        
        .image img {
            transition: all 5s
        }
        
        .card:hover .image img {
            transform: scale(1.5)
        }
        
        .name {
            font-size: 22px;
            font-weight: bold
        }
        
        .idd {
            font-size: 14px;
            font-weight: 600
        }
        
        .idd1 {
            font-size: 12px
        }
        
        .number {
            font-size: 22px;
            font-weight: bold
        }
        
        .follow {
            font-size: 12px;
            font-weight: 500;
            color: #444444
        }
        
        .btn1 {
            height: 40px;
            width: 150px;
            border: none;
            background-color: #000;
            color: #aeaeae;
            font-size: 15px
        }
        
        .text span {
            font-size: 13px;
            color: #545454;
            font-weight: 500
        }
        
        .icons i {
            font-size: 19px
        }
        
        hr .new1 {
            border: 1px solid
        }
        
        .join {
            font-size: 14px;
            color: #a0a0a0;
            font-weight: bold
        }
        
        .date {
            background-color: #ccc
        }
    </style>
</head>
                        <div class="row">
							<div class="col-xl-12 col-md-12 col-lg-12">
								<div class="card box-widget widget-user">
									<div class="card-body text-center">
										<div class="widget-user-image mx-auto text-center">
											<img  class="avatar avatar-xxl brround rounded-circle" alt="img" src="{{asset('assets/images/users/'.Auth::user()->avatar)}}">
										</div>
										<div class="pro-user mt-3">
											<h5 class="pro-user-username text-dark mb-1 fs-16">{{$employee->name}}</h5>
											<h6 class="pro-user-desc text-muted fs-12">{{$employee->email}}</h6>
										</div>
                                        <div class=" mt-3">Ngày sinh: {{$employee->DoB}}</div>
                                        <div class=" mt-3">Quản lí: {{$position->name}}</div>
								
                                <div class="d-flex  flex-row justify-content-center align-items-center mt-12"><span class="">Số lượng khách đang chăm sóc: </span> <span class="number" style="font-size: 12px;">{{count($customer)}} Người</span>
                                
                            </div>
                            <H4 style="color: red;">Tính lương</H4>
                         <div>
                         </div>
                         <form class="row g-3" method="post" action="{{route('check_payroll')}}" id = 'form' style=" margin:0 200px;">
                            @csrf
                            <div class="col-md-4">
                                <input type="date" style="width: 200px;" class="form-control" id="name" name = 'start' value="" required placeholder="dd/mm/yyyy">
                            </div>
                            <div class="col-md-4">
                                đến ngày
                            </div>
                            <div class="col-md-4">
                                <input type="date" style="width: 200px;" class="form-control" id="name" name = 'end' value="" required placeholder="dd/mm/yyyy">
                            </div>
                            <div class="col-md-12" style="margin-top: 10px;">
                                <button class="btn btn-primary" name="submit"  type="submit">Check</button>
                                <button class="btn btn-danger" name="reset"  type="reset">Reset</button>
                            </div>

                        </form>
                    </div>
                                @if(!empty($_GET['start_at']))
                                <div style="color: red;">
                                {{$_GET['start_at']}}  --  {{$_GET['end_at']}}: {{number_format($_GET['pay'], 0, '', ',')}} vnd
                                </div>
                                @endif
                                
                                    <div class="d-flex align-items-end justify-content-between mg-b-5">
											<h6 class="">This Week</h6>
											<h6 class="font-weight-bold mb-1">{{$week}}</h6>
										</div>
										<div class="progress progress-sm mb-5">
											<div class="progress-bar bg-danger w-{{$week*10}}"></div>
										</div>
										<div class="d-flex align-items-end justify-content-between mg-b-5">
											<h6 class="">This Month</h6>
											<h6 class="font-weight-bold mb-1">{{$month}}</h6>
										</div>
										<div class="progress progress-sm mb-5">
											<div class="progress-bar bg-info w-{{$month*10}}"></div>
										</div>
										<div class="d-flex align-items-end justify-content-between mg-b-5">
											<h6 class="">This Year</h6>
											<h6 class="font-weight-bold mb-1">{{$year}}</h6>
										</div>
										<div class="progress progress-sm mb-5">
											<div class="progress-bar bg-warning w-{{$year*10}}"></div>
										</div>
								</div>
							</div>
						</div>
                    </div>
                </div>

                
    <script>
        $('#payroll').click(function(){
                $("#form").toggle();
        })
    </script>
    
@endsection