<?php

Route::get('/', function () {
    return view('home');
});

Route::get('success', function () {
    return view('success');
});

Route::post('rsvp', function (Illuminate\Http\Request $request) {
    $answers = collect($request->all())->reject(function($input, $key) {
        return in_array($key, ['_method', '_token']);
    });

    \Mail::send('emails.rsvp', ['request' => $answers->all()], function ($m) use ($answers) {
        $m->from('postmaster@mg.julieandgregwedding.com', 'JulieAndGregWedding.com');
        $m->to('julieanne.dolan@gmail.com', 'Julie Dolan');
        $m->cc('gregorymitchell7@gmail.com', 'Greg Mitchell');
        $m->subject($answers->get('name') . ' has RSVPed!');
    });

    return redirect('success');
});
