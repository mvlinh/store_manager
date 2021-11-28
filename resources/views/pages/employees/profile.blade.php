@extends('home')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
											<img  class="avatar avatar-xxl brround rounded-circle" alt="img" src="{{asset('assets/images/users/'.Auth::user()->avatar.'.jpg')}}">
										</div>
										<div class="pro-user mt-3">
											<h5 class="pro-user-username text-dark mb-1 fs-16">{{$employee->name}}</h5>
											<h6 class="pro-user-desc text-muted fs-12">{{$employee->email}}</h6>
										</div>
                                        <div class=" mt-3">Date of birth: {{$employee->DoB}}</div>
                                        <div class=" mt-3">Position: {{$position->name}}</div>
								
                                <div class="d-flex  flex-row justify-content-center align-items-center mt-12"><span class="">Customer: </span> <span class="number">{{count($customer)}} people</span>
                           
                            <!-- </div>     -->
                                <div class=" d-flex mt-2"> <button id ='payroll' class="btn1 btn-dark btn-danger" style="height: 25px; width: 80px">Payroll</button> </div>
               <!-- form -->
                <div>

                </div>
               <form class="row g-3" method="post" action="{{route('check_payroll')}}" id = 'form' style="display: none;">
                    @csrf
                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label">Start</label>
                        <input type="date" style="width: 200px;" class="form-control" id="name" name = 'start' value="" required placeholder="dd/mm/yyyy">
                    </div>
                    <div class="col-md-6">
                    <label for="validationCustom01" class="form-label">End</label>
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
											<h6 class="font-weight-bold mb-1">02</h6>
										</div>
										<div class="progress progress-sm mb-5">
											<div class="progress-bar bg-danger w-20"></div>
										</div>
										<div class="d-flex align-items-end justify-content-between mg-b-5">
											<h6 class="">This Month</h6>
											<h6 class="font-weight-bold mb-1">05</h6>
										</div>
										<div class="progress progress-sm mb-5">
											<div class="progress-bar bg-info w-30"></div>
										</div>
										<div class="d-flex align-items-end justify-content-between mg-b-5">
											<h6 class="">This Year</h6>
											<h6 class="font-weight-bold mb-1">22</h6>
										</div>
										<div class="progress progress-sm mb-5">
											<div class="progress-bar bg-warning w-50"></div>
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