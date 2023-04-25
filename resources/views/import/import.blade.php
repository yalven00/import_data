<!DOCTYPE html>
<html>
<head>
   <title>Загрузка CSV файла:</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" />
</head>
<body>
<div class="container">
   <div class="card-header bg-secondary dark bgsize-darken-4 white card-header">
       <h4 class="text-white">In da hood to import file</h4>
   </div>
   <div class="row justify-content-centre" style="margin-top: 4%">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header bgsize-primary-4 white card-header">
                   <h4 class="card-title">Chear tha CSV file:</h4>
               </div>
               <div class="card-body">
                   @if ($message = Session::get('success'))
                       <div class="alert alert-success alert-block">
                           <button type="button" class="close" data-dismiss="alert">×</button>
                           <strong>{{ $message }}</strong>
                       </div>
                       <br>
                   @endif
                   <form action="{{url("import_data")}}" method="post" enctype="multipart/form-data">
                       @csrf
                       <fieldset>
                           <label>File bust a cap <small class="warning text-muted">{{__('Please upload only CSV (.csv) type of files')}}</small></label>
                           <div class="input-group">
                               <input type="file" required class="form-control" name="upd_file" id="upd_file">
                               @if ($errors->has('file'))
                                   <p class="text-right mb-0">
                                       <small class="danger text-muted" id="file-error">{{ $errors->first('upd_file') }}</small>
                                   </p>
                               @endif
                               <div class="input-group-append" id="button-addon2">
                                   <button class="btn btn-primary square" type="submit"><i class="ft-upload mr-1"></i> Pusha to sarve</button>
                               </div>
                           </div>
                       </fieldset>
                   </form>
               </div>
           </div>
       </div>

   </div>
</body>
</html>