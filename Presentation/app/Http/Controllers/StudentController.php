<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller{
    public function index(Student $student){
        return $student;
    }

    public function sample(){
        echo "This is a sample method :)";
    }
}
?>