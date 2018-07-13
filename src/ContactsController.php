<?php

namespace ThienPham\Contacts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        return view('contacts::contact');
    }

    public function store(Request $request){
        // echo "<pre>";
        // print_r($request->all());
        // echo "</pre>";

        try {
            $contact = $request->all();
           
            Mail::to(setting('contact.send_to_email'))->send(new ContactEmail($contact));
            return back()->with('success', 'Cảm ơn bạn đã liên hệ chúng tôi!');
        } catch (Exception $ex) {
            info($ex->getMessage());
            return back()->with('success', 'Quá trình gửi mail lỗi!');
        }
    }
}
