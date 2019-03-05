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
            if(env('MAIL_CONTACT_CAPTCHA') == TRUE){
                if($contact['correctsum'] == $contact['captcha']){
                    Mail::to(env('MAIL_TO_ADDRESS'))->send(new ContactMail($contact));
                    return redirect()->back()->with('success', 'Cảm ơn bạn đã liên hệ chúng tôi!');
                }else{
                    return redirect()->back()->with('error', 'Captcha không đúng, vui lòng nhập lại!');
                }
            }else{
                Mail::to(env('MAIL_TO_ADDRESS'))->send(new ContactMail($contact));
                return redirect()->back()->with('success', 'Cảm ơn bạn đã liên hệ chúng tôi!');
            }
            
        } catch (Exception $ex) {
            info($ex->getMessage());
            return redirect()->back()->with('error', 'Gửi mail không thành công, vui lòng thử lại!');
        }
    }
}
