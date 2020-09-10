<?php

declare(strict_types=1);

namespace App\Controller\Web;

use App\Controller\AbstractController;
use Hyperf\Contract\TranslatorInterface;
use Hyperf\Di\Annotation\Inject;

/**
 * Class IndexController
 * @package App\Controller\Web
 */
class IndexController extends AbstractController
{
    /**
     * @Inject
     * @var TranslatorInterface
     */
    private $translator;

    /**
     * @param string|null $path
     * @return mixed
     */
    public function index(string $path = null)
    {
        $acceptLanguage = $this->request->header('Accept-Language', 'en');
        if ($acceptLanguage) {
            $locale = explode(',', $acceptLanguage)[0];
            $this->translator->setLocale(str_replace('-', '_', $locale));
        }

        return $this->render('welcome', [
            'message' => trans('messages.welcome'),
            'path' => $path
        ]);
    }

    public function json()
    {
        $user = $this->request->input('user', 'DaoPHP');
        $method = $this->request->getMethod();

        return [
            'method' => $method,
            'message' => "Hello {$user}.",
        ];
    }
}
