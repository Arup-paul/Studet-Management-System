
<div class="modal fade left" id="role-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right modal-success" role="document">
        <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title" id="exampleModalLabel" ><i class="fa fa-registered" aria-hidden="true">Roles</i></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">



<div class="input-group col-md-12">
     <span class="input-group-addon">Name</span>
    {!!   Form::text('name', null, ['class' => 'form-control' ]) !!}
</div>


            </div>
{{-- //INSIDE THE FIELDS Are Having The Input --}}
   <div class="modal-footer">
       <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
       {!! Form::submit('Create Role', ['class' => 'btn btn-success']) !!}
   </div>


        </div>
    </div>
</div>
</div>
