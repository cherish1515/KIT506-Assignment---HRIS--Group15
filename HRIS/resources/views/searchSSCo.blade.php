@extends('layouts.app')
@section('content')

	<br><br>
	<div class="container border">
	<br>

	<div class="row">
    <div class="col-12 col-md-2">
	<div class="dropdown">
           <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">  Select to Search...  </button>
  			<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
   				<li><a class="dropdown-item" href="{{route('searchStScs2')}}">Search and view all classes for staff</a></li>
                <li><a class="dropdown-item" href="{{route('searchStScos2')}}">Search and view all consultations for staff</a></li>
                <li><a class="dropdown-item" href="{{route('searchStScc2')}}">Search and view all consultations for class</a></li>
                <li><a class="dropdown-item" href="{{route('searchStScu2')}}">Search and view all classes for unit</a></li>
 		 	</ul>
			</div>
      </div>
                
      <div class="col-12 col-md-2">        
     <div class="dropdown">
           <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">   Show all...  </button>
  			<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
   				<li><a class="dropdown-item" href="{{route('searchSSU')}}">Show all units</a></li>
                <li><a class="dropdown-item" href="{{route('searchSSS')}}">Show all staff</a></li>
                <li><a class="dropdown-item" href="{{route('searchSSC')}}">Show all classes</a></li>
                <li><a class="dropdown-item" href="{{route('searchSSCo')}}">Show all consultations</a></li>
 		 	</ul>
			</div>
        </div>
                
        <div class="col-12 col-md-2">
        </div>
        <div class="col-12 col-md-2">
        </div>
        <div class="col-12 col-md-2">
        </div>
                
         <div class="col-12 col-md-2">
                <form action="{{route('logout')}}">
         		<button class="btn btn-warning" type="submit">Log out Staff</button>
        		</form>
          </div>
          <p></p>
	<h2 style="text-align: center">You selected to: Show all consultations</h2>
		<br>

	
     <div class="container">
    <table class="table mt-3">
            <thead>
                <tr class="bold ; border">
    			<th>Staff id</th>
                <th>Day</th>
                <th>Start</th>
                <th>End</th>
                </tr>
            </thead>
            <tbody>
    
    @foreach ($HRIS_consultations as $consultation)
      	<tbody>
             <tr>
    		 <td>{{$consultation->staff_id}} </td>
    	 	 <td>{{$consultation->day}} </td>
    		 <td>{{$consultation->start}} </td>
    		 <td>{{$consultation->end}} </td>
     		 </tr>
       </tbody>
   	@endforeach
   
	</div>       
@endsection
      
   