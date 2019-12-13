<div class="modal fade" id="test-modal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Upload Tests Info</h4>
            </div>

            <form action="{{url('tests-import')}}" method="post" enctype="multipart/form-data">@csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="logo" class="col-md-2 col-form-label text-md-right">{{ __('File') }}</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-file-excel-o"></i>
                                </div>
                                <input id="logo" type="file"
                                       class="form-control{{ $errors->has('file') ? ' is-invalid' : '' }}"
                                       name="file">
                                @error('logo')
                                <span style="color: red" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary justify-content-center">Import Data</button>
                        <button type="button" style="float:left; width:20%" class="btn btn-danger" data-dismiss="modal">Close</button>

            </form>
        </div>

    </div>
</div>
<!-- /.modal-content -->
</div>
