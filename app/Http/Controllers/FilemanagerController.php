<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilemanagerController extends Controller
{
    public function getIndex(){
        $data = [];
        $data['page_title'] = "Repository Manager";
        return view("dashboard", $data);
    }
    public function index(){
        return view('filemanager');
    }
    public function repo($slashData = null, Request $request){
        if(Storage::disk('share')->exists($slashData) and Storage::disk('share')->get($slashData)){
            $ext=pathinfo(storage_path($slashData),PATHINFO_EXTENSION);
            $viewerExt=array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf');
            if(in_array($ext,$viewerExt) and $request->input('download') != 'yes')
                return view('previewRepo')
                    ->with('breadcrumb',explode('/',$slashData));

            else
                return Storage::disk('share')->download($slashData);
        }
        else {
            if($cari=$request->input('cari')){
                $datafiles=Storage::disk('share')->allFiles();
                $datafiles=preg_grep("/".str_replace(' ','.*',$cari)."/i", $datafiles);
                $dataDirectories=Storage::disk('share')->allDirectories();    
                $dataDirectories=preg_grep("/".str_replace(' ','.*',$cari)."/i", $dataDirectories);
            }
            else {
                $datafiles=Storage::disk('share')->files($slashData);
                $dataDirectories=Storage::disk('share')->directories($slashData);                    
            }
            $viewerExt=array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf');
            return view('listRepo')
                ->with('viewerExt',$viewerExt)
                ->with('datafiles',$datafiles)
                ->with('dataDirectories',$dataDirectories)
                ->with('slashData',$slashData)
                ->with('breadcrumb',explode('/',$slashData));
        }
    }
}
