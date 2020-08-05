<?php


declare(strict_types=1);


namespace MN\Tests\Gabriel\Courses\Infrastructure;


use MN\Gabriel\Courses\Domain\Course;
use MN\Gabriel\Courses\Domain\CourseDuracion;
use MN\Gabriel\Courses\Domain\CourseId;
use MN\Gabriel\Courses\Domain\CourseName;
use MN\Gabriel\Courses\Infrastructure\FileCourseRepository;
use MN\Shared\Domain\ValueObject\Uuid;
use PHPUnit\Framework\TestCase;

final class FileCourseRepositoryTest extends TestCase
{
    /**
     * @test
     */
    public function it_should_save_a_course(): void
    {
        $repository = new FileCourseRepository();
        $course = new Course(new CourseId(CourseId::random()->value()), new CourseName('name'), new CourseDuracion('duration'));

        $repository->save($course);
    }

    /**
     * @test
     */
    public function it_should_return_an_existing_course(): void
    {
        $course_id = CourseId::random();
        $repository = new FileCourseRepository();
        $course = new Course(new CourseId($course_id->value()),  new CourseName('name'), new CourseDuracion('duration'));

        $repository->save($course);

        $this->assertEquals($course, $repository->search(new CourseId($course_id->value())));
    }

    /**
     * @test
     */
    public function it_should_not_return_an_existing_course(): void
    {
        $course_id = CourseId::random();
        $repository = new FileCourseRepository();
        $this->assertNull($repository->search(new CourseId($course_id->value())));
    }
}