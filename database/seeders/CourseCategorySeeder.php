<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course_categories')->insert([
            [
                'course_category_name' => 'Designing',
                'course_category_slug' => 'designing',
                'course_category_description' => 'Designing Course Category Description Goes Here ...',
            ],
            [
                'course_category_name' => 'Programming',
                'course_category_slug' => 'programming',
                'course_category_description' => 'programming Course Category Description Goes Here ...',

            ],
            [
                'course_category_name' => 'Office Package',
                'course_category_slug' => 'office-package',
                'course_category_description' => '  Office Package Course Category Description Goes Here ...',

            ],
            [
                'course_category_name' => 'Corporate',
                'course_category_slug' => 'corporate',
                'course_category_description' => '  Corporate Course Category Description Goes Here ...',

            ],
            [
                'course_category_name' => 'IT & Software',
                'course_category_slug' => 'it-software',
                'course_category_description' => 'IT & Software',

            ],
            [
                'course_category_name' => 'Other',
                'course_category_slug' => 'other',
                'course_category_description' => 'Other Course Category Description Goes Here ...',

            ]

        ]);
    }
}
