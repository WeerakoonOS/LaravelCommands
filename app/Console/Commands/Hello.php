<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

class Hello extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

    protected $signature = 'Hello:greet';
    // protected $signature = 'Hello {fname=Salitha} {--L|lname=Chathuranga}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is Hello description';

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
        // $fname = $this->argument('fname');
        // $lname = $this->option('lname');
        // $this->info($fname .' '. $lname);

        // $fname = $this->ask('What is your first name? ');
        // $this->info($fname);

        // $pwd = $this->secret('What is your password? ');
        // $this->info($pwd);

        // $confirm = $this->confirm('Do you want to print your name? ');

        // if ($confirm) {
        //     $this->info("Task Done!");
        //     $this->info("\n"."Printed name : ".$fname);
        // }

        // $header = ['name','email'];
        // $users = User::select('name', 'email')->get();
        // $this->table($header, $users);

        // $this->choice('What is your name?', ['Taylor', 'Dayle']);


        // $users = User::all();
        // $bar = $this->output->createProgressBar(count($users)); 
        // $this->info("Beginning of printing..."); 
        // foreach ($users as $user) { 
        //     $this->info("\n".$user->name); 
        //     $bar->advance();
        // }            
        //     $bar->finish(); 
        //     $this->info("\n\nEnd to printing..."); 
        // }

        $this->info("Hello guys!");
    }
}
