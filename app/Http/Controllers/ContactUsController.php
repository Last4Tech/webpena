<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Mail\ContactMail;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Mail;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.email.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendemail(Request $request)
    {
        
        $contact = new Contact;
        $contact->nama = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();

        return with('Pesan anda telah terkirim, kami akan menghubungi anda nanti.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Subscribe(Request $request)
    {
        $contact = new Contact;
        $contact->email = $request->email;
        $contact->save();

        /**return with('email anda telah tersimpan, kami akan menghubungi anda nanti.');**/
        return redirect('/#footer')->with('status', 'email anda telah tersimpan, kami akan menghubungi anda nanti!');
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
    }
}
