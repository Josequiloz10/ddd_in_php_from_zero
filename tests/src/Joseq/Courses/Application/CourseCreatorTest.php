<?php
/**
 * Created by PhpStorm.
 * User: trabajo
 * Date: 01/08/20
 * Time: 10:39 AM
 */

namespace MN\Tests\Joseq\Courses\Application;


use MN\JoseQ\Courses\Application\CourseCreator;
use MN\JoseQ\Courses\Application\CreateCourseRequest;
use MN\JoseQ\Courses\Domain\Course;
use MN\JoseQ\Courses\Domain\CourseRepository;
use PHPUnit\Framework\TestCase;

class CourseCreatorTest extends TestCase
{
    /**
    @test
    */
    public function it_should_create_a_valid_course(): void
    {
        $repository = $this->createMock(CourseRepository::class);
        $creator = new  CourseCreator($repository);

        $id = 'some_id';
        $name= 'some_name';
        $duration= 'some_duration';

        $course = new Course($id, $name, $duration);

        $repository->method('save')->with($course);

        $creator->__invoke(new CreateCourseRequest($id, $name, $duration));
    }
}