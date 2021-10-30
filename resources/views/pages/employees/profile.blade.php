@extends('home')
@section('content')
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
<div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
        <div class="card p-4">
            <div class=" image d-flex flex-column justify-content-center align-items-center">
                 <button class="btn btn-secondary"> <img src="https://pdp.edu.vn/wp-content/uploads/2021/06/hinh-anh-gai-xinh-de-thuong-nhat-1.jpg" height="100" width="100" /></button>
                <div class="name mt-3">Name: {{$employee->name}}</div>
                <div class="idd">Email: {{$employee->email}}</div>
                <div class=" mt-3">Date of birth: {{$employee->DoB}}</div>
                <div class=" mt-3">Position: {{$position->name}}</div>

                
                <div class="d-flex flex-row justify-content-center align-items-center mt-3"><span class="">Customer: </span> <span class="number">{{count($customer)}} people</span>
                </div>
                <div class=" d-flex mt-2"> <button id ='payroll' class="btn1 btn-dark btn-danger">Payroll</button> </div>
               <!-- form -->

               <form class="row g-3" method="post" action="{{route('check_payroll')}}" id = 'form' style="display: none;">
                    @csrf
                    <div class="col-md-3">
                        <label for="validationCustom01" class="form-label">Start</label>
                        <input type="date" style="width: 200px;" class="form-control" id="name" name = 'DoB1' value="" required placeholder="dd/mm/yyyy">
                    </div>
                    <div class="col-md-3">
                    <label for="validationCustom01" class="form-label">End</label>
                        <input type="date" style="width: 200px;" class="form-control" id="name" name = 'DoB2'  required placeholder="dd/mm/yyyy">
                    </div>
                    <div class="col-md-12" style="margin-top: 10px;">
                        <button class="btn btn-primary" name="submit"  type="submit">Check</button>
                        <button class="btn btn-danger" name="reset"  type="reset">Reset</button>
                    </div>
  
</form>
  
            </div>
        </div>
    </div>
    <script>
        $('#payroll').click(function(){
                $("#form").toggle();
        })
    </script>
@endsection