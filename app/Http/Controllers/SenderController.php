<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\ConsultMail;

class SenderController extends Controller
{
    public function send_consultation(Request $request) {
        $data = $request->validate([
            "name" => [],
            "subject" => [],
            "phone" => ['required','string']
        ]);

        $send_adr = ["asmi046@gmail.com"];

        if ($data['subject'] === "Покупка продукции" ) $send_adr[] = "sale@mansurovogroup.ru";
        if ($data['subject'] === "Сотрудничество" ) $send_adr[] = "sale@mansurovogroup.ru";
        if ($data['subject'] === "Карьера" ) $send_adr[] = "hr@mansurovogroup.ru";
        if ($data['subject'] === "СМИ" ) $send_adr[] = "info@mansurovogroup.ru";

        foreach ($send_adr as $adr) {
            Mail::to($adr)->send(new ConsultMail($data));
        }


        return ["Сообщение отправлено"];
    }

    public function show_thencs() {
        return view('thencs');
    }
}
