<style>
    .teacher_image{
        height: 160px;
        padinng:0 1px;
        background:#eee;
        width:140px;
        margin:0 auto;
        border-radius: 50%;
        vertical-align: middle;
        border:1px solid #222;

    }
</style>

<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control text-capitalize','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control text-capitalize','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Gender:') !!}
    <label for="">
            <input type="radio" name="gender" id="gender" value="Male" required checked>Male
        </label>
        <label for="">
            <input type="radio" name="gender" id="gender" value="Female" required >Female
        </label>
</div>
<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
        <label for="">
            <input type="radio" name="status" id="status" value="0" required checked>Single
        </label>
        <label for="">
            <input type="radio" name="status" id="status" value="1" required >Married
        </label>

</div>
<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Dob Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dob', 'Date Of Birth:') !!}
    {!! Form::text('dob', null, ['class' => 'form-control','id'=>'dob']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#dob').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>


<!-- Nationality Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nationality', 'Nationality:') !!}
    {!! Form::text('nationality', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Passport Field -->
<div class="form-group col-sm-6">
    {!! Form::label('passport', 'Passport:') !!}
    {!! Form::text('passport', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>




<!-- Dateregistared Field -->
<div class="form-group col-sm-6">
<input type="hidden" name="dateregistared" class="form-control" value="{{date('Y-m-d')}}">

</div>

@push('scripts')
    <script type="text/javascript">
        $('#dateregistared').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush






<!-- Address Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('address', 'Address:') !!}
<textarea name="address" id="address" class="form-control" cols="" rows="">@if($teacher) {{$teacher->address}}@endif   </textarea>
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    @if($teacher)
    <img src="{{asset('images/teacher_images/'.$teacher->image) }}" width="50px" alt="">
    @endif
    <input type="file"  name="image" id="image" accept="image/x-png,image/png,image/jpg,image/jpeg">

</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    <input type="hidden" class="form-control" name="user_id" value="{{auth()->user()->id}}">
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Register Teacher', ['class' => 'btn btn-info']) !!}
    <a href="{{ route('teachers.index') }}" class="btn btn-warning">Cancel</a>
</div>

@push('scripts')
  <script>


      $('#image').on('change',function(e){
         showFile(this,'#showImage');
      });

      function showFile(fileInput,img,showName){
          if(fileInput.files && fileInput.files[0]){
              var reader = new FileReader();
              reader.onload = function(e){
                  $(img).attr('src',e.target.result);
              }
              reader.readAsDataURL(fileInput.files[0]);
          }
          $(showName).text(fileInput.files[0].name)
      };

 }


  </script>
@endpush
