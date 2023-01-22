<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MailController extends Controller
{
    public $resource = "Mail";

    public function index()
    {
        #SET PAGE TITLE    
        $action = "View Mails";
        $resource = $this->resource;
        $pageTitle = $resource.' | '.$action;

        #GET MAIL
        $mails = Mail::all();

        return view('admin.mail.index',compact('resource','action','pageTitle','mails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageTitle = "Create Mail";

        return view('admin.mail.create',compact('pageTitle'));    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'sender'=>'string|required',
            'description'=>'string|required',
            'destination'=>'string|required',
            'date'=>'date|required',
            'file'=>'file',
        ];

        $validated = $request->validate($rules);

        if($validated){
            $mail_data = [
                'sender'=>$request->sender,
                'description'=>$request->sender,
                'destination'=>$request->sender,
                'date'=>$request->date,
                'received_by'=>Auth::user()->id,
                'status'=>'0'
            ];

            if($uploadedFile = $request->file){
                $extention = $uploadedFile->getClientOriginalExtension();                
                $filename = hexdec(uniqid()).'.'.$extention;                
                $destination = 'uploads/';           

                if($uploadedFile->move($destination,$filename)){
                    $mail_data['file'] = $destination.$filename;
                }
            }
            
            if(Mail::create($mail_data)){
                $message = [
                    'type'=>'success',
                    'message'=>'Mail Saved Successfully'
                ];

                return redirect(route('admin.mail.index'))->with($message);
            }
            else{
                return redirect()->back();
            }
            
        }
        else{
            echo "validation errors";exit;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function show(Mail $mail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function edit(Mail $mail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mail $mail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mail $mail)
    {
        //
    }
}
