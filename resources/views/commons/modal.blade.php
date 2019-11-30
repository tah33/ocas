   <style type="text/css">
     .select2-container--default .select2-selection--multiple .select2-selection__rendered {
    box-sizing: border-box;
    list-style: none;
    margin: 0;
    padding: 0px 200px;
    width: 100%;
}
   </style>

   <div class="modal fade" id="modal-common" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Subject</h4>
              </div>
         
             <form action="{{url('commons')}}" method="post">@csrf
               <div class="modal-body">
               <div class="form-group row">
                            <label for="minimum" class="col-md-2 col-form-label text-md-right s">{{ __('Subjects') }}</label>
                            <div class="col-md-8">
               <select name="subject_id[]" multiple="multiple" class="form-control{{ $errors->has('subject_id') ? ' is-invalid' : '' }} select2" data-placeholder="Choose Subjects">
                @foreach($subjects as $subject)
                 <option value="{{$subject->id}}">{{$subject->name}}</option>
                 @endforeach
               </select>
             </div>
           </div>
               <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save changes</button>
                

             </form>
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          </div>

              </div>
            </div>
            <!-- /.modal-content -->
          </div>
