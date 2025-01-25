<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\article_content;



class article extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	
	 public function __construct()
    {
        $this->middleware('article');

       
    }
	
	
	
	
    public function index()
    {
        
		
		return(view('admin_folder/list_article'));
		
		
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
		return   view('admin_folder/add_article');
		
		
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
		$article  = new article_content();
		
		$article->subject  = $request->subject;
		$article->message  = $request->message;
		
		$article->save();
		
		
	 return	  redirect('/article');
		
		
		
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     return view('admin_folder/show_article')->with('id', $id);
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
		return  view('admin_folder/add_article')->with('id', $id);
		
		
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
		$update  =   article_content::find($id);
		
		$update->subject  =  $request->subject;
		
		$update->message  =  $request->message;
		
		$update->save();
	
		return  redirect('article/'.$id);
		
		
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		
    $delet =   article_content::find($id);
		
		$delet->delete();
		//
	return   redirect('/article');
		
		
    }
}
