<?php

namespace App\Providers;

use App\Actions\FormHandlerAction;
use App\Contracts\FormActionContract;
use Illuminate\Support\ServiceProvider;

class ActionsServiceProvider extends ServiceProvider
{
    public array $bindings = [
        FormActionContract::class => FormHandlerAction::class
    ];
}
