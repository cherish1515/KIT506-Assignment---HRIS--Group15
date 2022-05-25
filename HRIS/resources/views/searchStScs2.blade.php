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
                
	<h2 style="text-align: center">You selected to: Search for, and view all class for a staff</h2>
		<br>
	
    <form action="{{route('searchStScs2R')}}">
    <div style="text-align: center; font-size:25px">
    <br><label for="input">Staff id:</label>
    <input type="text" id="input" name="input"> 
    </div><br>
    
    <div style="text-align: center; font-size:25px">
    <br><button class="btn btn-dark btn-lg"style="flot:center" type="submit">Search</button>
    </div>
    <br>
    </div>
    </form>
    
     <br>
    <div class="container">
    <table class="table mt-3">
            <thead>
                <tr class="bold ; border">
                <th>Unit Code</th>
                <th>Campus</th>
                <th>Day</th>
                <th>Start</th>
                <th>End</th>
                <th>Type</th>
    			<th>Room</th>
    			<th>Staff id</th>
                </tr>
            </thead>
         
     	 <tbody>
    	<?php if(isset($HRIS_classes)){
    	?>
    	@foreach ($HRIS_classes as $class)
             <tr>
    	 	 <td>{{$class->unit_code}} </td>
    		 <td>{{$class->campus}} </td>
    		 <td>{{$class->day}} </td>
    		 <td>{{$class->start}} </td>
    		 <td>{{$class->end}} </td>
    		 <td>{{$class->type}} </td>
    		 <td>{{$class->room}} </td>
    		 <td>{{$class->staff}} </td>
     		 </tr>
       </tbody>
   	@endforeach
        <?php } ?>
   
	</div>   
@endsection
      
   