<?php

namespace Bfd\FormComonentLivewire;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bfd\FormComonentLivewire\FormComonentLivewire
 */
class FormComonentLivewireFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'FormComonentsLivewire';
    }
}
