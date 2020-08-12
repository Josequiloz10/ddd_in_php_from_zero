<?php

declare(strict_types=1);


namespace MN\Tests\Gibmyx\Courses\Infrastructure;


use MN\Tests\Gibmyx\Courses\Domain\CourseMother;
use PHPUnit\Framework\TestCase;
use MN\Gibmyx\Courses\Domain\Course;
use MN\Gibmyx\Courses\Domain\CourseDuration;
use MN\Gibmyx\Courses\Domain\CourseId;
use MN\Gibmyx\Courses\Domain\CourseName;
use MN\Gibmyx\Courses\Infrastructure\FileCourseRepository;
use MN\Shared\Domain\ValueObject\Uuid;

final class FileCourseRepositoryTest extends TestCase
{
    /**
     * @test
     */
    public function it_should_save_a_course(): void
    {
        $repository = new FileCourseRepository();
        $course = CourseMother::random();
        $repository->save($course);
    }

    /**
     * @test
     */
    public function it_should_return_a_existing_course(): void
    {
        $course_id = CourseId::random();
        $repository = new FileCourseRepository();
        $course = CourseMother::random();
        $repository->save($course);
        $this->assertEquals($course, $repository->search( $course->id() ));
    }

    /**
     * @test
     */
    public function it_should_not_return_a_existing_course(): void
    {
        $course = CourseMother::random();
        $repository = new FileCourseRepository();
        $this->assertNull($repository->search( $course->id() ));
    }

}