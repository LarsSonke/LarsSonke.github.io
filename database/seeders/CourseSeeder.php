<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\StudyProgress;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        // Clear existing data
        Course::query()->delete();
        StudyProgress::query()->delete();

        // Propedeuse courses
        $propedeuseData = [
            ['CU75001V3', 'PCO', '2021-10-15', 9.6, 2.5],
            ['CU75002V2', 'CBA', '2021-11-08', 7.5, 5.0],
            ['CU75003V1', 'PBA', '2021-11-18', 10.0, 5.0],
            ['CU75004V1', 'OOP', '2023-01-26', 6.0, 10.0],
            ['CU75008V1', 'FDE 1', '2023-03-16', 6.5, 5.0],
            ['CU75009V3', 'FPR1', '2022-11-24', 6.6, 7.5],
            ['CU75011V3', 'FPR 2', '2023-07-06', 6.3, 10.0],
            ['CU75054V1', 'PPW1', '2023-05-29', null, 1.25],
            ['CU75056V1', 'ITP1', '2023-07-09', null, 1.25],
            ['CU75068V1', 'PPD-E', '2022-05-17', 7.0, 12.5],
        ];

        foreach ($propedeuseData as $data) {
            Course::create([
                'course_code' => $data[0],
                'name' => $data[1],
                'phase' => 'Propedeuse',
                'date' => $data[2] ? \Carbon\Carbon::parse($data[2]) : null,
                'grade' => $data[3],
                'ec' => $data[4],
                'status' => $data[4] > 0 ? 'completed' : 'not_started',
            ]);
        }

        // Bachelor courses
        $bachelorData = [
            ['CU75016V1', 'CIN', '2023-02-09', 6.1, 5.0],
            ['CU75020V2', 'SDE', '2024-03-08', 8.1, 5.0],
            ['CU75028V2', 'CCO', '2024-07-02', 7.0, 5.0],
            ['CU75033V2', 'ISE', '2025-07-10', 6.0, 25.0],
            ['CU75042V2', 'WAS', '2026-01-08', 7.3, 5.0],
            ['CU75045V1', 'MPP', '2025-11-24', 10.0, 5.0],
            ['CU75047V3', 'CPSE', '2026-01-22', 6.5, 15.0],
            ['CU75048V3', 'GPR', '2025-11-06', null, 0],
            ['CU75059V1', 'ITP3', '2023-05-29', null, 1.25],
            ['CU75060V1', 'ITP4', '2024-07-08', null, 1.25],
            ['CU75073V1', 'DDD', null, null, 0],
            ['CU75076V1', 'UVE', '2022-11-11', 6.1, 10.0],
            ['CU75078V1', 'UVC', '2023-01-17', 6.5, 5.0],
            ['CU75089V1', 'Internship SE', '2025-12-15', null, 25.0],
            ['CU75090V1', 'Graduation Internship', null, null, 0],
            ['MI00027', 'Applied AI and Ethics', '2025-01-30', 6.0, 30.0],
        ];

        foreach ($bachelorData as $data) {
            Course::create([
                'course_code' => $data[0],
                'name' => $data[1],
                'phase' => 'Bachelor',
                'date' => $data[2] ? \Carbon\Carbon::parse($data[2]) : null,
                'grade' => $data[3],
                'ec' => $data[4],
                'status' => $data[4] > 0 ? 'completed' : 'not_started',
            ]);
        }

        // Calculate totals
        $propedeuseEc = Course::where('phase', 'Propedeuse')->where('status', 'completed')->sum('ec');
        $bachelorEc = Course::where('phase', 'Bachelor')->where('status', 'completed')->sum('ec');
        $totalEc = $propedeuseEc + $bachelorEc;

        $completedCourses = Course::where('status', 'completed')->count();
        $totalCourses = Course::count();

        $grades = Course::whereNotNull('grade')->pluck('grade')->toArray();
        $averageGrade = count($grades) > 0 ? array_sum($grades) / count($grades) : null;

        // Create study progress record
        StudyProgress::create([
            'propedeuse_ec' => $propedeuseEc,
            'bachelor_ec_earned' => $bachelorEc,
            'bachelor_ec_total' => 180,
            'total_ec' => $totalEc,
            'courses_completed' => $completedCourses,
            'courses_total' => $totalCourses,
            'average_grade' => $averageGrade,
            'last_updated_at' => now(),
        ]);
    }
}
