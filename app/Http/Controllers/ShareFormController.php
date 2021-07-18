<?php

namespace App\Http\Controllers;

use App\Models\ShareForm;
use Illuminate\Http\Request;

class ShareFormController extends Controller
{
     public function store(Request $request)
    {
        // $this->validate($request, [
        //     'images' => 'required',
        //     'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        // ]);


                $already = ShareForm::where('user_id', auth()->user()->id)->first();
                if ($already) {
                           return redirect()->back()->with('message', 'Share already applied !');

                }

        $shares = new ShareForm();
     $shares->app_name = request('app_name');
     $shares->app_district = request('app_district');
     $shares->app_mun = request('app_mun');
     $shares->app_ward = request('app_ward');
     $shares->app_cit = request('app_cit');
     $shares->app_mob = request('app_mob');
     $shares->app_ph = request('app_ph');
     $shares->app_email = request('app_email');
     $shares->app_father = request('app_father');
     $shares->app_grandf = request('app_grandf');
     $shares->app_hw = request('app_hw');
     $shares->app_ceo = request('app_ceo');
     $shares->app_gaurdian = request('app_gaurdian');
     $shares->nom_name = request('nom_name');
     $shares->nom_rln = request('nom_rln');
     $shares->nom_district = request('nom_district');
     $shares->app_kitta = request('app_kitta');
     $shares->app_total = $shares->app_kitta *100 ;
    $shares->user_id = auth()->user()->id;
        $shares->save();
        return redirect()->back()->with('message', 'Share applied successfully !');
    }
}
