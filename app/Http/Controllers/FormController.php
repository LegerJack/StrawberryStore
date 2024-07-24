<?php

namespace App\Http\Controllers;

use App\Contracts\FormActionContract;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function contact(Request $request, FormActionContract $action): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages.contact', $action->handle($request));
    }
}
