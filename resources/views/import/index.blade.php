<!DOCTYPE html>
<html>
<head>
   <title>Данные:</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" />
</head>
<body>
<div class="container">
   <div class="card-header bg-secondary dark bgsize-darken-4 white card-header">
       <h4 class="text-white">In da hood data</h4>
   </div>
   <div class=" card-content table-responsive">
                       <table id="example" class="table table-striped table-bordered" style="width:100%">
                           <thead>
                           <th>Код</th>
                           <th>Наименование</th>
                           <th>Уровень1</th>
                           <th>Уровень2</th>
                           <th>Уровень3</th>
                           <th>Цена</th>
                           <th>ЦенаСП</th>
                           <th>Количество</th>
                           <th>Поля свойств</th>
                           <th>Совместные покупки</th>
                           <th>Единица измерения</th>
                           <th>Картинка</th>
                           <th>Выводить на главной</th>
                           <th>Описание</th>
                           </thead>
                           <tbody>
                           @if(!empty($data) && $data->count())
                               @foreach($data as $row)
                                   <tr>
                                       <td>{{ $row->code }}</td>
                                       <td>{{ $row->title }}</td>
                                       <td>{{ $row->level1 }}</td>
                                       <td>{{ $row->level2 }}</td>
                                       <td>{{ $row->level3 }}</td>
                                       <td>{{ $row->price }}</td>
                                       <td>{{ $row->price_sp }}</td>
                                       <td>{{ $row->fields_properties }}</td>
                                       <td>{{ $row->mutual_purchases}}</td>
                                       <td>{{ $row->unit_of_measure }}</td>
                                       <td>{{ $row->image_path }}</td>
                                        <td>{{ $row->show_on_main}}</td>
                                       <td>{{ $row->description }}</td>
                                   </tr>
                               @endforeach
                           @else
                               <tr>
                                   <td colspan="10">Thu no founda stuff</td>
                               </tr>
                           @endif
                           </tbody>
                       </table>
                       {!! $data->links() !!}
                   </div>
               </div>
           </div>
       </div>
   </div>
</body>
</html>