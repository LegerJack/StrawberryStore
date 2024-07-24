<?php

namespace App\Contracts;

use Illuminate\Http\Request;

interface FormActionContract
{
    public function handle(Request $request): array;
}
