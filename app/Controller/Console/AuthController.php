<?php

declare(strict_types=1);

namespace App\Controller\Console;

use App\Controller\AbstractController;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\GetMapping;
use Hyperf\HttpServer\Annotation\PostMapping;

/**
 * @Controller
 * Class AuthController
 * @package App\Controller\Console
 */
class AuthController extends AbstractController
{
    /**
     * @PostMapping("/console/login")
     * @return array
     */
    public function login()
    {
        return [
            'method' => 'handle',
            'message' => 'Login',
        ];
    }
}
