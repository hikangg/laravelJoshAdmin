<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Legend;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;

class LegendsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$legends = Legend::latest()->get();
		return view('admin.legends.index', compact('legends'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.legends.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

	    $legend= new Legend($request->except(''));
		
		$legend->save();
		return redirect('admin/legends')->with('success', Lang::get('message.success.create'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$legend = Legend::findOrFail($id);
		return view('admin.legends.show', compact('legend'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$legend = Legend::findOrFail($id);
		return view('admin.legends.edit', compact('legend'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
		$legend = Legend::findOrFail($id);

		

		
		$legend->update($request->except(''));
		return redirect('admin/legends')->with('success', Lang::get('message.success.update'));
	}

	/**
    	 * Delete confirmation for the given Legend.
    	 *
    	 * @param  int      $id
    	 * @return View
    	 */
    	public function getModalDelete($id = null)
    	{
            $error = '';
            $model = '';
            $confirm_route =  route('admin.legends.delete',['id'=>$id]);
            return View('admin/layouts/modal_confirmation', compact('error','model', 'confirm_route'));

    	}

    	/**
    	 * Delete the given Legend.
    	 *
    	 * @param  int      $id
    	 * @return Redirect
    	 */
    	public function getDelete($id = null)
    	{
    		$legend = Legend::destroy($id);

            // Redirect to the group management page
            return redirect('admin/legends')->with('success', Lang::get('message.success.delete'));

    	}

}