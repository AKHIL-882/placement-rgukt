<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Placement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlacementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$placements = Placement::orderBy('id')->get();
        $placements = DB::table('placements')
                ->orderBy('id', 'desc')
                ->get();
        
        return view('welcome',['placements'=>$placements]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $placements = Placement::all();
        return view('create',['placements'=>$placements]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $placement = new Placement();
        $placement->company_name = $request->input('company_name');
        $placement->type = $request->input('type');
        $placement->branch = $request->input('branch');
        $placement->year = $request->input('year');
        $placement->url = $request->input('url');
        $placement->save();
        return redirect('create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // $placement = Placement::find($id)->first();
        // return view('admin.placements.show',[
        //     'placements'=>$placement
        // ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $placement = Placement::find($id)->first();
        return view('edit',[
            'placements'=>$placement
        ]);

        return view('create');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $placement = Placement::where('id',$id)
        ->update([
            'company_name' => $request->input('company_name'),
            'type' => $request->input('type'),
            'branch' => $request->input('branch'),
            'year' => $request->input('year'),
            'url' => $request->input('url'),
        ]);
        
        return redirect('create');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $placement = Placement::find($id);

        $placement->delete();

        return redirect('create');

    }
}
