<?php


declare(strict_types=1);


namespace MN\Christian\Courses\Application;


final class CreateCourseRequest
{
    private $id;
    private $name;
    private $duration;

    public function __construct(string $id, string $name, string $duration)
    {
        $this->id = $id;
        $this->name = $name;
        $this->duration = $duration;
    }

    public function id(): string
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function duration(): string
    {
        return $this->duration;
    }
}