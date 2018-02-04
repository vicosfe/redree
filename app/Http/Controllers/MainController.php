<?php

namespace App\Http\Controllers;

use App\Mail\MailClass;
use CURLFile;
use Illuminate\Http\Request;
use App\Add;
use App\Pupel;
use App\Work;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Telegram\Bot\Api;

class MainController extends Controller
{
    public function index()
    {
        Session::put('main', true);

        return view('welcome');
    }

    public function addZ(Request $request)
    {


        $arr = array(
            'Имя пользователя: ' => $name = $request->input('name1'),
            'Телефон: ' => $phone = $request->input('phone1'),
            'Майл: ' => $email = $request->input('email1')
        );
        $txt="КОНТАКТЫ \n";
        foreach($arr as $key => $value) {
            $txt .= "<b>".$key."</b>".$value."\n";
        };


        $token = "488563867:AAG9nVWor6z6sRa2eScsFZo3Dm52HsV9YRc";
        $chat_id = "-230841099";
        $telegram = new Api($token);
        $telegram->sendMessage(["chat_id" => $chat_id, "text" => $txt,'parse_mode'=>'html']);

        $addZ= new Add;
        $addZ->name = $request->input('name1');
        $addZ->email = $request->input('email1');
        $addZ->phone = $request->input('phone1');
        $addZ->save();

        return redirect('/');
    }

    public function puples(Request $request)
    {

        $arr1 = array(
            'Имя пользователя: ' => $name = $request->input('reg_name'),
            'Телефон: ' => $phone = $request->input('reg_tel'),
            'Майл: ' => $email = $request->input('reg_mail'),
        );
        $txt="УЗНАТЬ ПОДРОБНОСТИ \n";
        foreach($arr1 as $key => $value) {
            $txt .= "<b>".$key."</b>".$value."\n";
        };

        $token = "488563867:AAG9nVWor6z6sRa2eScsFZo3Dm52HsV9YRc";
        $chat_id = "-230841099";

        $telegram = new Api($token);
        $telegram->sendMessage(["chat_id" => $chat_id, "text" => $txt,'parse_mode'=>'html']);

        $puple= new Pupel;
        $puple->name = $request->input('reg_name');
        $puple->email = $request->input('reg_mail');
        $puple->phone = $request->input('reg_tel');
        $puple->save();
        return redirect('/') ;
    }

    public function sendme(Request $request)
    {
        $token = "488563867:AAG9nVWor6z6sRa2eScsFZo3Dm52HsV9YRc";
        $chat_id = "-230841099";
        $arr1 = array(
            'Имя пользователя: ' => $name = $request->input('Sname'),
            'Телефон: ' => $phone = $request->input('Sphone'),
            'Майл: ' => $email = $request->input('Semail'),
        );
        $txt="СВЯЖИТЕСЬ СО МНОЙ \n";
        foreach($arr1 as $key => $value) {
            $txt .= "<b>".$key."</b>".$value."\n";
        };

        $telegram = new Api($token);
        $telegram->sendMessage(["chat_id" => $chat_id, "text" => $txt,'parse_mode'=>'html']);


        return redirect('/') ;
    }
}


