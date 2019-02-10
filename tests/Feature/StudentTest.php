<?php

namespace Tests\Feature;

use App\Student;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;


class StudentTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */





    public function testGettingAllStudents()
    {
        $response = $this->json('GET', '/api/v1/student');
        $response->assertStatus(200);

        $response->assertJsonStructure(
            [
                [
                    'id',
                    'student_firstname',
                    'student_lastname',
                    'gender',
                    'joined_year'

                ]
            ]
        );
    }



    public function testUpdateStudent()
    {
        $response = $this->json('GET', '/api/v1/student');
        $response->assertStatus(200);

        $student = $response->getData()[0];

        $user = factory(\App\User::class)->create();
        $update = $this->actingAs($user, 'api')->json('PATCH', 'api/v1/student/'.$student->id,['name' => "John"]);
        $update->assertStatus(200);

    }


    public function testCreateStudent()
    {
        $data = [
            'student_firstname' => "John",
            'student_lastname' => "Doe",
            'gender' => "M",
            'joined_year' => 2019,
            'classroom_id' => 1
        ];

        $user = factory(User::class)->create();
        $create = $this->actingAs($user, 'api')->json('POST', 'api/v1/student/', $data);

        $create->assertStatus(201);
//        $create->assertJson(['status' => true]);
//        $create->assertJson(['message' => "Student Added!"]);
//        $create->assertJson(['data' => $data]);
    }

}
