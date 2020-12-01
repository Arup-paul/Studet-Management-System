<!-- Fee Structure Id Field -->
<div class="form-group">
    {!! Form::label('fee_structure_id', 'Fee Structure Id:') !!}
    <p>{{ $fee->fee_structure_id }}</p>
</div>

<!-- Payment Field -->
<div class="form-group">
    {!! Form::label('payment', 'Payment:') !!}
    <p>{{ $fee->payment }}</p>
</div>

<!-- Due Field -->
<div class="form-group">
    {!! Form::label('due', 'Due:') !!}
    <p>{{ $fee->due }}</p>
</div>

