<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;

class Strip extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'strip:post {column}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Strips the html tags from mysql. pass column name as argument.';

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
     * @return int
     */
    public function handle()
    {
        $column = $this->argument('column');
        $posts = Post::all();
        foreach ($posts as $post) {
            $temp =strip_tags($post->$column);
            $post->$column = str_replace(array("&lsquo;","&rsquo;","&nbsp;" ),' ',$temp);
            if ($post->save()) {
                echo ('success');
            }
            else{
                echo ('failed');
            }
        }
    }
}
