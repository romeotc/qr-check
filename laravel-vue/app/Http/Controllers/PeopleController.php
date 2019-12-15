<?php

namespace App\Http\Controllers;
use App\People;
use App\Group;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    
    public function index($groupid)
    {
        //
       // $groups = Group::where('userid',\Auth::id() )->latest()->paginate(5);
        $groups = Group::where('id', $groupid)->first();
        $peoples = People::where('groupid', $groupid)->paginate(5);
      //  echo "<pre>";
       // var_dump($peoples);
       // echo "</pre>";
        return view('peoples.index',compact('peoples'),compact('groups'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @param  \App\Group  $product
     */
    public function create(Group $groupid)
    {
        //
        //echo $groupid;
        
        return view('peoples.create',compact('groupid'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @param  \App\Group  $product
     */
    public function store(Request $request,$groupid)
    {
        //
        $group = Group::where('id', $groupid)->first();
        //echo $group;
        request()->validate([
            'name' => 'required',
            'lastname' => 'required',
            'detail' => 'required',
            
        ]);


        People::create($request->all());
        return redirect()->route('peoples.index',$group->id)
                        ->with('success','People created successfully.');  
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * @param  \App\Group  $product
     * @param  \App\People  $product
     */
    public function edit($groupid,$peopleid)
    {
        //
       // echo $groups;
       // $groups = Group::where('id', $groupid)->first();
        $peoples = People::where('id', $peopleid)->first();
       // echo $peoples;
        echo $groupid;
        return view('peoples.edit',compact('peoples'),compact('groupid'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * @param  \App\Group  $product
     * @param  \App\People  $product
     */
    public function update(Request $request,$group, People $people)
    {
        //
       
        $groups = Group::where('id', $group)->first();
        //echo $group->id;
        request()->validate([
            'name' => 'required',
            'lastname' => 'required',
            'detail' => 'required',
            
        ]);

    
        $people->update($request->all());
        return redirect()->route('peoples.index',$groups->id)
                        ->with('success','People created successfully.');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @param  \App\People  $product
     * @param  \App\Group  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($groups, People $people)
    {
        //
        
        $people->delete();
        return redirect()->route('peoples.index',$groups)
                       ->with('success','Group deleted successfully');
    }
}
