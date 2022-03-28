@extends('layouts.app')


@section('content')

     <div class="row">

        <div class="col-md-2">
        </div>

        <div class="col-md-9">
            <br>



           

            <h1 style="margin-left: 3%; font-size:20px; margin-bottom:1%; color:rgb(170, 165, 165)"> {{ $job->JobTitle }}</h1>
            
            <div class="flex">
            <a href="{{url('display')}}">  <i class="fa fa-angle-left" aria-hidden="true" style="font-size:30px;   " ></i> </a> <h1 style="font-size: 25px; margin-left:2%; "> {{ $job->JobRole }}</h1>
            </div>
            <br>
            <div class="card" >
               

                <div class="card-header">
                    <h1 style="color: rgb(112, 112, 112); margin-bottom:1%;">Job Title</h1>
                    
                    <h1>{{ $job->JobRole }}</h1>

                </div>

                <div class="card-body">

                <h1 style="color: rgb(112, 112, 112); margin-bottom:1%;">Job Description</h1>

  
                  
                    <h1>{{ $job->Description }}</h1>

            

         
                  
                    
            
                </div>  

               
            
                    
            </div>

            <br>

            <div class="card" >
               

                <div class="card-header">
                    <h1 style="color: rgb(112, 112, 112); margin-bottom:1%;">Job Details</h1>
                    
                    

                </div>

                <div class="card-body">

                

  
                    <h1 style="margin-bottom: 1%; color:rgb(80, 118, 241)">Department </h1> <h1><span>  {{ $job->DeptName }}  </span> </h1> <br>
                   
                    <h1 style="margin-bottom: 1%; color:rgb(80, 118, 241)"> Annual Salary  </h1> <h1>  <span> {{$job->AnnualSalary}} </span> </h1> <br>
                    
                    <h1 style="margin-bottom: 1%; color:rgb(80, 118, 241)"> Created By  </h1> <h1> <span> {{ $job->CreatedBy }} </span> </h1>
                    <br>
                    <h1 style="margin-bottom: 1%; color:rgb(80, 118, 241)"> Creation Date  </h1> <h1> <span> {{ $job->CreatedDate }} </span> </h1>
                    <br>
                    <h1 style="margin-bottom: 1%; color:rgb(80, 118, 241)"> Close Date  </h1> <h1> <span> {{ $job->CloseDate }} </span> </h1>
                    <br>
                    <h1 style="margin-bottom: 1%; color:rgb(80, 118, 241)"> Apply Link  </h1> <h1> <span> <a href="{{route('apply')}}"> {{ $job->ApplyLink }} </a> </span> </h1>
            

         
                  
                    
            
                </div>  

               
            
                    
            </div>

            



        </div>
     </div>
    
@endsection