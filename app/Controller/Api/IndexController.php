<?php

declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AbstractController;
use Hyperf\Contract\TranslatorInterface;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\GetMapping;

/**
 * @Controller
 * Class IndexController
 * @package App\Controller\Api
 */
class IndexController extends AbstractController
{
    /**
     * @GetMapping("/api")
     * @return mixed
     */
    public function index()
    {
        return 'api server';
    }
}
