<?php

namespace App\Http\Controllers;
use App\Mail\WelcomeMail;
use App\Models\message;
use Illuminate\Support\Facades\Mail;
use App\Models\notice;
use App\Models\student;
use App\Models\studentclass;
use App\Models\schoolfee;
use App\Models\receipt;
use App\Models\result;

use App\Models\subject;
use App\Models\Teacher;
use App\Models\studentparent;
use App\Models\transport;
use App\Models\academicsession;
use App\Models\payment_history;
use App\Models\library;
use Illuminate\Support\Facades\Auth; 
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use DB;
use Illuminate\Validation\Rules\Unique;
use Symfony\Component\HttpKernel\Profiler\Profile;
use function PHPUnit\Framework\returnArgument;
class studentcontroller extends Controller
{
  // public function emailtest(Request $request){
  //  $mail = Mail::to("hammedlawal09@gmail.com")->send(new WelcomeMail());
  //  if($mail){
  //   return 'sent';
  //  }
  // }
  //  admin acccount setting
Public function adminaccount_settings(Request $request){
    return view("schoolproject.adminaccount_settings");
}
// messageing from admin
public function messaging(Request $request){
  $adminMail = DB::table("school_settings")->where("adminId", Session::get("admin_id"))->first();
  $SentMail = DB::table("messages")->where("sender_mail",$adminMail->SchoolMail)->get();
  $InboxMail = DB::table("messages")->where("receiver_mail",$adminMail->SchoolMail)->get();
  return view("schoolproject.messaging", compact("adminMail","SentMail","InboxMail"));
}
// mapping
public function map(Request $request){
  return view("schoolproject.map");
}
public function index(Request $request){
   return view("schoolproject.index");
}
// forgot password
public function forgotpassword(Request $request){
  return view("schoolproject.forgotpassword");
}
public function forgotform(Request $request){
  $username = $request->username;
  $checkAdmin = DB::table("admins")->where("username", $username)->first();
  $checkParent = DB::table("studentparents")->where("username", $username)->first();
  $checkTeacher = DB::table("teachers")->where("username", $username)->first();
  $checkStudent = DB::table( "student-information")->where("username", $username)->first();
  if($checkAdmin && $checkAdmin->username === $username){
    Session::put('username',   $checkAdmin->username);
    Session::put('userId',   $checkAdmin->id);
    return redirect()->route("schoolproject.changepassword");

  }elseif($checkParent && $checkParent->username === $username){
    Session::put('username',  $checkParent->username);
    Session::put('userId',   $checkParent->id);
    return redirect()->route("schoolproject.changepassword");
  }elseif($checkStudent && $checkStudent->username === $username){
    Session::put('username',  $checkStudent->username);
    Session::put('userId',   $checkStudent->id);
    return redirect()->route("schoolproject.changepassword");
  }elseif($checkTeacher && $checkTeacher->username === $username){
    Session::put('username',  $checkTeacher->username);
    Session::put('userId',   $checkTeacher->id);
    // return Session::put('username',   $checkTeacher->username) ;
    return redirect()->route("schoolproject.changepassword");
  }else{

    return back()->withErrors(['username' => 'Invalid credentials']);
  }
}

// change password
public function changepassword(Request $request){
return view("schoolproject.changepassword");
}

// change password form
public function passwordform(Request $request){
$user =  $request->username; 
$userId = $request->userId;
// $confirm_password = $request->confirm_password;

$selectStudent = DB::table("student-information")->where([
  "username" => $user,
  "id" => $userId
])->first();

 $selectTeacher = DB::table("teachers")->where([
  "username" => $user,
  "id" => $userId
 ])->first();

 
 $selectParent = DB::table("studentparents")->where([
  "username" => $user,
  "id" => $userId
 ])->first();

 
 $selectAdmin = DB::table("admins")->where([
  "username" => $user,
  "id" => $userId
 ])->first();
  if($selectParent){
     $update = DB::table("studentparents")->where([
    "username" => $user,
    "id" => $userId
     ])->update([
      "password" => $request->confirm_password
     ]);
     return redirect()->route("schoolproject.index");
  }elseif($selectTeacher){
    $update = DB::table("teachers")->where([
      "username" => $user,
      "id" => $userId
       ])->update([
        "password" => $request->confirm_password
       ]);
       return redirect()->route("schoolproject.index");
  }elseif($selectParent){
    $update = DB::table("parents")->where([
      "username" => $user,
      "id" => $userId
       ])->update([
        "password" => $request->confirm_password
       ]);
       return redirect()->route("schoolproject.index");
  }elseif($selectAdmin){
    $update = DB::table("admins")->where([
      "username" => $user,
      "id" => $userId
       ])->update([
        "password" => $request->confirm_password
       ]);
       return redirect()->route("schoolproject.index");
  }
}

Public function dashboard(Request $request){
  $student = DB::table("student-information")->count();
  $teacher = DB::table("teachers")->count();
  $parent = DB::table("studentparents")->count();
    return view("schoolproject.dashboard", compact("student","teacher","parent"));
}
public function admit_form(Request $request){
  $hostel = DB::table("hostels")->get();
      $classes = DB::table("studentclasses")->get();
    $transport = DB::table("transports")->get();
    $sessions = DB::table("academicsessions")
    ->select("academic_session")
    ->distinct()
    ->get();
    $classesi = DB::table('hostels')
    ->select('hostel_name')
    ->distinct()
    ->pluck('hostel_name')
    ->toArray();
$parent = DB::table("studentparents")->get();
$subjectclass = array_combine($classesi, $classesi);
    return view("schoolproject.admit_form", compact('classes',"sessions","transport","subjectclass","parent"));

}

// insert studdnt info
public function student_form(Request $request){
$parentID = $request->parent_id;
  // $rand = mt_rand( 100,1000);

    $getparent = DB::table("studentparents")->where("id",$parentID)->first();
    $mail = Mail::to($getparent->email)->send(new WelcomeMail($getparent));
      if($mail){
        $date = date("Y-m-d");
        $random = mt_rand(1,1000);
         $insert = DB::table('student-information')->insert(values: [
           "FirstName" => $request->FirstName,
           "LastName"=>$request->LastName,
           "Gender"=>$request->Gender,
           "DateOfBirth"=>$request->DateOfBirth,
           "class"=>$request->class,
           "Phone"=>$request->Phone,
           "ShortBIO"=>$request->ShortBIO,
           "religion"=>$request->religion,
           "blood"=>$request->blood,
           "email"=>$request->email,
           "address"=>$request->address,
           "password"=> $request->FirstName.$random,
            "username"=> $request->LastName,
            "OtherName"=>$request->OtherName,
            "year_admitted" =>$request->$date,
            "housing_mode" =>$request->housing_mode,
             "hostel" =>$request->hostel,
             "transport"=>$request->transport,
             "room_number" =>$request->room_number,
             "session" =>$request->session,
             "term" =>$request->term,
             "parent_id" =>$request->parent_id
          ]);
        return redirect()->route("schoolproject.admit_form");
      }
    }
//   get all student <details></details>
  public function all_student(Request $request){
   $students = DB::table('student-information')->get();
    return view("schoolproject.all_student", compact("students"));
  }

  // delteing student
  public function deletestudent(Request $request, $id){
    
   DB::table("student-information")->where("id", $id)->delete();

    $students = DB::table("student-information")->get();
    return view("schoolproject.all_student", compact("students"));
    }

//   add_class
  public function add_class(Request $request){
    return view("schoolproject.add_class");
  } 
//   add teacher
public function add_teacher(Request $request){
    // return view("schoolproject.add_teacher");
    $classes = DB::table("studentclasses")->get();
    
    return view("schoolproject.add_teacher", data: compact('classes'));
  } 
//    view student details
  public function student_details(Request $request, $id){
 
    $student  = DB::table('student-information')
    ->join('studentparents', 'studentparents.id', '=', 'student-information.parent_id')
    ->select('student-information.*','studentparents.*','studentparents.phone as phonenumber','studentparents.Surname as parentname')
    ->first();
      return view('schoolproject.student_details', compact('student'));

  }

  public function teacherspayment(){
    return view("schoolproject.payment");
  }
  
    // edit student

   public function editstudent(Request $request,$id){
    $classes = DB::table("studentclasses")->get();
      $student = DB::table("student-information")->where("id", $id)->first();
      return view("schoolproject.editstudent", compact("student","classes"));

   }
  //  updationg student
  public function updatestudent(Request $request,$id){
    $rand = mt_rand(100,1000);

    $student = DB::table('student-information')->where('id', $id)->update(
      ['FirstName' => $request->FirstName,
      'LastName' => $request->LastName,
      'Gender' => $request->Gender,
      'DateOfBirth' => $request->DateOfBirth,
      'class' => $request->class,
      // 'AdmissionID' => $request->AdmissionID,
      'Phone' => $request->Phone,
      'ShortBIO' => $request->ShortBIO,
      'religion' => $request->religion,
      'blood' => $request->blood,
      'email' => $request->email,
      'address' => $request->address,
      "password"=> $request->FirstName.$rand,
      "username"=> $request->LastName,
      "OtherName"=>$request->OtherName,
      "transport"=>$request->transport
      ]
    );


   return redirect()->route("schoolproject.all_student", compact("student"));
    }
//   inserting class
public function addclass(Request $request){
    studentclass::create([
        "class"=>$request->class,
        "date"=>$request->date
    ]);
    return redirect()->route("schoolproject.add_class");
}

// delete class

public function delete_class(Request $request, $id){
  $delclass = studentclass::find($id);
  $delclass->delete();

  return redirect()->route("schoolproject.all_class");
}
public function all_class(Request $request){
    $classes = DB::table("studentclasses")->get();
    
    return view("schoolproject.all_class", compact('classes'));
}

// adding new teacher

public function teacherform(Request $request){
  $random = mt_rand(100,1000);
  $query = DB::table("teachers")->insert(values: [
  
      "firstname"=>$request->firstname,
      "lastname"=>$request->lastname,
      "gender"=>$request->gender,
      "dateofbirth"=>$request->dateofbirth,
      "religion"=>$request->religion,
      "Email"=>$request->Email,
      "classteacher"=>$request->classteacher,
      "role"=>$request->role,
      "address"=>$request->address,
      "phone"=>$request->phone,
      "password"=>$request->firstname.$random,
      "username"=>$request->lastname,
      "salary" => $request->salary,
      "starting_date" =>$request->starting_date,
      "account_number" =>$request->account_number,
      "account_name" =>$request->account_name

  ]);
 return redirect()->route("schoolproject.add_teacher");
}
// getting all teacher
public function all_teacher(Request $request){
  $sql = DB::table("teachers")->get();
  return view("schoolproject.all_teacher", compact("sql"));
}

// getting each_teacher information

public function teacher_details(Request $request,$id){
  $teacher = DB::table("teachers")->where("id",$id)->first();
   if(!$teacher){
    abort(404, 'Teacher not found');
   }
  return view("schoolproject.teacher_details", compact("teacher"));
}
// editting teacher

public function editteacher(Request $request,$id){

  $classes = DB::table("studentclasses")->get();

  $teacher = DB::table("teachers")->where("id", $id)->first();
   if(!$teacher){
    abort(404, "Teacher Not found");
   }
   
return view("schoolproject.editteacher", compact("teacher", "classes"));


}

// updating teacher
  public function updateteacher(Request $request,$id){
    $random = mt_rand(100,1000);
    $teacher = DB::table("teachers")->where("id", $id)->update([
      "firstname"=>$request->firstname,
      "lastname"=>$request->lastname,
      "gender"=>$request->gender,
      "dateofbirth"=>$request->dateofbirth,
      "religion"=>$request->religion,
      "Email"=>$request->Email,
      "classteacher"=>$request->classteacher,
      "role"=>$request->role,
      "address"=>$request->address,
      "phone"=>$request->phone,
      "password"=>$request->firstname.$random,
      "username"=>$request->lastname,
      "account_number" =>$request->account_number,
      "account_name" =>$request->account_name
    ]);

    return redirect()->route("schoolproject.all_teacher", compact("teacher"));
  }
  // delete teachers
  public function delete_teachers(Request $request, $id){
  $del = Teacher::find($id);
  $del->delete();

  return redirect()->route("schoolproject.all_teacher");
  }


  Public function addparents(Request $request){
    $classesi = DB::table('student-information')
    ->select('class')
    ->distinct()
    ->pluck('class')
    ->toArray();

$foodClasses = array_combine($classesi, $classesi);
// $selectParent = DB::table("studentparents")->get();
    return view("schoolproject/addparents", compact("foodClasses"));
}
public function parents(Request $request){
  $rand = mt_rand(100, 1000);
  $random = mt_rand(10,99);
  $insert = DB::table("studentparents")->insert(values:[
"Surname" =>$request->Surname,
"OtherName" =>$request->OtherName,
"child_name" =>$request->child_name,
"gender" =>$request->gender,
"occupation" =>$request->occupation,
"religion" =>$request->religion,
"email" =>$request->email,
"address" =>$request->address,
"phone" =>$request->phone,
"child_class"=>$request->child_class,
"password" =>$request->Surname.$rand,
"username"=> $request->Surname.$random
  ]);
  return redirect()->route("schoolproject.addparents");
}

    public function getTypes(Request $request)
    {
      
      $students = DB::table('student-information')
      ->where('class', $request->food_class)
 ->select('id', 'FirstName', 'LastName') 
   ->get();

  
        $foodTypes = [
          $request->food_class => $students,
        ];

        return response()->json($foodTypes[$request->food_class] ?? []);
    
      }
// existing parent update

public function existingParent(Request $request){
  $ParentId  = $request->ParentId;
  $Newchild = $request->Newchild;
  $selectParent = DB::table("studentparents")->where("id",$ParentId)->first();
  $username = $selectParent->username;
  $password = $selectParent->password;
  $surname = $selectParent->Surname;
  $othername = $selectParent->OtherName;

  return redirect()->route("schoolproject.addparents");
}

// gert all parents

public function allparents(Request $request){
  $select = DB::table("studentparents")->get();
  return view("schoolproject/allparents",compact("select"));
}
// get individual parent
public function parentsdetails(Request $request, $id){
  $sql = DB::table("studentparents")->where("id", $id)->first();

  return view("schoolproject.parentsdetails", compact("sql"));
}

public function deleteparent(Request $request,$id){
  $del = studentparent::find($id);
  $del->delete();

  return redirect()->route("schoolproject.allparents");

}
// parent profile setting
public function parent_accountsettings($id){
  $parent = DB::table("studentparents")->where("id", $id)->first();
  return view("schoolproject.parent_accountsettings", compact("parent"));
}
// update teacher profile
public function parenteditprofile(Request $request,$id){
  
 $oldPassword = $request->old_password;
 $checkPassword = DB::table("studentparents")->where("id", $id)->first();
 if($checkPassword && $checkPassword->password === $oldPassword){

  if ($request->hasFile('file_upload')) {
  $image = $request->file(key: 'file_upload');
  $path = $image->store('uploads','public');
  }else {
    $path = $checkPassword->profileImage; // Keep old image if no new upload
}

 $edit = DB::table("studentparents")->where("id", $id)->update([
  "profileImage" => $path,
  "password" => $request->confirm_password
]);
return redirect()->route("schoolproject.parentdash");
 }else{
  return back()->withErrors(['old_password' => 'Old password not correct']);
 }

}




//  view student in each class


public function viewstudents(Request $request){
  
  $students = DB::table('student-information')
   ->where('class', $request->class)
->select('id', 'FirstName', 'LastName',"OtherName") 
->get();

return view("schoolproject.viewstudents", compact("students"));
}
// loginform for all
public function loginform(Request $request) {
  $username= $request->username;
  $password= $request->password;
  $credentials = $request->only('username', 'password');


    $student = DB::table("student-information")->where('username',$username)->first();

    if($student  && $student->password === $password){
      Session::put('student_id', $student->id);
      Session::put('username', $student->username);

      return redirect()->route("schoolproject.all_student");
    }
     $teacher = DB::table("teachers")->where('username',$username)->first();
    if($teacher  && $teacher->password === $password){
      Session::put('teacher_id', $teacher->id);
      Session::put('class_teacher', $teacher->classteacher);
 
      
      return redirect()->route("schoolproject.teacherdashboard");
    }
    
    $parent = DB::table("studentparents")->where('username',$username)->first();
    if($parent  && $parent->password === $password){
      Session::put('parent_id', $parent->id);
      Session::put('username', $parent->username);
    
      
      return redirect()->route("schoolproject.parentdash");
    }
    $admin = DB::table("admins")->where('username',$username)->first();
    if($admin  && $admin->password === $password){
      Session::put('admin_id', $admin->id);
      Session::put('username', $admin->username);
      return redirect()->route("schoolproject.dashboard");
    }


return back()->withErrors(['username' => 'Invalid credentials']);
}
public function studentdashboard(Request $request){
  return view("schoolproject.studentdashboard");
}
 public function parentdashboard(Request $request){
  $parentId = Session::get("parent_id");
  $parent = DB::table("studentparents")->where("id", $parentId)->first();
  $notice_count = notice::where("notice_for", "parent")->count();
  $student = DB::table("student-information")->where("parent_id", $parentId)->get();
  // $studentCount = DB::table("student-information")->where("parent_id", $parentId)->count();
  $amount_paid = receipt::where("parent_id", $parentId)->sum("amount");  
 
  $children = DB::table('student-information')
  ->where('parent_id', $parentId)
  ->select('class', 'term', 'session')
  ->get();

$totalExpenses = 0;

foreach ($children as $child) {
  $fee = DB::table('schoolfees')
      ->where('class', $child->class)
      ->where('term', $child->term)
      ->where('session', $child->session)
      ->sum('amount'); // get the fee for this specific combo

  $totalExpenses += $fee ?? 0; // if no fee found, add 0
}

  return view("schoolproject.parentdash", 
  compact("parent","student","notice_count","children","fee","totalExpenses","amount_paid"));
 }
 public function teacherdashboard(Request $request){
  $teacherId = Session::get("teacher_id");
  $classteacher = Session::get("class_teacher");
  $query = DB::table("teachers")->where( "id",$teacherId)->first();
  $count_student = DB::table("student-information")->where("class",$classteacher)->count();
  $select = DB::table("subjects")->where("class",$classteacher)->count();
  $notice = DB::table("notices")->where("notice_for", "teacher")->get();
  return view("schoolproject.teacherdashboard", compact("count_student","select","query","notice"));

}
// transport
public function transport(Request $request){
  $select = DB::table("transports")->get();

  return view("schoolproject.transport", compact("select"));
}

// add transport scheme

public function transportform(Request $request){
  $query = DB::table("transports")->insert(values:[
    "route_name" =>$request->route_name,
    "vehicle_number" =>$request->vehicle_number,
    "driver_name" =>$request->driver_name,
    "license_number" =>$request->license_number,
    "phone_number" =>$request->phone_number


  ]);
  $select = DB::table("transports")->get();
  return view("schoolproject.transport", compact("query","select"));
}
// delete driver
public function deletedriver(Request $request, $id){
  $delete = transport::find($id);
  $delete->delete();

  return redirect()->route("schoolproject.transport");
}

// hostel allocation
  public function hostel(Request $request){
    $sql = DB::table("hostels")->get();

    return view("schoolproject.hostel", compact("sql"));
  }

  // hostel form

  public function hostelform(Request $request){
    $insert = DB::table("hostels")->insert(values:[
"hostel_name" =>$request->hostel_name,
"room_number" =>$request->room_number,
"room_tyPe" =>$request->room_tyPe,
"number_bed" =>$request->number_bed,
"cost_bed"=>$request->cost_bed

    ]);
    $sql = DB::table("hostels")->get();

    return view("schoolproject.hostel", compact("sql","insert"));

    
  }

  // expenses

  public function addexpense(Request $request){
    return view("schoolproject.addexpense");
  }

  public function allexpense(Request $request){
    return view("schoolproject.allexpense");
  }
  public function allbook(Request $request){
    $query = DB::table("libraries")->get();
    return view("schoolproject.allbook", compact("query"));
  }
  public function addbook(Request $request){
    $classesi = DB::table('subjects')
    ->select('class')
    ->distinct()
    ->pluck('class')
    ->toArray();

$subjectclass = array_combine($classesi, $classesi);
$query =  DB::table("academicsessions")
->select("academic_session")
->distinct()
->get();
    return view("schoolproject.addbook", compact("subjectclass", "query"));
    // return redirect()->route("schoolproject.addbook");
    
  }
  public function addsubject(Request $request){
  $insert = subject::create($request->all());
    return redirect()->route("schoolproject.allsubject");
  }
  public function allsubject(Request $request){
    $query = DB::table("subjects")->get();
    $class = DB::table("studentclasses")->get();
    $sch_session =  DB::table("academicsessions")
    ->select("academic_session")
    ->distinct()
    ->get();
    $tutor = DB::table("teachers")->get();

    return view("schoolproject.allsubject", compact("query","class","sch_session","tutor"));
  }
  public function deletesubject(Request $request,$id){
    $del = subject::find($id);
    $del->delete();
    $class = DB::table("studentclasses")->get();
    $query = DB::table("subjects")->get();
    return redirect()->route("schoolproject.allsubject");
    }
public function bookform(Request $request){
  $insert = DB::table("libraries")->insert(values:[
    "bookname" =>$request->bookname,
    "writer" =>$request->writer,
    "class" =>$request->class,
    "subject" =>$request->subject,
    "price" =>$request->price,
    "book_type" =>$request->book_type,
    "session" =>$request->session,
    "term" =>$request->term
  ]);
  $classesi = DB::table('subjects')
  ->select('class')
  ->distinct()
  ->pluck('class')
  ->toArray();
  $query = DB::table("academicsessions")->get();
$subjectclass = array_combine($classesi, $classesi);
  return view("schoolproject.addbook", compact("insert","subjectclass","query"));
}


public function getBookss(Request $request)
    {
      $students = DB::table('subjects')
      ->where('class', $request->food_class)
 ->select('id', 'subject_name') 
   ->get();

  
        $foodTypes = [
          $request->food_class => $students,
        ];

        return response()->json($foodTypes[$request->food_class] ?? []);
    
      }
      public function studentpromotion(Request $request){
        return view("schoolproject.studentpromotion");
      }
    // update term and session
    public function updateterm(Request $request){
      $select = DB::table("academicsessions")
      ->select("academic_session")
      ->distinct()
      ->get();
      return view("schoolproject.updateterm", compact("select"));
    }
    // update form
    public function updatetermform(Request $request){
      $session = $request->session;
      $term = $request->term;
      $update = DB::table("student-information")->update([
        "session"=>$session,
        "term"=>$term
      ]);
      return redirect()->route("schoolproject.updateterm")->with("showModal",true);
    }
  public function getHostel(Request $request){
        $students = DB::table('hostels')
        ->where('hostel_name', $request->food_class)
   ->select('id', 'room_number','number_bed') 
     ->get();
          $foodTypes = [
            $request->food_class => $students,
          ];
          return response()->json($foodTypes[$request->food_class] ?? []);
        }   
  // delete book

  public function deletebook($id){
    $del = library::find($id);
    $del->delete();

    return redirect()->route("schoolproject.allbook");
  }

public function academic(Request $request){
  $insert = DB::table("academicsessions")->insert(values:[
    "academic_session" =>$request->academic_session,
    "term" =>$request->term,
    "ending_date" =>$request->ending_date,
    "starting_date" =>$request->starting_date
  ]);

  return redirect()->route("schoolproject.academic_session");
}

public function delete_session(Request $request, $id){
  $del = academicsession::find($id);
  $del->delete();

  return redirect()->route("schoolproject.academic_session");

}
public function schoolfee(Request $request){
  $query = DB::table("studentclasses")->get();
  $sql = DB::table("academicsessions")
  ->select("academic_session")
  ->distinct()
  ->get();
  $school_package = DB::table("schoolfees")->select('session','term','class')->distinct()->get();
  return view("schoolproject.schoolfee", compact("query","sql","school_package"));
}

// schoolfee form

public function schoolfee_form(Request $request){
  $insert = schoolfee::create($request->all());

  return redirect()->route("schoolproject.schoolfee");
}
public function billform(Request $request){
  $session = $request->session;
  $class = $request->class;
  $term = $request->term;
 $fetchs = DB::table("schoolfees")->where([
  'class' => $class,
  'session' => $session,
  'term' => $term
  ])->select('class','session','term')->distinct()->get();

$query =  DB::table("schoolfees")->where([
  'class' => $class,
  'session' => $session,
  'term' => $term
  ])->get();

  $total =  DB::table("schoolfees")->where([
    'class' => $class,
    'session' => $session,
    'term' => $term
    ])->sum('amount');

  return view("schoolproject.each_class_bills", compact('fetchs','query','total'));
}
// delete billform
public function deletebill(Request $request){
  $session = $request->sessions;
  $class = $request->classs;
  $term = $request->terms;
  $del = DB::table("schoolfees")->where([
    'class' => $class,
    'session' => $session,
    'term' => $term
  ]
  )->delete();

  return redirect()->route("schoolproject.schoolfee");
}
// admin posting notification
public function noticeboard(Request $request){
  $query = DB::table("notices")->get();
  return view('schoolproject.noticeboard', compact("query"));
}
public function noticeform(Request $request){
  $insert = notice::create($request->all());
  return redirect()->route("schoolproject.noticeboard");
}
// all school bills
public function all_school_bills(Request $request){
  $query = DB::table("schoolfees")->get();
  return view("schoolproject.all_school_bills", compact("query"));
}
// delte bill
public function deletebillform($id){
$del = schoolfee::find($id);
$del->delete();

return redirect()->route("schoolproject.all_school_bills");
}
public function each_class_bills(Request $request){
  return view("schoolproject.each_school_bills");
}
  public function payment(Request $request)  {
    return view("schoolproject.payment");
  }

  public function academic_session(Request $request){
    $query = DB::table("academicsessions")->get();
    return view("schoolproject.academic_session", compact("query"));
  }
  // parent expense
  public function parentexpenses(Request $request){
    $parent_id = Session::get(key: "parent_id");
    $student = DB::table("student-information")->where("parent_id", $parent_id)->get();
    return view("schoolproject.parentexpenses", compact("student"));
  }
  public function viewexpenses(Request $request){
      return view("schoolproject.viewexpenses");
       
  }
    public function viewexpenseform(Request $request){
       $class = $request->class;
       $session = $request->session;
       $term = $request->term;

       $fetch_expense = DB::table("schoolfees")->where([
        "class" => $class,
        "session" => $session,
        "term" => $term
       ])->get();

       $fetchs = DB::table("schoolfees")->where([
        "class" => $class,
        "session" => $session,
        "term" => $term
        ])->select('class','session','term','account_number','account_name','bank_name')->distinct()->get();

        $total =  DB::table("schoolfees")->where([
          'class' => $class,
          'session' => $session,
          'term' => $term
          ])->sum('amount');
  
         

       return view("schoolproject.viewexpenses", compact("fetch_expense","fetchs","total"));
    }

  public function parent_result(Request $request){
    $parentId = Session::get("parent_id");
    $getChild = DB::table("student-information")->where('parent_id', $parentId)->get();
    $class = DB::table("studentclasses")->get();
    $academic = DB::table("academicsessions")
    ->select("academic_session")
    ->distinct()
    ->get();
    return view("schoolproject.parent_result", compact("getChild", "class","academic"));
  }
  public function parentviewresult(Request $request){
    return view("schoolproject.parentviewresult");
  }
  public function checkresultform(Request $request){
    $child_id = $request->child_id;
    $class = $request->class;
    $term = $request->term;
    $session = $request->session;

    $query = DB::table("results")
    ->where([
      "studentId" =>$child_id,
       "class" => $class,
        "term" => $term,
        "session" => $session
     ])
     ->get();
     $count = DB::table("results")
     ->where([
       "studentId" =>$child_id,
        "class" => $class,
         "term" => $term,
         "session" => $session
      ])
      ->count();
      $aggregate = DB::table("results")
      ->where([
        "studentId" =>$child_id,
         "class" => $class,
          "term" => $term,
          "session" => $session
       ])
       ->sum('aggregate');
      // $total = $count*100;
      // $pecentage = $aggregate/$total *100;
    $approve =  DB::table("results")
    ->where([
      "studentId" =>$child_id,
       "class" => $class,
        "term" => $term,
        "session" => $session
     ])
     ->select('Schoolstamp')
     ->distinct()
     ->get();
     return view("schoolproject.parentviewresult", compact("query","count","approve","aggregate"));

  }
  public function parentprofile(Request $request){
    $parent_id = Session::get("parent_id");
    $profile = DB::table("studentparents")->where("id", $parent_id)->first();
    $children = DB::table("student-information")->where("parent_id", $parent_id)->get();
    return view("schoolproject.parentprofile", compact("profile","children"));
  }
  // teacher page starts here
public function mystudent($class){
  
  $getstudent = DB::table("student-information")->where("class",$class)->get();
  return view("schoolproject.mystudent", compact("getstudent"));
}
public function teacher_accountsettings($id){
  $teacher = DB::table("teachers")->where("id", $id)->first();
  return view("schoolproject.teacher_accountsettings", compact("teacher"));
}
// update teacher profile
public function teachereditprofile(Request $request,$id){
  
 $oldPassword = $request->old_password;
 $checkPassword = DB::table("teachers")->where("id", $id)->first();
 if($checkPassword && $checkPassword->password === $oldPassword){

  if ($request->hasFile('file_upload')) {
  $image = $request->file(key: 'file_upload');
  $path = $image->store('uploads','public');
  }else {
    $path = $checkPassword->profileImage; // Keep old image if no new upload
}

 $edit = DB::table("teachers")->where("id", $id)->update([
  "profileImage" => $path,
  "password" => $request->confirm_password
]);
return redirect()->route("schoolproject.teacherdashboard");
 }else{
  return back()->withErrors(['old_password' => 'Old Password is not correct']);
 }

}
// teacher Profile
public function teacherprofile($id){
  $teacher = DB::table("teachers")->where("id", $id)->first();
  return view("schoolproject.teacherprofile", compact("teacher"));
}
public function exam_grade(Request $request){
  return view("schoolproject.exam_grade");
}
public function student_subjects(Request $request, $classteacher){
  // $query = DB::table("subjects")->where("class",$classteacher)->get();
  $fetchs = DB::table("subjects")->where([
    'class' => $classteacher,
    ])->select('class','session','term')->distinct()->get();
  return view("schoolproject.student_subjects", compact("fetchs")) ;
}
public function classSubject(Request $request){
  return view("schoolproject.classSubject");
}
public function subjectform(Request $request){
  $academic_session = $request->academic_session;
  $term = $request->term;
  $class = $request->class;
  if ($request->isMethod('post')) {
    $select = DB::table("subjects")->where([
      "session" =>$academic_session,
      "term" => $term,
      "class" =>$class
    ])->get();
    return view("schoolproject.classSubject", compact("select")); 
  // return $class;
}
if ($request->isMethod('get')) {
  $select = DB::table("subjects")->where([
    "session" =>$academic_session,
    "term" => $term,
    "class" =>$class
  ])->get();
  return view("schoolproject.classSubject", compact("select")); 
}

}
// upload student result
public function uploadresult(Request $request){
  $fetchs = DB::table("academicsessions")->get();
  return view("schoolproject.uploadresult", compact("fetchs"));
}
public function selectstudent(Request $request,$id){
$class = Session::get("class_teacher");
$session = DB::table("academicsessions")->where("id", $id)->first();

$Term_name = $session->term; 
$academic = $session->academic_session; 
  // putting it inside session an using it in addresult
  Session::put("terms", $Term_name);
  Session::put("session" ,$academic);

$student = DB::table("student-information")->where([
  "session" => $academic,
  "term" => $Term_name,
  "class" =>$class
])->get();
return view("schoolproject.selectstudent", compact("student"));
}
public function addresult(Request $request,$id){
  $class = Session::get("class_teacher");
  $termName = Session::get("terms");
  $session = Session::get("session");
  $studentName = DB::table("student-information")->where("id", $id)->first();
  $subject = DB::table("subjects")->where([
    "class" => $class,
    "term" =>   $termName,
    "session" => $session
  ])->get();

  return view("schoolproject.addresult", compact("studentName","subject"));
}
public function resultform(Request $request){
  $studentId = $request->studentId;
  $term = $request->term;
  $session = $request->session;
  $class = $request->class;
  $checkStudent = DB::table("results")
  ->where([
    "studentId"=> $studentId,
    "term" => $term,
    "session" => $session,
    "class" => $class

  ])->exists();

  if($checkStudent){
    return back()->withErrors(['studentId' => 'Already add result for this student for this term and session']);
  }else{
    $count = count($request->subject);
    for ($i = 0; $i < $count; $i++) {
    $insert = Db::table("results")->insert(values:[
        "studentId" => $request->studentId[$i],
        "class" => $request->class[$i],
        "subject" => $request->subject[$i],
        "term" => $request->term[$i],
        "session" => $request->session[$i],
        "test" => $request->test[$i],
        "exam" => $request->exam[$i],
        "aggregate" => $request->exam[$i] + $request->test[$i]
    ]);
  }
    return redirect()->route("schoolproject.teacherdashboard")
    ->with('success', 'Results submitted successfully.');
  }
}
public function school_setting(Request $request){
  $adminId = Session::get("admin_id");
  $select = DB::table("school_settings")->where("id",1)->first();
  return view("schoolproject.school_setting", compact("select"));
}
public function schoolSetForm(Request $request){
  $adminId = Session::get("admin_id");
  $check = DB::table("school_settings")->where("adminId", $adminId)->first();

    if ($request->hasFile('file_upload')) {
      $image = $request->file( 'file_upload');
      $path = $image->store('uploads','public');
      }else {
        $path = $check->SchoolImage; // Keep old image if no new upload
    }
$update = DB::table("school_settings")->update([

"SchoolName" =>$request->SchoolName,
"SchoolImage" =>$path,
"SchoolMotto" =>$request->SchoolMotto,
"SchoolLocation" =>$request->SchoolLocation,
"SchoolAbr" =>$request->SchoolAbr,
"SchoolPhone" => $request->SchoolPhone,
"SchoolBox" =>$request->SchoolBox,
"SchoolMail" => $request->SchoolMail
]);
return redirect()->back()->with('showModal', true);
}

public function promoteStudent(Request $request){
  $class = DB::table("studentclasses")->get();
  return view("schoolproject.promoteStudent", compact("class"));
}
public function makePromotion($class){
  $student = DB::table("student-information")
   ->where("class",$class)
  ->get();

 $class = DB::table("studentclasses")->get();
  return view("schoolproject.makePromotion", compact("student","class"));
}
public function promoteForm(Request $request){
  $studentId = $request->studentId;
  // $classupdate = $request->class;
  $update = DB::table("student-information")->where("id",$studentId)->update([
       "class" =>$request->class
  ]);
  return redirect()->route("schoolproject.promoteStudent");
}
public function AdminsendMessage(Request $request){
  $insert = message::create($request->all());
  return redirect()->back()->with('showModal', true);
}
public function all_fees(Request $request){
  return view("schoolproject.all_fees");
}
public function addpayment(Request $request){
  $class = DB::table("studentclasses")->get();
  $sch_session =  DB::table("academicsessions")
  ->select("academic_session")
  ->distinct()
  ->get();
   return view("schoolproject.addpayment", compact("class","sch_session"));
}
public function paymentform(Request $request){
  $class = $request->class;
  $session = $request->session;
  $term = $request->term;
  $query = schoolfee::where([
   "class" => $class,
   "term" => $term,
   "session" => $session
  ])->get();
  $getChild = DB::table("student-information")->where([
    "class" => $class,
    "term" => $term,
    "session" => $session
  ])->get();

  return view("schoolproject.makePayment", compact("getChild","query"));
}
public function payexpenses(Request $request){
  $insert = payment_history::create($request->all());
  return redirect()->route('schoolproject.addpayment')->with('showModal', true);
}
public function makePayment(Request $request){

  return view("schoolproject.makePayment");
}
public function selectChildPayment(Request $request){
    $parent_id = Session::get(key: "parent_id");
    $student = DB::table("student-information")->where("parent_id", $parent_id)->get();
    return view("schoolproject.selectChildPayment", compact("student"));
}
public function sendproof($id){
  $student = DB::table("student-information")->where("id", $id)->first();
  $term = $student->term;
  $session = $student->session;
  $class = $student->class;
  $selectExpense = schoolfee::where([
  "term" => $term,
  "session" => $session,
  "class" => $class
  ])->get();
  return view("schoolproject.sendproof", compact("student","selectExpense"));
}
public function sendproofform(Request $request){
  // $parentId = Session::get("parent_id");
  if ($request->hasFile('file_upload')) {
    $image = $request->file(  key: 'file_upload');
    $path = $image->store('uploads','public');
    }
$insert = receipt::create([
  "parent_id" =>$request->parent_id,
  "child_id" =>$request->child_name,
  "term" =>$request->term,
  "class" =>$request->class,
  "amount"=>$request->amount,
  "session" =>$request->session,
  "receipt_image" =>$path,
  "description" =>$request->description,
  "status" => $request->status,
  "payment_for" => $request->payment_for
]);
return redirect()->route("schoolproject.parentdash")->with("showModal", true);
}

public function parentpaymentstatus(Request $request){
  $pay_history = receipt::where("parent_id", Session::get("parent_id"))->get();
  $query =  DB::table("receipts")
  ->where("parent_id", Session::get("parent_id"))
  ->select("child_id","class","term","session","payment_for")
  ->distinct()
  ->sum("amount");
  // $expense = DB::table("schoolfees")->where("id", $pay_history->payment_for)->get();
  return view("schoolproject.parentpaymentstatus", compact("pay_history","query"));
}
// pendin payments 
public function pendingpayment(Request $request){
  $pendingpayment = receipt::where("status", "PENDING")->get();
  return view("schoolproject.pendingpayment", compact("pendingpayment")  );
}
// declineform
public function declineform(Request $request){
  $declineId = $request->decline_id;
  $decline = receipt::where("id", $declineId)->update([
 "status" =>"DECLINED"
  ]);
  return redirect()->route("schoolproject.pendingpayment")->with("showModal", true);

}
// approved payment page
public function approvedpayment(Request $request){
  $approved = receipt::where("status", "APPROVED")->get();
  return view("schoolproject.approvedpayment", compact("approved"));
}
public function approve($id){
  $select = DB::table("receipts")->where("id", $id)->first();
  return view("schoolproject.approve", compact("select"));
}
// approve payment
public function approveform(Request $request){
  $feeId = $request->feeId;
  $update_amount = receipt::where("id", $feeId)->update([
    "status"=>"APPROVED",
    "amount" =>$request->amount
  ]);
  return redirect()->route("schoolproject.approvedpayment")->with("showModal", true);
}
public function approveresult(Request $request){
  $class = DB::table("studentclasses")->get();
  $getSession = DB::table("academicsessions")->select("academic_session")->distinct()->get();
  return view("schoolproject.approveresult", compact("class", "getSession"));
}
public function selectstudentresult(Request $request){
  return view("schoolproject.selectstudentresult");
}
public function approveresultform(Request $request){
  // $getChildResult = DB::get
  $session = $request->session;
  $term = $request->term;
  $class = $request->class;

  $getStudent = DB::table("results")->where([
    "term"=>$term,
    "session"=>$session,
    "class" =>$class
  ])
  ->select("studentId","term","session","class")
  ->distinct()
  ->get();
 
  return view("schoolproject.selectstudentresult", compact("getStudent"));
}
public function continueresultform(Request $request){
  $studentId = $request->studentId;
  $term = $request->term;
  $session = $request->session;
  $class = $request->class;
  $select = DB::table("results")->where([
  "studentId"=>$studentId,
  "term"=>$term,
  "session"=>$session,
  "class"=>$class
  ])->get();
  $selectDistinct = DB::table("results")->where([
    "studentId"=>$studentId,
    "term"=>$term,
    "session"=>$session,
    "class"=>$class
    ])
    ->select("studentId","term","session","class")
    ->distinct()
    ->get();
    $approve = DB::table("results")
    ->where([
      "studentId"=>$studentId,
      "term"=>$term,
      "session"=>$session,
      "class"=>$class
      ])
    ->select("Schoolstamp")
    ->distinct()
    ->get();
  return view("schoolproject.finalapproveresult", compact("select","selectDistinct","approve"));
}

// sending result
public function sendresult(Request $request){
  $class = DB::table("studentclasses")->get();
  $academic = DB::table("academicsessions")
  ->select("academic_session")
  ->distinct()
  ->get();
  return view("schoolproject.sendresult", compact("class","academic"));
}

public function teachersendresult(Request $request){
  return view("schoolproject.teachersendresult");
}
public function teachersendresultform(Request $request){
  
}

// sending result form

public function sendresultform(Request $request){
  $class  = $request->class;
  $term = $request->term;
  $session = $request->session;
  $teacherId = Session::get("teacher_id");
  
  $selectStudent = DB::table("student-information")->where(
    [
"class" => $class,
"session" => $session,
"term" => $term
    ]
  )
  ->get();
  $subject = DB::table("subjects")->where([
    "class" => $class,
    "session" => $session,
    "term" => $term,
    "tutor" => Session::get("teacher_id")
  ])
  ->get();
// return $session;
  // return $term;
  return view("schoolproject.teachersendresult", compact("selectStudent",  "subject"));
}
public function finalapproveresult(Request $request){
  return view("schoolproject.finalapproveresult");
}
// update principal report
public function updateprincipalreport(Request $request){
  $term = $request->term;
  $session = $request->session;
  $studentId = $request->studentId;
  $class = $request->class;
    if ($request->hasFile('file_upload')) {
      $image = $request->file( 'file_upload');
      $path = $image->store('uploads','public');
      }
  $updateReport = DB::table("results")->where([
    "term"=>$term,
    "session"=>$session,
    "studentId"=>$studentId,
    "class"=>$class
  ])
  ->update( [
      "principalComment" =>$request->principalReport,
      "schoolStamp"=>$path
  ]);
  return redirect()->route("schoolproject.approveresult")->with("showModal", true);
}
}



