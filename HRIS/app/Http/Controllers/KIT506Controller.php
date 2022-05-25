<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Units;
use App\Models\Staff;
use App\Models\Consultations;


class KIT506Controller extends Controller
{
    public function index(){
    	return view ('login');
	}

	public function checklogin(Request $request){
    	if('student' == $request->input('username'))
    		if('student' == $request->input('password'))
    			return view ('indexstudent');
    	if('staff' == $request->input('username'))
    		if('staff' == $request->input('password'))
    			return view ('indexstaff');
	}
	
	public function logout(){
    	return view ('login');
	}

	public function searchSSU(){
    	$HRIS_units=Units::all();
    	return view ('searchSSU',compact('HRIS_units'));
	}

	public function searchSSS(){
    	$HRIS_staff=Staff::all();
    	return view ('searchSSS',compact('HRIS_staff'));
	}

	public function searchSSC(){
    	$HRIS_classes=Classes::all();
    	return view ('searchSSC',compact('HRIS_classes'));
	}

	public function searchSSCo(){
    	$HRIS_consultations=Consultations::all();
    	return view ('searchSSCo',compact('HRIS_consultations'));
	}

	public function searchStScc(){
    	return view ('searchStScc');
	}
  
	public function searchStSccR(Request $request){
    	$day = $request->get('input');
    	$HRIS_consultations = Consultations::where('day', 'LIKE', $day)->get();
    	return view ('searchStScc',compact('HRIS_consultations'));
	}

	public function searchStScos(){
    	return view ('searchStScos');
	}

	public function searchStScosR(Request $request){
    	$staff_id = $request->get('input');
    	$HRIS_consultations=Consultations::where('staff_id', 'LIKE', $staff_id)->get();
    	return view ('searchStScos',compact('HRIS_consultations'));
	}

	public function searchStScs(){
    	return view ('searchStScs');
	}

	public function searchStScsR(Request $request){
    	$staff = $request->get('input');
    	$HRIS_classes=Classes::where('staff', 'LIKE', $staff)->get();
    	return view ('searchStScs',compact('HRIS_classes'));
	}

	public function searchStScu(){
    	return view ('searchStScu');
	}

	public function searchStScuR(Request $request){
    	$unit_code = $request->get('input');
    	$HRIS_classes=Classes::where('unit_code', 'LIKE', $unit_code)->get();
    	return view ('searchStScu',compact('HRIS_classes'));
	}

	public function searchStScc2(){
    	return view ('searchStScc2');
	}
  
	public function searchStScc2R(Request $request){
    	$day = $request->get('input');
    	$HRIS_consultations = Consultations::where('day', 'LIKE', $day)->get();
    	return view ('searchStScc2',compact('HRIS_consultations'));
	}

	public function searchStScos2(){
    	return view ('searchStScos2');
	}

	public function searchStScos2R(Request $request){
    	$staff_id = $request->get('input');
    	$HRIS_consultations=Consultations::where('staff_id', 'LIKE', $staff_id)->get();
    	return view ('searchStScos2',compact('HRIS_consultations'));
	}

	public function searchStScs2(){
    	return view ('searchStScs2');
	}

	public function searchStScs2R(Request $request){
    	$staff = $request->get('input');
    	$HRIS_classes=Classes::where('staff', 'LIKE', $staff)->get();
    	return view ('searchStScs2',compact('HRIS_classes'));
	}

	public function searchStScu2(){
    	return view ('searchStScu2');
	}

	public function searchStScu2R(Request $request){
    	$unit_code = $request->get('input');
    	$HRIS_classes=Classes::where('unit_code', 'LIKE', $unit_code)->get();
    	return view ('searchStScu2',compact('HRIS_classes'));
	}


}


