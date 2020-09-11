<?php

declare(strict_types=1);

namespace App\Command;

use Hyperf\Command\Annotation\Command;
use Hyperf\Command\Command as BaseCommand;
use Hyperf\Utils\Str;
use Psr\Container\ContainerInterface;

/**
 * @Command
 * Class GenerateRoute
 * @package App\Command
 */
class GenerateRoute extends BaseCommand
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;

        parent::__construct('gen:route');
    }

    public function configure()
    {
        parent::configure();
        $this->setDescription('Generate all routes');
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        foreach (['Api', 'Console', 'Web'] as $m) {
            $controllers = glob(app_path('Controller/' . $m . '/*.php'));

            $routes = "// {$m} start\n";
            foreach ($controllers as $controller) {
                $str = mb_substr($controller, stripos($controller, 'app'), -4);
                $class = str_replace('/', '\\', ucfirst($str));

                $reflector = new ReflectionClass($class);
                $methods = $reflector->getMethods(ReflectionMethod::IS_PUBLIC);
                foreach ($methods as $method) {
                    if ($method->class === $class) {
                        $controller = basename($method->class);
                        $action = $method->name;
                        $ctl = mb_substr($controller, 0, -10);
                        $act = $action === 'index' ? '' : '/' . $action;
                        $name = str_replace('/', '.', Str::snake($ctl . $act));
                        if ($ctl !== 'Index') {
                            $routes .= "    Route::any('" . Str::snake($ctl . $act) . "', '" . $controller . '@' . $action . "')->name('{$name}');\n";
                        } elseif ($action !== 'index') {
                            $routes .= "    Route::any('" . Str::snake($ctl . $act) . "', '" . $controller . '@' . $action . "')->name('{$name}');\n";
                        }
                    }
                }
            }
            $routes .= "    // {$m} end";

            $content = file_get_contents(base_path('routes/web.php'));
            $content = preg_replace('/\/\/ ' . $m . ' start\n[\s\S]*\/\/ ' . $m . ' end/', $routes, $content);
            file_put_contents(base_path('routes/web.php'), $content);
        }
    }
}
