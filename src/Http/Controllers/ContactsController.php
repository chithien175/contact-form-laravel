<?php

namespace ThienPham\Contacts\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use ThienPham\Contacts\Mail\ContactMail;

class ContactsController extends Controller
{
    public function contactStore(Request $request){
        try {
            $contact = $request->all();
           
            Mail::to(env('MAIL_TO_ADDRESS'))->send(new ContactMail($contact));
            return redirect()->back()->with('success', 'Cảm ơn bạn đã liên hệ chúng tôi!');
        } catch (Exception $ex) {
            info($ex->getMessage());
            return redirect()->back()->with('success', 'Gửi mail không thành công, vui lòng thử lại!');
        }
    }
}
