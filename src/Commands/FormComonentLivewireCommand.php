<?php

namespace Bfd\FormComonentLivewire\Commands;

use Illuminate\Console\Command;

class FormComonentLivewireCommand extends Command
{
    public $signature = 'FormComonentsLivewire';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
