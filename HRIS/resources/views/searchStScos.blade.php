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
   				<li><a class="dropdown-item" href="{{route('searchStScs')}}">Search and view all classes for staff</a></li>
                <li><a class="dropdown-item" href="{{route('searchStScos')}}">Search and view all consultations for staff</a></li>
                <li><a class="dropdown-item" href="{{route('searchStScc')}}">Search and view all consultations for class</a></li>
                <li><a class="dropdown-item" href="{{route('searchStScu')}}">Search and view all classes for unit</a></li>
 		 	</ul>
			</div>
      </div>
                
      <div class="col-12 col-md-2">        
     <div class="dropdown">
           <button class="btn btn-secondary dropdown-toggle disabled" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">   Show all...  </button>
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
         		<button class="btn btn-warning" type="submit">Log out Student</button>
        		</form>
          </div>
          <p></p>
                
	<h2 style="text-align: center">You selected to: Search for, and view all consultations for a staff</h2>
		<br>
	
    <form action="{{route('searchStScosR')}}">
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
    			<th>Staff id</th>
                <th>Day</th>
                <th>Start</th>
                <th>End</th>
                </tr>
            </thead>
    
    	<tbody>
    <?php if(isset($HRIS_consultations)){
    ?>
     @foreach ($HRIS_consultations as $consultation)
      	
             <tr>
    		 <td>{{$consultation->staff_id}} </td>
    	 	 <td>{{$consultation->day}} </td>
    		 <td>{{$consultation->start}} </td>
    		 <td>{{$consultation->end}} </td>
     		 </tr>
       </tbody>
   	@endforeach
    <?php } ?>
   
	</div>
        
@endsection
      
   