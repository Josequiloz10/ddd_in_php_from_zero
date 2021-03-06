<?php

declare(strict_types=1);


namespace MN\Christian\CoursesCounter\Infrastructure\Persistence\Doctrine;


use MN\Christian\CoursesCounter\Domain\CoursesCounterId;
use MN\Shared\Infrastructure\Persistence\Doctrine\UuidType;

final class CourseCounterIdType extends UuidType
{
    protected function typeClassName(): string
    {
        return CoursesCounterId::class;
    }
}