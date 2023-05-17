<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkerController extends Controller
{

    public function createWorker(Request $request)
    {
        try{
            /*Worker::create([
                'name' => $request->name,
                'position' => $request->position,
                'number' => $request->number
            ]);*/

            $worker = new Worker;

            $worker->name = $request->name;
            $worker->position = $request->position;
            $worker->number = $request->number;
            $worker->save();

            return response()->json([
                'message' => "Worker successfully added."
            ],200);
        }catch(\Exception $e){
            return response()->json([
                'message' => "Something went wrong!"
            ],500);
        }
    }

    public function retreive($id)
    {
        $worker = Worker::find($id);

        if(!$worker){
            return response()->json([
                'message'=>'Worker Not Found.'
            ],404);
        }

        return response()->json([
            'worker' => $worker
        ],200);
    }

    public function update(Request $request, $id)
    {
        try {
            
            $worker = Worker::find($id);
            if(!$worker){
                return response()->json([
                'message'=>'Worker Not Found.'
            ],404);
            }
    
            $worker->name = $request->name;
            $worker->position = $request->position;
            $worker->number = $request->number;
        }catch(\Exception $e){
            return response()->json([
                'message' => "Something went wrong in creating worker!"
            ],500);
        }

        $worker->save();

        return response()->json([
            'message' => "Worker credentials successfully updated."
        ],200);
    }

    public function destroy($id)
    {
        $worker = Worker::find($id);
        if(!$worker){
            return response()->json([
                'message'=>'Worker Not Found.'],404);
        }
    }

    public function index()
    {
        $workers = Worker::all();

        return response()->json([
            'workers'=> $workers
        ]);
    }

}
