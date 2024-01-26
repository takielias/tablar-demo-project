<?php

namespace App\Http\Controllers;

class LayoutViewController extends Controller
{
    //
    public function layout($name)
    {
        if (!in_array($name, [
            'boxed', 'combo', 'condensed', 'fluid', 'fluid-vertical', 'horizontal', 'navbar-overlap', 'navbar-sticky', 'rtl', 'vertical', 'vertical-right', 'vertical-transparent'
        ])) {
            abort(404);
        }
        config(['tablar.layout' => $name]);
        return view('home');
    }
}
