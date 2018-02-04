<?php

namespace App\Http\Controllers;

use CURLFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Telegram\Bot\Api;


class ServicesController extends Controller
{
    public function indexPromo($id)
    {
        Session::put('main', false);
        return view('info', ['id' => $id]);
    }

    public function promoneed(Request $request)
    {
        $token = "488563867:AAG9nVWor6z6sRa2eScsFZo3Dm52HsV9YRc";
        $chat_id = "-230841099";
        $telegram = new Api($token);
        $arr1 = array(
            'Имя пользователя: ' => $name = $request->input('promo_name'),
            'Телефон: ' => $phone = $request->input('promo_phone'),
            'Майл: ' => $email = $request->input('promo_email'),
        );
        $txt="НУЖЕН ПРОМО САЙТ \n";
        foreach($arr1 as $key => $value) {
            $txt .= "<b>".$key."</b>".$value."\n";
        };

        $telegram->sendMessage(["chat_id" => $chat_id, "text" => $txt,'parse_mode'=>'html']);
        return redirect('/services/promo');
    }



    public function index($id)
    {
        Session::put('main', false);
        return view('services',['id' => $id, ]);
    }

    public function prices(Request $request, $id)
    {

       $whos ='';
        //что?
            if($request->input('who1')){ $whos .= ' Веб-сайт '; }
            if($request->input('who2')){ $whos .= ' Дизайн '; }
        //сроки
            $times = '';
            if($request->input('time1')){ $times .= ' Реальные сроки ';}
            if($request->input('time2')){ $times .= ' Важен процесс ';}
            if($request->input('time3')){ $times .= ' Срочно нужен ';}
        //бюджет
            $prices = '';
            if($request->input('price1')){ $prices .= ' 10-30 тыс. руб. ';}
            if($request->input('price2')){ $prices .= ' 30-50 тыс. руб. ';}
            if($request->input('price3')){ $prices .= ' 50-80 тыс. руб. ';}
            if($request->input('price4')){ $prices .= ' 80-100 тыс. руб. ';}
        //адаптивность
            $adaptives = '';
            if($request->input('adaptive1')){ $adaptives .= ' Десктопная версия ';}
            if($request->input('adaptive2')){ $adaptives .= ' Планшетная версия ';}
            if($request->input('adaptive3')){ $adaptives .= ' Телефонная версия ';}
        //система управления
            $systems = '';
            if($request->input('systemcontrol1')){ $systems .= ' Не нужна ';}
            if($request->input('systemcontrol2')){ $systems .= ' Wordpress ';}
            if($request->input('systemcontrol3')){ $systems .= ' Joomla ';}
            if($request->input('systemcontrol4')){ $systems .= ' Индивидуальная ';}
        //как узнали
            $knows = '';
            if($request->input('know1')){ $knows .= ' Наружная реклама ';}
            if($request->input('know2')){ $knows .= ' Социальные сети ';}
            if($request->input('know3')){ $knows .= ' По рекомендации ';}
            if($request->input('know4')){ $knows .= ' От сотридников RedRee ';}
            $urlImage='';
            if($request->document) {
                $image = $request->document;
                $pref = rand(1, 100000);
                $name = $pref;
                $image->move(public_path() . '/tz/', $name);
                $urlImage = "http://redree.ru/public/tz/" . $name;
            }

        $arr1 = array(
            'Что? ' => $whos,
            'Сроки: ' => $times,
            'Бюджет: ' => $prices,
            'Адаптивность: ' => $adaptives,
            'Система управления: ' => $systems,
            'Как узнали: ' => $knows,
            'Имя: ' => $name = $request->input('name'),
            'Сайт компании: ' => $sait = $request->input('sait'),
            'Название фирмы: ' => $firma = $request->input('firma'),
            'Номер телефона: ' => $phone = $request->input('phone'),
            'Должность: ' => $post = $request->input('post'),
            'Майл: ' => $email = $request->input('email'),
        );
        $txt="РАССЧЁТ \n";
        foreach($arr1 as $key => $value) {
            $txt .= "<b>".$key."</b>".$value."\n";
        };

        $token = "538967091:AAGOTfx1SYe8iU28zvSWcWfLe4SPpOIExK0";
        $chat_id = "-201227854";

        $telegram = new Api($token);

        $telegram->sendMessage(["chat_id" => $chat_id, "text" => $txt,'parse_mode'=>'html']);

        if($request->document){$telegram->sendDocument(["chat_id" => $chat_id, "document" => $urlImage]);}

        return redirect('/services/'.$id);
    }

}
