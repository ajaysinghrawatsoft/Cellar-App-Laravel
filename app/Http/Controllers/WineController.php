<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wine;

class WineController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['only' => ['create', 'store', 'edit', 'update', 'destroy', 'index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //print_r(Auth::user());die;

        $wines = Wine::orderBy('id','DESC')->paginate(10);
        return view('pages.list',compact('wines'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'grapes' => 'required',
            'country' => 'required',
            'region' => 'required',
            'year' => 'required',
            'notes' => 'required',
            'wineImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $wine = new Wine($request->input()) ;

        if($file = $request->hasFile('wineImage'))
        {
            $file = $request->file('wineImage') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/images/' ;
            $file->move($destinationPath,$fileName);
            $wine->wineImage = $fileName ;
        }

        $wine->save() ;

        return redirect()->route('wine.index')
            ->with('success','Wine added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wine = Wine::find($id);

        return view('pages.show', compact('wine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wine = Wine::find($id);

        return view('pages.edit', compact('wine'));
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
        $this->validate($request, [
            'name' => 'required',
            'grapes' => 'required',
            'country' => 'required',
            'region' => 'required',
            'year' => 'required',
            'notes' => 'required'
        ]);

        $wine = Wine::find($id);
        if($file = $request->hasFile('wineImage'))
        {
            $file = $request->file('wineImage') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/images/' ;
            $file->move($destinationPath,$fileName);
            $wine->wineImage = $fileName ;
            unlink(public_path().'/'.$request->get('_oldImg'));

        }

        $wine->name     = $request->get('name');
        $wine->grapes   = $request->get('grapes');
        $wine->country  = $request->get('country');
        $wine->region   = $request->get('region');
        $wine->year     = $request->get('year');
        $wine->notes    = $request->get('notes');
        $wine->save();

        return redirect()->route('wine.index')
            ->with('success','Wine updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Wine::find($id)->delete();

        return redirect()->route('wine.index')->with('success','Wine deleted successfully');
    }

    /**
     * Display 20 wines in the list.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function wineList(Request $request)
    {
        $wines = Wine::orderBy('id','DESC')->paginate(20);
        return view('pages.wineList',compact('wines'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }
}
