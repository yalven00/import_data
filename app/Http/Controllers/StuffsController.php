<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Exception;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Models\Stuff;
use App\Http\Requests\UploadRequest;

class StuffsController extends Controller
{
   
    public function index() 
    {
     $data =  Stuff::paginate(15);
     return view('import/index',compact('data'));
    }

    
    public function import_form()
    {
     return view('import/import');
    }


    public function import_data(UploadRequest $request) 
    {

       $up_file = $request->file('upd_file');

       try{

           $spreadsheet = IOFactory::load($up_file->getRealPath());
           $sheet        = $spreadsheet->getActiveSheet();
           $row_limit    = $sheet->getHighestDataRow();
           $column_limit = $sheet->getHighestDataColumn();
           $row_range    = range( 2, $row_limit );
           $column_range = range( 'M', $column_limit );
           $startcount = 2;
           $data = array();

           foreach ( $row_range as $row ) {
              
               $data[] = [
                   'code' =>$sheet->getCell( 'A' . $row )->getValue(),
                   'title' => $sheet->getCell( 'B' . $row )->getValue(),
                   'level1' => $sheet->getCell( 'C' . $row )->getValue(),
                   'level2' => $sheet->getCell( 'D' . $row )->getValue(),
                   'level3' => $sheet->getCell( 'E' . $row )->getValue(),
                   'price' =>$sheet->getCell( 'F' . $row )->getValue(),
                   'price_sp' => $sheet->getCell( 'G' . $row )->getValue(),
                   'fields_properties' => $sheet->getCell( 'H' . $row )->getValue(),
                   'mutual_purchases' => $sheet->getCell( 'I' . $row )->getValue(),
                   'unit_of_measure' => $sheet->getCell( 'J' . $row )->getValue(),
                   'image_path' =>$sheet->getCell( 'K' . $row )->getValue(),
                   'description' => $sheet->getCell( 'L' . $row )->getValue(),
                   'show_on_main' =>$sheet->getCell( 'M' . $row )->getValue(),
               ];

               $startcount++;
           }

           DB::table('stuffs')->insert($data);

       } catch (Exception $e) {
           $error_code = $e->errorInfo[1];
           return back()->withErrors('There was a problem to upload data!');
       }

       return back()->withSuccess('The file uploaded ok!');    
     }




}
