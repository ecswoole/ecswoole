<?php

declare(strict_types=1);

namespace App\Controller;

use Hyperf\Contract\SessionInterface;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use Hyperf\View\RenderInterface;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface as PsrResponseInterface;

/**
 * Class AbstractController
 * @package App\Controller
 */
abstract class AbstractController
{
    /**
     * @Inject
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @Inject
     * @var RequestInterface
     */
    protected $request;

    /**
     * @Inject
     * @var ResponseInterface
     */
    protected $response;

    /**
     * @Inject
     * @var SessionInterface
     */
    protected $session;

    /**
     * @Inject
     * @var RenderInterface
     */
    protected $view;

    /**
     * @var int
     */
    protected $errorCode = 0;

    /**
     * @return int
     */
    protected function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @param $errorCode
     * @return $this
     */
    protected function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * 返回封装后的API数据到客户端
     * @access protected
     * @param mixed $data 要返回的数据
     * @param array $headers 发送的Header信息
     * @return PsrResponseInterface
     */
    protected function succeed($data, array $headers = [])
    {
        $response = $this->response([
            'status' => 'success',
            'data' => $data,
        ]);

        foreach ($headers as $header) {
            $response = $response->withHeader(key($header), current($header));
        }

        return $response;
    }

    /**
     * 返回异常数据到客户端
     * @param $message
     * @return PsrResponseInterface
     */
    protected function failed($message)
    {
        return $this->response([
            'status' => 'failed',
            'errors' => [
                'code' => $this->getErrorCode(),
                'message' => $message,
            ],
        ]);
    }

    /**
     * 返回 Json 数据格式
     * @param $data
     * @param string $name
     * @return PsrResponseInterface
     */
    protected function response($data, $name = 'X-Client-Id')
    {
        $clientId = $this->request->getHeader($name);

        if (empty($clientId)) {
            $clientId = $this->session->getId();
        }

        return $this->response->json($data)->withHeader($name, $clientId);
    }

    /**
     * The view to render
     * @param $template
     * @param array $data
     * @return mixed
     */
    protected function render($template, array $data = [])
    {
        $data = array_merge($data, [
            'csrf_field' => csrf_field(),
            'csrf_token' => csrf_token(),
        ]);

        return $this->view->render($template, $data);
    }
}
