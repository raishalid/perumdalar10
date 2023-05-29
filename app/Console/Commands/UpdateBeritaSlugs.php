<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Berita;
use Illuminate\Support\Str;

class UpdateBeritaSlugs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'berita:update-slugs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update slugs for all Berita records';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $beritas = Berita::all();

        foreach ($beritas as $berita) {
            $newSlug = Str::slug($berita->judul);
            if ($berita->slug !== $newSlug) {
                $berita->slug = $newSlug;
                $berita->save();
                $this->info("Updated slug for Berita ID {$berita->id}.");
            }
        }

        $this->info('All slugs updated successfully.');
    }
}
