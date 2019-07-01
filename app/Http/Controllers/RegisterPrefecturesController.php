<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\RegisterPrefecture;

class RegisterPrefecturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $prefectures = $user->RegisterPrefectures()->pluck('prefecture_id')->toArray();

            $cnt = count($prefectures);
            $comment = "";

            if($cnt == 47) {
                $comment = "全国制覇　おめでとう！";
            }else {
                $comment = "行ったことのある都道府県をクリックして、<br>
                            登録しよう！<br>
                            目指せ全国制覇！";
            }

            $data = [
                'user' => $user,
                'prefectures' => $prefectures,
                'comment' => $comment,
            ];
        }

        return view('welcome', $data);
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
    public function store(Request $request)
    {
        $registerPrefecture = new RegisterPrefecture;
        $registerPrefecture->where('user_id', \Auth::user()->id)->delete();
    
        $prefectures = explode(",", $request->clickedTodofuken);
        $prefecture_id = 0;

        if($request->clickedTodofuken) {
            foreach($prefectures as $prefecture) {
                switch($prefecture) {
                    case "北海道":
                        $prefecture_id = 1;
                        break;
                    case "青森":
                        $prefecture_id = 2;
                        break;
                    case "岩手":
                        $prefecture_id = 3;
                        break;
                    case "宮城":
                        $prefecture_id = 4;
                        break;
                    case "秋田":
                        $prefecture_id = 5;
                        break;
                    case "山形":
                        $prefecture_id = 6;
                        break;
                    case "福島":
                        $prefecture_id = 7;
                        break;
                    case "茨城":
                        $prefecture_id = 8;
                        break;
                    case "栃木":
                        $prefecture_id = 9;
                        break;
                    case "群馬":
                        $prefecture_id = 10;
                        break;
                    case "埼玉":
                        $prefecture_id = 11;
                        break;
                    case "千葉":
                        $prefecture_id = 12;
                        break;
                    case "東京":
                        $prefecture_id = 13;
                        break;
                    case "神奈川":
                        $prefecture_id = 14;
                        break;
                    case "新潟":
                        $prefecture_id = 15;
                        break;
                    case "富山":
                        $prefecture_id = 16;
                        break;
                    case "石川":
                        $prefecture_id = 17;
                        break;
                    case "福井":
                        $prefecture_id = 18;
                        break;
                    case "山梨":
                        $prefecture_id = 19;
                        break;
                    case "長野":
                        $prefecture_id = 20;
                        break;
                    case "岐阜":
                        $prefecture_id = 21;
                        break;
                    case "静岡":
                        $prefecture_id = 22;
                        break;
                    case "愛知":
                        $prefecture_id = 23;
                        break;
                    case "三重":
                        $prefecture_id = 24;
                        break;
                    case "滋賀":
                        $prefecture_id = 25;
                        break;
                    case "京都":
                        $prefecture_id = 26;
                        break;
                    case "大阪":
                        $prefecture_id = 27;
                        break;
                    case "兵庫":
                        $prefecture_id = 28;
                        break;
                    case "奈良":
                        $prefecture_id = 29;
                        break;
                    case "和歌山":
                        $prefecture_id = 30;
                        break;
                    case "鳥取":
                        $prefecture_id = 31;
                        break;
                    case "島根":
                        $prefecture_id = 32;
                        break;
                    case "岡山":
                        $prefecture_id = 33;
                        break;
                    case "広島":
                        $prefecture_id = 34;
                        break;
                    case "山口":
                        $prefecture_id = 35;
                        break;
                    case "徳島":
                        $prefecture_id = 36;
                        break;
                    case "香川":
                        $prefecture_id = 37;
                        break;
                    case "愛媛":
                        $prefecture_id = 38;
                        break;
                    case "高知":
                        $prefecture_id = 39;
                        break;
                    case "福岡":
                        $prefecture_id = 40;
                        break;
                    case "佐賀":
                        $prefecture_id = 41;
                        break;
                    case "長崎":
                        $prefecture_id = 42;
                        break;
                    case "熊本":
                        $prefecture_id = 43;
                        break;
                    case "大分":
                        $prefecture_id = 44;
                        break;
                    case "宮崎":
                        $prefecture_id = 45;
                        break;
                    case "鹿児島":
                        $prefecture_id = 46;
                        break;
                    case "沖縄":
                        $prefecture_id = 47;
                        break;
                }
                $request->user()->registerPrefectures()->create([
                    'prefecture_id' => $prefecture_id,
                ]);
            }
        }
        return redirect('/');
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
        $registerPrefecture = new RegisterPrefecture;
        $registerPrefecture->whereIn('user_id', $id)->delete();

        return back();
    }
}
