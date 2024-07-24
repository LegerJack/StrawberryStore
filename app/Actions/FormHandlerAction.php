<?php

namespace App\Actions;

use App\Contracts\FormActionContract;
use Bitrix\Main\Request;

class FormHandlerAction implements FormActionContract
{

    public function handle(Request|\Illuminate\Http\Request $request): array
    {
        $request->flash();
        $email = $request->input("email");
        $message = $request->input("message");

        return ["status" => "ERROR", "errors" => collect(['error1', 'error2'])];
    }
}
