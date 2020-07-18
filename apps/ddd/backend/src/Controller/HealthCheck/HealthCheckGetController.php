<?php


declare(strict_types=1);


namespace MN\Apps\Ddd\Backend\Controller\HealthCheck;


use MN\Shared\Infrastructure\RandomNumberGenerator;
use Symfony\Component\HttpFoundation\JsonResponse;

final class HealthCheckGetController
{
    private $generator;

    public function __construct(RandomNumberGenerator $generator)
    {
        $this->generator = $generator;
    }

    public function __invoke()
    {
        return new JsonResponse([
            'ddd_backend' => 'ok',
            'number' =>  $this->generator->generate()
        ]);
    }
}