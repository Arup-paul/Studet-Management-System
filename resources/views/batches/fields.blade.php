

<div class="modal fade left" id="batch-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right modal-success" role="document">
        <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title" id="exampleModalLabel" >Add New Batch</h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">



  <!-- Name Field -->
<div class="form-group ">
     {!! Form::label('batch', 'Batch Year:') !!}
    {!! Form::text('batch', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>


            </div>
{{-- //INSIDE THE FIELDS Are Having The Input --}}
   <div class="modal-footer">
       {!! Form::submit('Create Batch', ['class' => 'btn btn-primary']) !!}
       <a href="{{ route('batches.index') }}" class="btn btn-default">Cancel</a>
   </div>


        </div>
    </div>
</div>
</div>
