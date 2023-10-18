<?php

namespace App\Presentation\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InputController extends Controller
{
    public function __construct(
        // private CreateTopikService $create_topik_service,
        // private UpdateTopikService $update_topik_service
    )
    {
    }

    public function showInput(){
        return view('/input');

    }

    // public function createTopik(Request $request){
    //     $request = new CreateTopikRequest(
    //         $request->input('judul'),
    //         $request->input('nama_dosen'),
    //         StatusTopik::tryFrom($request->input('status')),
    //     );

    //     return $this->executeService($this->create_topik_service, $request);
    // }
    // public function updateTopik(Request $request){
    //     $request = new UpdateTopikRequest(
    //         $request->input('id'),
    //         $request->input('judul'),
    //         $request->input('nama_dosen'),
    //         StatusTopik::tryFrom($request->input('status')),
    //     );

    //     return $this->executeService($this->update_topik_service, $request);
    // }
}