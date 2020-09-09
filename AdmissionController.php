<?php

namespace App\Http\Controllers;


use App\models\Classes;
use App\models\Sessions;
use App\models\Groupes;
use App\models\Sections;
use App\models\StudentInformation;
use App\models\StudentEducation;
use App\models\Student_Subject;
use App\models\Notice;
use App\models\SiteSetting;
use App\models\StudentPayment;
use App\models\Student;

use Illuminate\Http\Request;
use DB;
use Session;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function student_application(Request $request)
    {
            $input = $request->all();

           $this->validate($request,[
            'name' => 'required',
            'father' => 'required',
            'mother' => 'required',
            'gradianmobile' => 'required||max:11|min:11',
            'ownmobile' => 'required|max:11|min:11',
            'birthday' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'care_of' => 'required',
            'religion' => 'required',
            'classes_id' => 'required',
            'sessiones_id' => 'required',
         ]);



           $student = New Student();
           $student->student_sid  = str_random(6);
           $student->name = $request->name;
           $student->classes_id = $request->classes_id;
           $student->sessions_id = $request->sessiones_id;
           $student->groupes_id = $request->groupes_id;
           $student->password  = str_random(6);
           $student->roll = $request->roll;
           $student->student_status_type = $request->student_status_type;
           $student->status  = 0;
  
           $student->save();

           $last_id =  $student->id;
           $student_sid =  $student->student_sid;
  

           $student_information = New StudentInformation();


           $student_information->student_id =  $last_id;
           $student_information->father = $request->father;
           $student_information->mother = $request->mother;
           $student_information->gender = $request->gender;
           $student_information->religion = $request->religion;
           $student_information->bgroup = $request->bloodgroup;
           $student_information->ownmobile = $request->ownmobile;
           $student_information->gradianmobile = $request->gradianmobile;
           $student_information->birthday = $request->birthday;
           $student_information->careof = $request->care_of;
           $student_information->nationality = $request->nationality;
           $student_information->maritalstatus = $request->maritalstatus;
           $student_information->permanentaddress = $request->permanentaddress;
           $student_information->gradianincome = $request->gradianincome;
           $student_information->occupation = $request->occupation;
           $student_information->address = $request->address;
           $student_information->status = 1;

          $student_information->save();

          $student_education = New StudentEducation();
          
          $student_education->student_id = $last_id;
          $student_education->edu_type   = $request->edu_type;
          $student_education->schoolname = $request->institutename;
          $student_education->preroll    = $request->pre_roll;
          $student_education->prereg     = $request->pre_reg;
          $student_education->pre_session= $request->passing_year;
          $student_education->pre_group= $request->pre_groupes_id;
          $student_education->pre_board= $request->board;
          $student_education->preresult  = $request->pre_result;

          $student_education->save();


          $studentpayment = New StudentPayment();

          $studentpayment->student_id   = $student->id;
          $studentpayment->sessions_id  = $request->sessiones_id;
          $studentpayment->feecategory_id= 1;
          $studentpayment->recipt_no    = $request->payment_recipt;
          $studentpayment->discount     = 0;
          $studentpayment->amount       = $request->payment_amount;
          $studentpayment->paid_amount  = $request->payment_amount;
          $studentpayment->payment_method= 1;
          $studentpayment->payment_date = Date('Y-m-d');
          $studentpayment->status       = 1;

          $studentpayment->save();


        if($request->groupes_id==1){
          if($input['compulary_subject'] != ''){
            foreach ($input['compulary_subject'] as $key => $value) {
                $StudentSub_dist = new Student_Subject;
                $StudentSub_dist->student_id      = $last_id;
                $StudentSub_dist->classes_id      = $request->classes_id;
                $StudentSub_dist->session_id      = $request->sessiones_id;
                $StudentSub_dist->groupes_id = $request->groupes_id;
                $StudentSub_dist->subject_id      = $input['compulary_subject'][$key];
                $StudentSub_dist->subject_type    = 1;
                $StudentSub_dist->option_type     = 1;
                $StudentSub_dist->status          = 1;
                $StudentSub_dist->save();
            }
          }

          if($input['compulary_science'] != ''){
            foreach ($input['compulary_science'] as $key => $value) {
                $StudentSub_dist = new Student_Subject;
                $StudentSub_dist->student_id      = $last_id;
                $StudentSub_dist->classes_id      = $request->classes_id;
                $StudentSub_dist->session_id      = $request->sessiones_id;
                $StudentSub_dist->groupes_id = $request->groupes_id;
                $StudentSub_dist->subject_id      = $input['compulary_science'][$key];
                $StudentSub_dist->subject_type    = 1;
                $StudentSub_dist->option_type     = 2;
                $StudentSub_dist->status          = 1;
                $StudentSub_dist->save();
            }
          }



            $Studentscienceoptional = new Student_Subject;
            $Studentscienceoptional->student_id      = $last_id;
            $Studentscienceoptional->classes_id      = $request->classes_id;
            $Studentscienceoptional->session_id      = $request->sessiones_id;
            $Studentscienceoptional->groupes_id = $request->groupes_id;
            $Studentscienceoptional->subject_id      = $request->science_optional;
            $Studentscienceoptional->subject_type    = 1;
            $Studentscienceoptional->option_type     = 2;
            $Studentscienceoptional->status          = 1;
            $Studentscienceoptional->save();


            $Studentscienceoptional = new Student_Subject;
            $Studentscienceoptional->student_id      = $last_id;
            $Studentscienceoptional->classes_id      = $request->classes_id;
            $Studentscienceoptional->session_id      = $request->sessiones_id;
            $Studentscienceoptional->groupes_id = $request->groupes_id;
            $Studentscienceoptional->subject_id      = $request->science_lastsubject;
            $Studentscienceoptional->subject_type    = 2;
            $Studentscienceoptional->option_type     = 3;
            $Studentscienceoptional->status          = 1;
            $Studentscienceoptional->save();


            }
            elseif($request->groupes_id==2){
 
              if($input['compulary_subject'] != ''){
                foreach ($input['compulary_subject'] as $key => $value) {
                    $StudentSub_dist = new Student_Subject;
                    $StudentSub_dist->student_id      = $last_id;
                    $StudentSub_dist->classes_id      = $request->classes_id;
                    $StudentSub_dist->session_id      = $request->sessiones_id;
                    $StudentSub_dist->groupes_id = $request->groupes_id;
                    $StudentSub_dist->subject_id      = $input['compulary_subject'][$key];
                    $StudentSub_dist->subject_type    = 1;
                    $StudentSub_dist->option_type     = 1;
                    $StudentSub_dist->status          = 1;
                    $StudentSub_dist->save();
                }
              }

              if($input['humanities_subject'] != ''){
                foreach ($input['humanities_subject'] as $key => $value) {
                    $StudentSub_dist = new Student_Subject;
                    $StudentSub_dist->student_id      = $last_id;
                    $StudentSub_dist->classes_id      = $request->classes_id;
                    $StudentSub_dist->session_id      = $request->sessiones_id;
                    $StudentSub_dist->groupes_id = $request->groupes_id;
                    $StudentSub_dist->subject_id      = $input['humanities_subject'][$key];
                    $StudentSub_dist->subject_type    = 1;
                    $StudentSub_dist->option_type     = 2;
                    $StudentSub_dist->status          = 1;
                    $StudentSub_dist->save();
                }
              }

              $Studentscienceoptional = new Student_Subject;
              $Studentscienceoptional->student_id      = $last_id;
              $Studentscienceoptional->classes_id      = $request->classes_id;
              $Studentscienceoptional->session_id      = $request->sessiones_id;
              $Studentscienceoptional->groupes_id = $request->groupes_id;
              $Studentscienceoptional->subject_id      = $request->humanitieoptional;
              $Studentscienceoptional->subject_type    = 2;
              $Studentscienceoptional->option_type     = 3;
              $Studentscienceoptional->status          = 1;
              $Studentscienceoptional->save();





            }

            elseif($request->groupes_id==3){

              if($input['compulary_subject'] != ''){
                foreach ($input['compulary_subject'] as $key => $value) {
                    $StudentSub_dist = new Student_Subject;
                    $StudentSub_dist->student_id      = $last_id;
                    $StudentSub_dist->classes_id      = $request->classes_id;
                    $StudentSub_dist->session_id      = $request->sessiones_id;
                    $StudentSub_dist->groupes_id = $request->groupes_id;
                    $StudentSub_dist->subject_id      = $input['compulary_subject'][$key];
                    $StudentSub_dist->subject_type    = 1;
                    $StudentSub_dist->option_type     = 1;
                    $StudentSub_dist->status          = 1;
                    $StudentSub_dist->save();
                }
              }


              if($input['business_subject'] != ''){
                foreach ($input['business_subject'] as $key => $value) {
                    $StudentSub_dist = new Student_Subject;
                    $StudentSub_dist->student_id      = $last_id;
                    $StudentSub_dist->classes_id      = $request->classes_id;
                    $StudentSub_dist->session_id      = $request->sessiones_id;
                    $StudentSub_dist->groupes_id = $request->groupes_id;
                    $StudentSub_dist->subject_id      = $input['business_subject'][$key];
                    $StudentSub_dist->subject_type    = 1;
                    $StudentSub_dist->option_type     = 2;
                    $StudentSub_dist->status          = 1;
                    $StudentSub_dist->save();
                }
              }



              $Studentscienceoptional = new Student_Subject;
              $Studentscienceoptional->student_id      = $last_id;
              $Studentscienceoptional->classes_id      = $request->classes_id;
              $Studentscienceoptional->session_id      = $request->sessiones_id;
              $Studentscienceoptional = $request->groupes_id;
              $Studentscienceoptional->subject_id      = $request->businessoptional;
              $Studentscienceoptional->subject_type    = 2;
              $Studentscienceoptional->option_type     = 3;
              $Studentscienceoptional->status          = 1;
              $Studentscienceoptional->save();

          }
         

 
           Session::flash('success','Your Application are successfully Submit. Please print this file 2 copy.');
           return redirect('/application/preview/'.$student_sid);

    }

    public function application_preview($student_id)
    {

        $notices = Notice::limit(5)->orderBy('id','DESC')->get();
        $sitesetting = SiteSetting::find(1);

        $student = DB::table('students')
                      ->leftJoin('student_informations','students.id','=','student_informations.student_id')
                      ->leftJoin('student_payments','students.id','=','student_payments.student_id')
                      ->leftJoin('student_educations','students.id','=','student_educations.student_id')
                      ->leftJoin('classes','students.classes_id','=','classes.id')
                      ->leftJoin('sessions','students.sessions_id','=','sessions.id')
                      ->leftJoin('groupes','students.groupes_id','=','groupes.id')
                      ->where('students.student_sid',$student_id)
                      ->select('students.*','students.id as studentid','student_educations.*','students.name as student_name','student_informations.*','student_payments.*','classes.*','classes.name as class_name','sessions.*','sessions.name as session_name','groupes.*','groupes.name as groupes_name','student_payments.*')
                      ->first(); 


          $data['commonsubject'] = Student_Subject::where('option_type',1)
                                                        ->where('student_id',$student->id)
                                                        ->get(); 

          $data['groupsubject'] = Student_Subject::where('option_type',2)
                                                        ->where('student_id',$student->id)
                                                        ->get(); 

          $data['optionalsubject'] = Student_Subject::where('option_type',3)
                                                        ->where('student_id',$student->id)
                                                        ->get();

         
        return view('fontend.application_preview',compact('student','notices','sitesetting','student_information'),$data);
    }

















    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
