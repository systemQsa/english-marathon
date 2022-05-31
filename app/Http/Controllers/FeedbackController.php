<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Models\Customer;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = Feedback::all();
        return view('admin.home.feedbacks',['feedbacks' => $feedbacks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd("create feedback");
        $customers = Customer::all();

        return view('admin.home.create',compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        request()->validate([
           'comment' => 'required|max:200',
            
        ]);
        $comments = new Feedback;
        $comments->comment = $request->get('feedback');
        $comments->customer_id = $request->get('customer');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/images/',$filename);
            $comments->image = $filename;
        }

        $comments->save();
        //return view('admin.home.show',['comments' => $comments]);
        //return redirect('admin_panel/feedbacks');
        return redirect()->back()->with('status','Comment added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {
        dd('work show method');
        return view('admin.home.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit(Feedback $feedback)
    {
        return view('admin.home.edit',['feedback' => $feedback]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feedback $feedback)
    {
        //dd($request->all());
       
        request()->validate([
            'comment' => 'required',
            
        ]);

        $feedback->update([
            'comment' => $request->get('comment')
        ]);
        
        return redirect('admin_panel/feedbacks');
        
    }
      
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feedback $feedback)
    {
        dd('Delate');
        //$feedback->delete();
       // return redirect('admin_panel/feedbacks');
    }

}
