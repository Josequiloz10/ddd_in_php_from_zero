<?php


declare(strict_types=1);


namespace MN\Apps\JoseQ\Backend\Controller\Courses;

use MN\Joseq\Courses\Application\CourseCreator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class CoursesPutController
{

    private $creator;

    public function __construct(CourseCreator $creator)
    {

        $this->creator = $creator;
    }

    public function __invoke(string $id, Request $request): Response
    {
        $name = $request->get('name');
        $duration = $request->get('duration');

        $this->creator->__invoke($id, $name, $duration);

        return new Response('', Response::HTTP_CREATED);
    }
}