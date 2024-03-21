<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Note;
use App\Jobs\SendEmail;
use App\Jobs\ProcessCsvFile;
use Illuminate\Console\Command;

class SendScheduledNotes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-scheduled-notes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // return some words
        // return $this->info('demo text command');
        $now = Carbon::now();

        $notes = Note::where('is_published' , true)
        ->where('send_date' , $now->toDateString())->get();
        
        $noteCount = $notes->count();
        if ($noteCount){
            $this->info("Sending {$noteCount} scheduled notes...");
            
        }        
        foreach ($notes as $note) {

            // SendEmail::dispatch($note);
            // SendEmailRoute::dispatch($note)->onQueue('emails');
    }
    }
}
