<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class rename extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dbtable:rename {table1 : Database table name you want to rename} {table2 : New database table name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to rename a database table';

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
        $table1 = $this->argument('table1');
        $table2 = $this->argument('table2');

        DB::statement("ALTER TABLE $table1 RENAME TO $table2");

        $this->info("Database table ".$table1." has been renamed to ".$table2." successfully");
    }
}
