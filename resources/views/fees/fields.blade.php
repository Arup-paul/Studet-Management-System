<!-- Fee Structure Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fee_structure_id', 'Fee Structure Id:') !!}
    {!! Form::text('fee_structure_id', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Payment Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment', 'Payment:') !!}
    {!! Form::text('payment', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Due Field -->
<div class="form-group col-sm-6">
    {!! Form::label('due', 'Due:') !!}
    {!! Form::text('due', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('fees.index') }}" class="btn btn-default">Cancel</a>
</div>
