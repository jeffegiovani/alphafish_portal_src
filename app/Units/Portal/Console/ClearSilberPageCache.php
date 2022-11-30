<?php

namespace PortalApp\Console;

use Silber\PageCache\Console\ClearCache;
use Silber\PageCache\Cache;

class ClearSilberPageCache extends ClearCache
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jeffe-page-cache:clear {slug? : URL slug of page/directory to delete} {--recursive}';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $cache = $this->laravel->make(Cache::class);
        $recursive = $this->option('recursive');
        $slug = $this->argument('slug');

        $paths = [
            'page-cache',
            'page-cache-mobile',
        ];

        foreach ($paths as $path) {
            $cache->setCachePath(public_path($path));

            if (!$slug) {
                $this->clear($cache);
            } else if ($recursive) {
                $this->clear($cache, $slug);
            } else {
                $this->forget($cache, $slug);
            }
        }
    }
}
