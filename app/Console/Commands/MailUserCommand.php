<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MailUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'emails:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Email to inactive users';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        info('my command run');
        $this->comment('my command run');
    }
}
