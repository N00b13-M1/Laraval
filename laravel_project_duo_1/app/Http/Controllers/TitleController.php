<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title;
use Illuminate\Support\Facades\Schema;

class TitleController extends Controller
{
    public function index(){

        $table = "titles";
        $columns = Schema::getColumnListing('titles');
        $datas= Title::all();

        return view('back/pages/tables',compact('columns', 'datas', 'table'));
    }

    public function destroy($id){
        $item = Title::find($id);
        $item->delete();
        return redirect()->back();
    }
}
