<?php

namespace App\EventListener;

use Doctrine\DBAL\Exception\ConnectionException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Twig\Environment;

class DatabaseExceptionListener
{
    private Environment $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function onKernelException(ExceptionEvent $event)
    {
        $exception = $event->getThrowable();

        // Kiểm tra nếu lỗi là do kết nối cơ sở dữ liệu
        if ($exception instanceof ConnectionException) {
            $response = new Response(
                $this->twig->render('bundles/TwigBundle/error_database.html.twig'),
                Response::HTTP_INTERNAL_SERVER_ERROR
            );

            $event->setResponse($response);
        }
    }
}
