 <div class="row">


     <div class="col-md-6">
         <div class="form-group">
           {!! Form::label('full_name', 'Full Name:') !!}
          <p>{{ $admission->first_name }} {{ $admission->last_name }}</p>
          </div>
      </div>

     <div class="col-md-6">
         <!-- Father Name Field -->
        <div class="form-group">
            {!! Form::label('father_name', 'Father Name:') !!}
            <p>{{ $admission->father_name }}</p>
        </div>
     </div>

     <div class="col-md-6">
         <!-- Mother Name Field -->
        <div class="form-group">
            {!! Form::label('mother_name', 'Mother Name:') !!}
            <p>{{ $admission->mother_name }}</p>
        </div>
     </div>

     <div class="col-md-6">
        <!-- Father Phone Field -->
        <div class="form-group">
            {!! Form::label('father_phone', 'Father Phone:') !!}
            <p>{{ $admission->father_phone }}</p>
        </div>
     </div>

     <div class="col-md-6">
         <!-- Gender Field -->
            <div class="form-group">
                {!! Form::label('gender', 'Gender:') !!}
                <p>{{ $admission->gender }}</p>
            </div>
      </div>

     <div class="col-md-6">
         <!-- Email Field -->
        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            <p>{{ $admission->email }}</p>
        </div>
    </div>

     <div class="col-md-6">
        <!-- Dob Field -->
        <div class="form-group">
            {!! Form::label('dob', 'Dob:') !!}
            <p>{{ $admission->dob }}</p>
        </div>
   </div>

     <div class="col-md-6">
        <!-- Phone Field -->
        <div class="form-group">
            {!! Form::label('phone', 'Phone:') !!}
            <p>{{ $admission->phone }}</p>
        </div>
  </div>

     <div class="col-md-6">
        <!-- Address Field -->
        <div class="form-group">
            {!! Form::label('address', 'Address:') !!}
            <p>{{ $admission->address }}</p>
        </div>
   </div>

     <div class="col-md-6">
        <!-- Current Address Field -->
        <div class="form-group">
            {!! Form::label('current_address', 'Current Address:') !!}
            <p>{{ $admission->current_address }}</p>
        </div>
    </div>

     <div class="col-md-6">
        <!-- Nationality Field -->
        <div class="form-group">
            {!! Form::label('nationality', 'Nationality:') !!}
            <p>{{ $admission->nationality }}</p>
        </div>
    </div>

     <div class="col-md-6">
        <!-- Passport Field -->
        <div class="form-group">
            {!! Form::label('passport', 'Passport:') !!}
            <p>{{ $admission->passport }}</p>
        </div>
    </div>



     <div class="col-md-6">
        <!-- Dateregistared Field -->
        <div class="form-group">
            {!! Form::label('dateregistared', 'Dateregistared:') !!}
            <p>{{ $admission->dateregistared }}</p>
        </div>
    </div>

     <div class="col-md-6">
         <div class="form-group">
            {!! Form::label('department', 'Department:') !!}
            <p>{{ $admission->department->department_name }}</p>
         </div>
     </div>

      <div class="col-md-6">
         <div class="form-group">
            {!! Form::label('batch', 'Batch:') !!}
            <p>{{ $admission->batch->batch }}</p>
        </div>
     </div>

      <div class="col-md-6">
         <div class="form-group">
            {!! Form::label('faculty', 'Faculty:') !!}
            <p>{{ $admission->faculty->faculty_name}}</p>
        </div>
     </div>

     <div class="col-md-6">
         <!-- Image Field -->
        <div class="form-group">
            {!! Form::label('image', 'Image:') !!}
            <img src="{{asset('images/admission_images/'.$admission->image) }}" width="50px" alt="">
        </div>
     </div>

       <div class="col-md-6">
        <!-- Status Field -->
        <div class="form-group">
            {!! Form::label('status', 'Status:') !!}
            @if($admission->status == 1)
            <span class="badge btn-success">Active</span>
            @elseif($admission->status == 0)
            <span class="badge btn-success">InActive</span>
            @endif
        </div>
    </div>
 </div>







