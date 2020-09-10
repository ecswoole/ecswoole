<?php

declare(strict_types=1);

namespace App\Controller\Web;

use App\Controller\AbstractController;
use Hyperf\HttpServer\Annotation\AutoController;
use Psr\Http\Message\ResponseInterface as PsrResponseInterface;

/**
 * @AutoController(prefix="api")
 * Class HomeController
 * @package App\Controller\Web
 */
class ApiController extends AbstractController
{
    /**
     * @return PsrResponseInterface
     */
    public function home()
    {
        return $this->succeed(['error' => 0, 'message' => 'ok']);
    }
}
