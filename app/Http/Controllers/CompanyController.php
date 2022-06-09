<?php

namespace App\Http\Controllers;

use App\Mail\MyTestMail;
use App\Models\Companies;
use App\Models\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//        dd('index');
        $companies=Companies::all();
        return view('Company.index')->with(compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
//        dd('create');
        return view('Company.create');
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
        $validated = $request->validate([
            'name' => 'required|',
            'email' => 'required|',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=100,height=100',
        ]);
        $company=new Companies();
        $details = [
            'title' => 'Mail from Sami',
            'body' => 'This is for testing email using smtp'
        ];

        Mail::to($request->email)->send(new MyTestMail($details));
        $company->name=$request->name;
        $company->email=$request->email;

        if($request->hasFile("image")){



//            $rand=rand('111111111','999999999');
//            $images=$request->file("image");
//            $ext=$images->extension();
//            $image_name=$rand.'.'.$ext;
//            $request->file("image")->storeAs('/public/EmployeeImages',$image_name);
//            $productImageArr['images']=$image_name;
//            dd()
            $image=$request->file('image');
            $ext=$image->extension();
            $image_name=time().'.'.$ext;
          $path=  $image->storeAs('/public/CompanyImages',$image_name);
//          dd($path);
            $company->logo=$image_name;

        }
        $company->save();
        return redirect('company')->with('message','Company Added Successfully');



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
     */
    public function edit($id)
    {
        //
        $company=Companies::find($id);
        return view('Company.edit')->with(compact('company'));
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
//        dd($id);
        $validated = $request->validate([
            'name' => 'required|',
            'email' => 'required|',
        ]);
        $company=Companies::find($id);
        $company->name=$request->name;
        $company->email=$request->email;

        if($request->hasFile("image")){
            $image=$request->file('image');
            $ext=$image->extension();
            $image_name=time().'.'.$ext;
            $path=  $image->storeAs('/public/CompanyImages',$image_name);
//          dd($path);
            $company->logo=$image_name;

        }
        $company->save();
        return redirect('company')->with('message','Company Updated Successfully');
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
        $company=Companies::find($id);
        $company->delete();
        return redirect()->back()->with('message','company Deleted Successfully');
    }
    public function dashboard(){
        return view('dashboard');
    }
}
