@extends('welcome')
@section('title','Application')  
@section('content')
 
 <style>
   .application {}
   .application h4{
    font-size: 18px;
    border-bottom:1px solid #000;
   }
 </style>
   
<div class="content-body">
  
  <div class="panel panel-primary">
     <div class="panel-heading">
        <h3>Student Application</h3>
     </div>
     <div class="panel-body">
        <div class="application">

           @if ($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                             @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                                       @endforeach
                                       </ul>
                                </div>
                           @endif
          
       
      <form action="{{ url('/application/store') }}" method="post" enctype='multipart/form-data'>
          @csrf
          <p style="padding-left: 10px;font-weight:900;border-bottom: 1px solid  #000">Payment Information</p>
          <div class="row">
           <div class="col-xs-12 col-md-6">
                      <label for="">Receipt No :</label>
                      <input type="text" class="form-control" name="payment_recipt" value="{{ old('payment_recipt') }}" placeholder="Recipt number" required>
                      <br>
                    </div> 
                      

                   <div class="col-xs-12 col-md-6">
                      <label for="">Payment Amount :</label>
                      <input type="number" class="form-control" name="payment_amount" value="{{ old('payment_amount') }}"  placeholder="amount" required>
                      <br>
                    </div>
            </div>

          <p style="padding-left: 10px;font-weight:900;border-bottom: 1px solid  #000">Basic Information</p>
          <div class="row">
                    <div class="col-xs-12 col-md-6">
                      <label for="">Applicant Name :</label>
                      <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Student Name" required>
                      <br>
                    </div> 
                    <div class="col-xs-12 col-md-6">
                      <label for="">Gender :</label>
                       <select name="gender" id="" class="form-control">
                          <option value="">Choose Gender</option>
                          <option {{ old('gender') == 'Male' ? 'selected' : ''}} value="Male">Male</option>
                          <option {{ old('gender') == 'Female' ? 'selected' : ''}} value="Female">Female</option>
                       </select>
                      <br>
                    </div> 
                    <div class="col-xs-12 col-md-6">
                      <label for="">Father Name :</label>
                      <input type="text" class="form-control" name="father" value="{{ old('father') }}" placeholder="Father Name" required>
                      <br>
                    </div> 
                   <div class="col-xs-12 col-md-6">
                      <label for="">Mother Name :</label>
                      <input type="text" class="form-control" name="mother" value="{{ old('mother') }}" placeholder="Mother Name" required>
                      <br>
                    </div>
                  

                   
                   <div class="col-xs-12 col-md-6">
                      <label for="">Birthday :</label>
                      <input type="text" class="form-control"  name="birthday" value="{{ old('birthday') }}" placeholder="Birthday" required>
                      <br>
                    </div>
                     
                    <div class="col-xs-12 col-md-6">
                      <label for="">Religion :</label>
                       <select name="religion" id="" class="form-control">
                          <option value="">Choose Religion</option>
                          <option {{ old('religion') == 'Islam' ? 'selected' : ''}} value="Islam">Islam</option>
                          <option {{ old('religion') == 'Hindu' ? 'selected' : ''}} value="Hindu">Hindu</option>
                          <option {{ old('religion') == 'Chistran' ? 'selected' : ''}} value="Chistran">Chistran</option>
                          <option {{ old('religion') == 'Bondho' ? 'selected' : ''}} value="Bondho">Bondho</option>
                       </select>
                      <br>
                    </div> 
                     <div class="col-xs-12 col-md-6">
                     <label for="">Blood Group :</label>
                       <select name="bloodgroup" id="" class="form-control" required>
                            <option value="">Choose Blood Group</option>
                            <option {{ old('bloodgroup') == 'N/A' ? 'selected' : ''}} value="N/A">N/A</option>
                            <option {{ old('bloodgroup') == 'A+' ? 'selected' : ''}} value="A+">A+</option>
                            <option {{ old('bloodgroup') == 'A-' ? 'selected' : ''}} value="A-">A-</option>
                            <option {{ old('bloodgroup') == 'B+' ? 'selected' : ''}} value="B+">B+</option>
                            <option {{ old('bloodgroup') == 'B-' ? 'selected' : ''}} value="B-">B-</option>
                            <option {{ old('bloodgroup') == 'AB+' ? 'selected' : ''}} value="AB+">AB+</option>
                            <option {{ old('bloodgroup') == 'AB-' ? 'selected' : ''}} value="AB-">AB-</option>
                            <option {{ old('bloodgroup') == 'O+' ? 'selected' : ''}} value="O+">O+</option>
                            <option {{ old('bloodgroup') == 'O-' ? 'selected' : ''}} value="O-">O-</option>
                       </select>
                      <br>
                    </div>   
                    <div class="col-xs-12 col-md-6">
                      <label for="">Nationality :</label>
                       <select name="nationality" id="nationality" class="form-control">
                           <option value="Bangladeshi">Bangladeshi</option>
                          
                       </select>
                      <br>
                    </div> 
                     <div class="col-xs-12 col-md-6">
                     <label for="">Marital Status :</label>
                       <select name="maritalstatus" id="" class="form-control" required>
                          <option value="">Choose Marital Status</option>
                            
                            <option {{ old('maritalstatus') == 'Married' ? 'selected' : ''}} value="Married">Married</option>
                            <option {{ old('maritalstatus') == 'Unmarried' ? 'selected' : ''}} value="Unmarried">Unmarried</option>
                            
                       </select>
                      <br>
                    </div> 
                   <div class="col-xs-12 col-md-6">
                      <label for="">Care Of :</label>
                       <textarea name="care_of" id="" class="form-control" value=""  placeholder="Care of person">{{ old('care_of') }}</textarea>
                      <br>
                    </div> 
                     <div class="col-xs-12 col-md-6">
                      <label for="">Gradian Mobile :</label>
                      <input type="text" class="form-control" name="gradianmobile" value="{{ old('gradianmobile') }}" placeholder="Gradian Mobile Number" required>
                      <br>
                    </div> 
                    <div class="col-xs-12 col-md-6">
                      <label for="">Personal Mobile :</label>
                      <input type="text" class="form-control" name="ownmobile" value="{{ old('ownmobile') }}" placeholder="Personal Mobile Number" required>
                      <br>
                    </div> 
                    <div class="col-xs-12 col-md-6">
                      <label for="">Father’s/Guardian’s Annual Income :</label>
                     <input name="gradianincome" id="" class="form-control" value="{{ old('gradianincome') }}"  placeholder="Father’s/Guardian’s Annual Income">
                      <br>
                   </div>

                   <div class="col-xs-12 col-md-6">
                      <label for="">Guardian’s Occupation :</label>
                     <input name="occupation" id="occupation" class="form-control" value="{{ old('occupation') }}"  placeholder="Occupation">
                      <br>
                   </div> 


                </div>
                   
        <p style="padding-left: 10px;font-weight:900;border-bottom: 1px solid  #000">Admission Information</p>
           <div class="row">
              <div class="col-xs-12 col-md-6">
                      <label for="">Class / Graduate Name :</label>
                       <select name="classes_id" id="classes_id" class="form-control">
                          <option value="">Choose Class</option>
                          @foreach($classes as $key => $value)
                          <option {{ old('classes_id') == $key ? 'selected' : ''}}  value="{{ $value->id }}">{{ $value->name }}</option>
                          @endforeach
                       </select>
                      <br>
                    </div> 
                    
                    <div class="col-xs-12 col-md-6">
                      <label for="">Session :</label>
                       <select name="sessiones_id" id="" class="form-control">
                           @foreach($sessiones as $key=> $value)
                          <option {{ old('sessiones_id') == $key ? 'selected' : ''}}  value="{{ $value->id }}">{{ $value->name }}</option>
                          @endforeach 

                       </select>
                      <br>
                    </div> 
                    
                   <div class="col-xs-12 col-md-6">
                      <label for="">Select Group / Department :</label>
                      <select name="groupes_id" id="groupes_id" class="form-control">
                          <option value="">Select Group / Department</option>
                           @foreach($groupes as $key => $value)
                          <option  value="{{ $value->id }}">{{ $value->name }}</option>
                          @endforeach
                       </select>
                      <br>
                    </div>  
                
                     <div class="col-xs-12 col-md-6">
                       <label for="">Applicant Status :</label>
                          <select name="student_status_type" class="form-control">
                              <option {{ old('student_status_type') == '1' ? 'selected' : ''}} value="1">Regular</option>
                              <option {{ old('student_status_type') == '2' ? 'selected' : ''}} value="2">Irregular</option>
                              <option {{ old('student_status_type') == '3' ? 'selected' : ''}} value="3">TC</option>
                          </select>
                      <br>
                    </div>  

                    
                    
                   <hr>
           <br>
           </div>
          <p style="padding-left: 10px;font-weight:900;border-bottom: 1px solid  #000">SSC Information</p>
           <div class="row">
             <div class="col-xs-12 col-md-6">
                                <label for="Class name">Examination :</label>
                                <select name="edu_type" class="form-control">
                                    <option value="">Choose Examination</option>
                                    <option {{ old('edu_type') == '3' ? 'selected' : ''}} value="3">SSC/Dakhil/Equivalent</option>
                                    <option {{ old('edu_type') == '4' ? 'selected' : ''}} value="4">SSC Vocational</option>
                                 </select>
                            </div>

                            <div class="col-xs-12 col-md-6">
                                <label for="">Institute Name :</label>
                                <input type="text" class="form-control" name="institutename" placeholder="Privious institute Name" value="{{ old('institutename')}}" required>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <label for="Class name">Passsing Year :</label>
                                <select name="passing_year" class="form-control">
                                    <option value="">Choose one</option>
                                    <option {{ old('passing_year') == '2015' ? 'selected' : ''}} value="2015">2015</option>
                                    <option {{ old('passing_year') == '2016' ? 'selected' : ''}} value="2016">2016</option>
                                    <option {{ old('passing_year') == '2017' ? 'selected' : ''}} value="2017">2017</option>
                                    <option {{ old('passing_year') == '2018' ? 'selected' : ''}} value="2018">2018</option>
                                    <option {{ old('passing_year') == '2019' ? 'selected' : ''}} value="2019">2019</option>
                                 </select>
                            </div> 
                            <div class="col-xs-12 col-md-6">
                                <label for="Class name">Select Group :</label>
                                <select name="pre_groupes_id" class="form-control">
                                    <option value="">Choose Group</option>
                                       <option  {{ old('pre_groupes_id') == 'Science' ? 'selected' : ''}} value="Science">Science</option>
                                    <option {{ old('pre_groupes_id') == 'Humanities' ? 'selected' : ''}} value="Humanities">Humanities</option>
                                    <option {{ old('pre_groupes_id') == 'Business Studies' ? 'selected' : ''}} value="Business Studies">Business Studies</option>
                                 </select>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <label for="Board">Board :</label>
                                <select name="board" class="form-control" required>
                                    <option value="" selected>Select One</option>
                                    <option  {{ old('board') == 'Barisal' ? 'selected' : ''}} value="Barisal">Barisal</option>
                                    <option  {{ old('board') == 'Chattogram' ? 'selected' : ''}} value="Chattogram">Chattogram</option>
                                    <option  {{ old('board') == 'Cumilla' ? 'selected' : ''}} value="Cumilla">Cumilla</option>
                                    <option  {{ old('board') == 'Dhaka' ? 'selected' : ''}} value="Dhaka">Dhaka</option>
                                    <option  {{ old('board') == 'Dinajpur' ? 'selected' : ''}} value="Dinajpur">Dinajpur</option>
                                    <option  {{ old('board') == 'Jessore' ? 'selected' : ''}} value="Jessore">Jessore</option>
                                    <option  {{ old('board') == 'Rajshahi' ? 'selected' : ''}} value="Rajshahi">Rajshahi</option>
                                    <option  {{ old('board') == 'Sylhet' ? 'selected' : ''}} value="Sylhet">Sylhet</option>
                                    <option  {{ old('board') == 'Madrasah' ? 'selected' : ''}} value="Madrasah">Madrasah</option>
                                    <option  {{ old('board') == 'Technical' ? 'selected' : ''}} value="Technical">Technical</option>
                                    <option  {{ old('board') == 'DIBS' ? 'selected' : ''}} value="DIBS">DIBS(Dhaka)</option>
                                </select>
                            </div>
                           <div class="col-xs-12 col-md-6" >
                                <label for="Roll">Roll :</label>
                                <input type="text" class="form-control" name="pre_roll" value="{{ old('pre_roll') }}" placeholder="Enter Institute Roll" required>
                            </div>

                            <div class="col-xs-12 col-md-6">
                                <label for="Roll">Registration :</label>
                                <input type="text" class="form-control" name="pre_reg" value="{{ old('pre_reg') }}" placeholder="Enter Institute Roll" required>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <label for="Result">Result's :</label>
                                <input type="text" class="form-control" name="pre_result" value="{{ old('pre_result') }}"  placeholder="Result" required>
                            </div>
                              <br>
                            </div>
                            <br>
                            <p style="padding-left: 10px;font-weight:900;border-bottom: 1px solid  #000">HSC Information</p>
          <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <label for="Class name">Examination :</label>
                                <select name="examination1" class="form-control">
                                    <option value="">Choose Examination</option>
                                    <option {{ old('examination1') == 5 ? 'selected' : ''}} value="5">HSC/Dakhil/Equivalent</option>
                                    <option {{ old('examination1') == 6 ? 'selected' : ''}} value="6">HSC Vocational</option>
                                 </select>
                            </div>

                            <div class="col-xs-12 col-md-6">
                                <label for="">Institute Name :</label>
                                <input type="text" class="form-control" name="institutename1" placeholder="Privious institute Name" value="{{ old('institutename1') }} ">
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <label for="Class name">Passsing Year :</label>
                                <select name="passing_year1" class="form-control">
                                    <option value="">Choose one</option>
                                    <option {{ old('passing_year1') == 2017 ? 'selected' : ''}} value="2017">2017</option>
                                    <option {{ old('passing_year1') == 2018 ? 'selected' : ''}} value="2018">2018</option>
                                    <option {{ old('passing_year1') == 2019 ? 'selected' : ''}} value="2019">2019</option>
                                 </select>
                            </div> 
                            <div class="col-xs-12 col-md-6">
                                <label for="Class name">Select Group :</label>
                                <select name="pre_groupes_id1" class="form-control">
                                    <option value="">Choose Group</option>
                                       <option {{ old('pre_groupes_id1') == 'Science' ? 'selected' : ''}}  value="Science">Science</option>
                                    <option {{ old('pre_groupes_id1') == 'Humanities' ? 'selected' : ''}}  value="Humanities">Humanities</option>
                                    <option {{ old('pre_groupes_id1') == 'Business studies' ? 'selected' : ''}}  value="Business studies">Business Studiies</option>
                                 </select>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <label for="Board">Board :</label>
                                <select name="board1" class="form-control">
                                    <option value="" selected>Select One</option>
                                    <option  {{ old('board1') == 'Barisal' ? 'selected' : ''}} value="Barisal">Barisal</option>
                                    <option  {{ old('board1') == 'Chattogram' ? 'selected' : ''}} value="Chattogram">Chattogram</option>
                                    <option  {{ old('board1') == 'Cumilla' ? 'selected' : ''}} value="Cumilla">Cumilla</option>
                                    <option  {{ old('board1') == 'Dhaka' ? 'selected' : ''}} value="Dhaka">Dhaka</option>
                                    <option  {{ old('board1') == 'Dinajpur' ? 'selected' : ''}} value="Dinajpur">Dinajpur</option>
                                    <option  {{ old('board1') == 'Jessore' ? 'selected' : ''}} value="Jessore">Jessore</option>
                                    <option  {{ old('board1') == 'Rajshahi' ? 'selected' : ''}} value="Rajshahi">Rajshahi</option>
                                    <option  {{ old('board1') == 'Sylhet' ? 'selected' : ''}} value="Sylhet">Sylhet</option>
                                    <option  {{ old('board1') == 'Madrasah' ? 'selected' : ''}} value="Madrasah">Madrasah</option>
                                    <option  {{ old('board1') == 'Technical' ? 'selected' : ''}} value="Technical">Technical</option>
                                    <option  {{ old('board1') == 'DIBS' ? 'selected' : ''}} value="DIBS">DIBS(Dhaka)</option>
                                </select>
                            </div>
                           <div class="col-xs-12 col-md-6" >
                                <label for="Roll">Roll :</label>
                                <input type="text" class="form-control" name="pre_roll1" value="{{ old('pre_roll1') }}" placeholder="Enter Institute Roll">
                            </div>

                            <div class="col-xs-12 col-md-6">
                                <label for="Roll">Registration :</label>
                                <input type="text" class="form-control" name="pre_reg1" value="{{ old('pre_reg1') }}" placeholder="Enter Institute Roll">
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <label for="Result">Result's :</label>
                                <input type="text" class="form-control" name="pre_result1" value="{{ old('pre_result1') }}"  placeholder="Result">
                            </div>
                            <br>
                            </div>
                            <br>
   <p style="padding-left: 10px;font-weight:900;border-bottom: 1px solid  #000">Personal Address</p>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <label for="">Present Address :</label>
                               <textarea name="address" id="" class="form-control" value=""  placeholder="Enter Your Present Address">{{ old('address') }}</textarea>
                                <br>
                             </div> 
                             <div class="col-xs-12 col-md-6">
                                <label for="">Permanent Address :</label>
                               <textarea name="permanentaddress" id="" class="form-control" value=""  placeholder="Enter Your Permanent Address">{{ old('permanentaddress') }}</textarea>
                                <br>
                             </div> 

                             </div>



                        <p style="padding-left: 10px;font-weight:900;border-bottom: 1px solid  #000">Subject Choice</p>
                           
                                <div class="row" id="common">
                                  <div class="col-xs-12 col-md-3">
                                     Compulsory  Subject
                                  </div>
                                  <div class="col-xs-12 col-md-9">
                                   @foreach($compulary_subject as $subject)
                                    <p>{{ $subject->name }}</p>
                                    <input type="hidden" name="compulary_subject[]" value="{{ $subject->id }}">
                                         
                                   @endforeach


                                    <br>
                                    <br>
                                  </div>
                                </div>

                                <div class="row" id="science">
                                  <div class="col-xs-12 col-md-3">
                                     Science Subject
                                  </div>
                                  <div class="col-xs-12 col-md-9">

                                    @foreach($sciencesgroup as $subject)
                                    <p>{{ $subject->name }}</p>
                                    <input type="hidden" name="compulary_science[]" value="{{ $subject->id }}">
                                         
                                   @endforeach
                                    

                                    <select name="science_lastsubject" id="" class="form-control">
                                      <option value="">Select 3rd Subject</option>
                                        @foreach($sciences as $science)
                                          <option value="{{ $science->id }}">{{ $science->name }}</option>
                                        @endforeach

                                    </select> 
                                    <br>
                                  </div>
                                </div>

                                <div class="row" id="scienceoptional">
                                  <div class="col-xs-12 col-md-3">
                                     Optional Subject
                                  </div>
                                  <div class="col-xs-12 col-md-9">
                                    <select name="science_optional" id="" class="form-control">
                                      <option value="">Select 4th Subject</option>
                                       @foreach($sciencesoptional as $science)
                                          <option value="{{ $science->id }}">{{ $science->name }}</option>
                                      @endforeach
                                    </select>
                                  
                                  </div>
                                </div> 




                                <div class="row" id="humanities">
                                  <div class="col-xs-12 col-md-3">
                                     Humanities Subject
                                  </div>

                                  <div class="col-xs-12 col-md-9">
                                     <select name="humanities_subject[]" id="" class="form-control">
                                       <option value="">Select 1st Subject</option>
                                       @foreach($Humanities as $humanitie)
                                       <option value="{{ $humanitie->id }}">{{ $humanitie->name }}</option>
                                       @endforeach

                                     </select>
                                    <br>
                                     <select name="humanities_subject[]" id="" class="form-control">
                                       <option value="">Select 2nd Subject</option>
                                        @foreach($Humanities as $humanitie)
                                       <option value="{{ $humanitie->id }}">{{ $humanitie->name }}</option>
                                       @endforeach
                                     </select>
                                     <br>
                                     <select name="humanities_subject[]" id="" class="form-control">
                                       <option value="">Select 3rd Subject</option>
                                        @foreach($Humanities as $humanitie)
                                       <option value="{{ $humanitie->id }}">{{ $humanitie->name }}</option>
                                       @endforeach
                                     </select>
                                    <br>
                                  </div>
                                </div>

                                <div class="row" id="humanitieoptional">
                                  <div class="col-xs-12 col-md-3">
                                     Optional Subject
                                  </div>
                                  <div class="col-xs-12 col-md-9">
                                    <select name="humanitieoptional" id="" class="form-control">
                                      <option value="">Select 4th Subject</option>
                                       
                                       @foreach($Humanities as $humanitie)
                                       <option value="{{ $humanitie->id }}">{{ $humanitie->name }}</option>
                                       @endforeach

                                    </select>
                                  </div>
                                </div>

                                <div class="row" id="business">
                                  <div class="col-xs-12 col-md-3">
                                     Business Studies Subject
                                  </div>

                                  <div class="col-xs-12 col-md-9">
                                     <select name="business_subject[]" id="" class="form-control">
                                       <option value="">Select Subject</option>
                                        @foreach($businesses as $humanitie)
                                       <option value="{{ $humanitie->id }}">{{ $humanitie->name }}</option>
                                       @endforeach
                                     </select>
                                    <br>
                                     <select name="business_subject[]" id="" class="form-control">
                                       <option value="">Select Subject</option>
                                        @foreach($businesses as $humanitie)
                                        <option value="{{ $humanitie->id }}">{{ $humanitie->name }}</option>
                                        @endforeach
                                     </select>
                                     <br>
                                     <select name="business_subject[]" id="" class="form-control">
                                       <option value="">Select Subject</option>
                                        @foreach($businesses as $humanitie)
                                       <option value="{{ $humanitie->id }}">{{ $humanitie->name }}</option>
                                       @endforeach 
                                     </select>
                                    <br>
                                  </div>
                                </div>



                                <div class="row" id="businessoptional">
                                  <div class="col-xs-12 col-md-3">
                                     Optional Subject
                                  </div>
                                  <div class="col-xs-12 col-md-9">
                                    <select name="businessoptional" id="" class="form-control">
                                      <option value="">Select 4th Subject</option>
                                       @foreach($businessoptional as $humanitie)
                                       <option value="{{ $humanitie->id }}">{{ $humanitie->name }}</option>
                                       @endforeach
                                    </select>
                                  </div>
                                </div>

  
                            <div class="col-xs-12 col-md-12">
                                        <label for=""></label>
                                        <br>
                                        <input type="submit" class="btn btn-primary" value="Submit">
                            </div>
  
        </form>
      </div>





 
     </div>
  </div>

  


  </div>

@section('customjs')
  



    <script>
      $('#common').hide();
      $('#science').hide();
      $('#scienceoptional').hide();
      $('#humanities').hide();
      $('#humanitieoptional').hide();
      $('#business').hide();
      $('#businessoptional').hide();



       $('#classes_id').on('change',function(){
        var classes_id = $('#classes_id').val(); 

        if(classes_id==13){

       $('#groupes_id').on('change',function(){
        var groupes_id = $('#groupes_id').val();


        if(groupes_id==1){
            $('#common').show();
            $('#science').show();
            $('#scienceoptional').show();
            $('#humanities').hide();
            $('#humanitieoptional').hide();
            $('#business').hide();
            $('#businessoptional').hide();
        }
        else if(groupes_id==2)
        {
              $('#common').show();
              $('#science').hide();
              $('#scienceoptional').hide();
              $('#humanities').show();
              $('#humanitieoptional').show();
              $('#business').hide();
              $('#businessoptional').hide();
        }
        else if(groupes_id==3)
        {
              $('#common').show();
              $('#science').hide();
              $('#scienceoptional').hide();
              $('#humanities').hide();
              $('#humanitieoptional').hide();
              $('#business').show();
              $('#businessoptional').show();
        }

    });

}


});










    </script>









@endsection
@endsection