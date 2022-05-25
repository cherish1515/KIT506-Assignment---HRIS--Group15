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

	<br><br><br>
	<h1 style="text-align: center">Welcome to HRIS<h1>
		<br>

	<p style="text-align: center; font-size:20px">You can use the navbar on the top to search and view all the informations you want by searching your input.
		<br>Including:
		<br><br>Search for, and view all classes for a staff member 
		<br><br>Search for, and view all consultations for a staff member 
		<br><br>Search for, and view all consultations for a class 
		<br><br>Search for, and view all classes for a unit
		<br><br>
        
		<br>For the staff, here are some extra functions which you can also use.
		<br>Including:
		<br><br>Show all units 
		<br><br>Show all staff (given and family name only) 
		<br><br>Show all classes 
		<br><br>Show all consultations</p>
        <br>
        </div>
        
@endsection
      
   
    