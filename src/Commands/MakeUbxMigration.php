<?php

namespace Ubxmigrations\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;

class MakeUbxMigration extends Command
{
    protected $signature = 'make:ubxmigration {name : The name of the migration} 
        {--table= : The table to migrate}
        {--create= : The table to create}';
    
    protected $description = 'Create a new UBX-style migration file';

    public function handle(Filesystem $files)
    {
        $table = $this->option('table') ?? $this->option('create');
        $stub = str_replace(
            ['{{ table }}'],
            [$table],
            $files->get(__DIR__.'/../../stubs/migration.stub')
        );

        $name = Str::snake(trim($this->argument('name')));
        $fileName = date('Y_m_d_His').'_$name.php';

        $files->put(
            database_path('migrations/'.$fileName),
            $stub
        );

        $this->info("Migration created: {$fileName}");
    }
}
