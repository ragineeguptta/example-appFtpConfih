<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Filesystem\FilesystemManager;

class FtpController extends Controller
{
    public function showDashboard()
    {
        $users = DB::table('tbl_ftp')->get();
 
        return view('ftpindex', ['users' => $users]);
    }

    
    public function GetFtp()
    {
        $users = DB::table('tbl_ftp')->get();
        //$myConfigArrayvalue = MyModel::find($id);
        $ab = [];
        foreach ($users as $value) {
            $config = [
                'driver'   => 'sftp',
                'host'     => $value->host,
                'port'     => $value->port,
                'username' => $value->username,
                'password' => $value->password,
             ];
             $fsMgr = new FilesystemManager(app());
             $sftpDisk = $fsMgr->createSftpDriver($config);
             $file_path = 'readme.txt';
             $cd = $sftpDisk->get($file_path);
             array_push($ab, $cd);
            //  return  $ab;
        }
        dd($ab );
        
    }
}
