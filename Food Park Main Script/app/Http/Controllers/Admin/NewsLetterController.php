<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\SubscriberDataTable;
use App\Http\Controllers\Controller;
use App\Mail\NewsLetter;
use App\Models\Subscriber;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Mail;

class NewsLetterController extends Controller
{
    function index(SubscriberDataTable $dataTable) : View|JsonResponse {
        return $dataTable->render('admin.news-letter.index');
    }

    function sendNewsLetter(Request $request) {
        $request->validate([
            'subject' => ['required', 'max:255'],
            'message' => ['required']
        ]);

        $subscribers = Subscriber::pluck('email')->toArray();

        Mail::to($subscribers)->send(new NewsLetter($request->subject, $request->message));

        toastr()->success('News letter sent successfully!');

        return redirect()->back();
    }
}
