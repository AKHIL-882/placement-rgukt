<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Placement;
use Illuminate\Http\Request;

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
        $placements = Placement::all();
        return view('admin.placements.index',['placements'=>$placements]);
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
        return view('admin.placements.create',['placements'=>$placements]);

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
        return redirect('admin/placements');
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
        return view('admin.placements.edit',[
            'placements'=>$placement
        ]);
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

        $placement = Placement::where('project_id',$id)
        ->update([
            'company_name' => $request->input('company_name'),
            'type' => $request->input('type'),
            'branch' => $request->input('branch'),
            'year' => $request->input('year'),
            'url' => $request->input('url'),
        ]);
        $placement->save();
        return redirect('admin/placements');
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
        $placement = Placement::find($id)->delete();

        return redirect('admin/project');

    }
}
