<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\courses;

class CourseController extends Controller
{
    public function show()
    {
        
        $courses = courses::all(); #courses::all() is the name of class in the model 
        return view('assign1', compact('courses')); #courses here is the name of the variable in the previous line in class
        return $courses;
        // return view('assign1',compact('Course'));
      
    }

    public function CourseTable()
    {
        
        $courses = courses::all(); #courses::all() is the name of class in the model 
        return view('coursesDetails', compact('courses')); #courses here is the name of the variable in the previous line in class
        return $courses;
        // return view('assign1',compact('Course'));
      
    }
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream


    public function showDr()
=======
    public function showdoctord()
>>>>>>> Stashed changes
=======
    public function showdoctord()
>>>>>>> Stashed changes
=======
    public function showdoctord()
>>>>>>> Stashed changes
    {
        
        $courses = courses::all(); #courses::all() is the name of class in the model 
        return view('doctordetails', compact('courses')); #courses here is the name of the variable in the previous line in class
        return $courses;
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        // return view('assign1',compact('Course')); 
    }
    public function Checklist()
    {
        
        $courses = courses::all(); #courses::all() is the name of class in the model 
        return view('Checklist', compact('courses')); #courses here is the name of the variable in the previous line in class
        return $courses;
        
      

=======
        // return view('assign1',compact('Course'));
      
>>>>>>> Stashed changes
=======
        // return view('assign1',compact('Course'));
      
>>>>>>> Stashed changes
=======
        // return view('assign1',compact('Course'));
      
>>>>>>> Stashed changes
    }
}
