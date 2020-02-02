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
    public function repo($slashData = null){
        if(Storage::disk('share')->exists($slashData) and Storage::disk('share')->get($slashData)){
            $ext=pathinfo(storage_path($slashData),PATHINFO_EXTENSION);
            $viewerExt=array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'zip', 'rar');
            if(in_array($ext,$viewerExt))
                echo "Viewer file $slashData - $ext";
            else
               echo "Download file $slashData - $ext";
        }
        else {
            $files=Storage::disk('share')->files($slashData);
            $directories=Storage::disk('share')->directories($slashData);
            $data=array_merge($directories,$files);
            return view('listRepo');
        }
    }
}
