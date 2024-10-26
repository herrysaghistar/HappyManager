<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class HappyManager extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:HappyManager {dirname}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a HappyManager structure';

    /**
     * Filesystem instance.
     *
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $files;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Filesystem $files)
    {
        parent::__construct();
        $this->files = $files;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $dirname = $this->argument('dirname');

        $this->createDirectoryStructure($dirname);
        $this->createFiles($dirname);

        $this->info('HappyManager structure created successfully.');
    }

    /**
     * Create the directory structure.
     *
     * @param string $dirname
     * @return void
     */
    protected function createDirectoryStructure($dirname)
    {
        $directories = [
            "app/{$dirname}/DataControl/C/ModulName",
            "app/{$dirname}/DataControl/R/ModulName",
            "app/{$dirname}/DataControl/U/ModulName",
            "app/{$dirname}/DataControl/D/ModulName",
            "app/{$dirname}/Util",
        ];

        foreach ($directories as $directory) {
            // set dir permission as you needed
            $this->files->makeDirectory($directory, 0755, true, true);
        }
    }

    /**
     * Create initial files.
     *
     * @param string $dirname
     * @return void
     */
    protected function createFiles($dirname)
    {
        $files = [
            "app/{$dirname}/DataControl/C/ModulName/CTemplate.php" => $this->getCTemplate($dirname),
            "app/{$dirname}/DataControl/R/ModulName/RTemplate.php" => $this->getRTemplate($dirname),
            "app/{$dirname}/DataControl/U/ModulName/UTemplate.php" => $this->getUTemplate($dirname),
            "app/{$dirname}/DataControl/D/ModulName/DTemplate.php" => $this->getDTemplate($dirname),
            "app/{$dirname}/Util/Util.php" => $this->getUtilTemplate($dirname),
        ];

        foreach ($files as $file => $content) {
            $this->files->put($file, $content);
        }
    }

    /**
     * Get the service class template.
     *
     * @param string $dirname
     * @return string
     */
    protected function getCTemplate($dirname)
    {
        return <<<EOT
        <?php

        namespace App\\DC\\$dirname;

        class TemplateOnly
        {
            public function exampleMethod()
            {
                // Your service logic here
            }
        }
        EOT;
    }

    /**
     * Get the repository class template.
     *
     * @param string $dirname
     * @return string
     */
    protected function getRTemplate($dirname)
    {
        return <<<EOT
        <?php

        namespace App\\DC\\$dirname;

        class TemplateOnly
        {
            public function exampleMethod()
            {
                // Your service logic here
            }
        }
        EOT;
    }

    /**
     * Get the repository class template.
     *
     * @param string $dirname
     * @return string
     */
    protected function getUTemplate($dirname)
    {
        return <<<EOT
        <?php

        namespace App\\DC\\$dirname;

        class TemplateOnly
        {
            public function exampleMethod()
            {
                // Your service logic here
            }
        }
        EOT;
    }

    /**
     * Get the repository class template.
     *
     * @param string $dirname
     * @return string
     */
    protected function getDTemplate($dirname)
    {
        return <<<EOT
        <?php

        namespace App\\DC\\$dirname;

        class TemplateOnly
        {
            public function exampleMethod()
            {
                // Your service logic here
            }
        }
        EOT;
    }

    /**
     * Get the repository class template.
     *
     * @param string $dirname
     * @return string
     */
    protected function getUtilTemplate($dirname)
    {
        return <<<EOT
        <?php

        namespace App\\Util;

        class Util
        {
            public function exampleMethod()
            {
                // Your service logic here
            }
        }
        EOT;
    }

    /**
     * Get the repository class template.
     *
     * @param string $dirname
     * @return string
     */
}
