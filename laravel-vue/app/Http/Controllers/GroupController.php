<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    //
    
    public function index()
    {
       
        $groups = Group::where('userid',\Auth::id() )->latest()->paginate(5);

        return view('groups.index',compact('groups') )
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function search(Request $request)
    {
              
       
        $search = $request->get('search');
        $groups = Group::where('name', 'like', '%'.$search.'%')->paginate(5);
        return view('groups.index',compact('groups'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'detail' => 'required',
            
        ]);


        Group::create($request->all());
        return redirect()->route('groups.index')
                        ->with('success','Group created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Group  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        
        return view('groups.show',compact('group'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Group  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        return view('groups.edit',compact('group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Group  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        request()->validate([
            'name' => 'required',
            'detail' => 'required',
            
        ]);
        $group->update($request->all());
        return redirect()->route('groups.index')
                        ->with('success','Groups updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Group  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        $group->delete();
        return redirect()->route('groups.index')
                        ->with('success','Group deleted successfully');
    }


     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Group  $product
     * @return \Illuminate\Http\Response
     */
    public function manage($groupid)
    {
        //return view('groups.manage',compact('groupid'));
       
       $groups = Group::where('id', $groupid)->first();
       
       return view('groups.manage',compact('groups'));
    }
}
