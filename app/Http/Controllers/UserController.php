<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Exports\UserExport;
use App\Imports\UserImport;
class UserController extends Controller
{
     public function exportUser(){
        return Excel::download(new UserExport, 'user.xlsx');
     }
     public function importUser(Request $request){
        Excel::import(new UserImport, $request->file('file'));
     }
}
