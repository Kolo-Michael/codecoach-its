<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Lesson;

class CourseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Python Fundamentals course
        $pythonCourse = Course::create([
            'title' => 'Python Fundamentals',
            'description' => 'Learn the basics of Python programming including variables, data types, and control structures.',
            'difficulty' => 'Beginner',
            'duration_weeks' => 4,
            'image_url' => 'https://placehold.co/400x200/0056D2/FFFFFF?text=Python+Basics'
        ]);

        // Add lessons for Python Fundamentals
        $pythonLessons = [
            [
                'course_id' => $pythonCourse->id,
                'title' => 'Introduction to Python',
                'description' => 'Get started with Python programming',
                'order' => 1,
                'duration_minutes' => 45
            ],
            [
                'course_id' => $pythonCourse->id,
                'title' => 'Variables and Data Types',
                'description' => 'Understanding variables and data types in Python',
                'order' => 2,
                'duration_minutes' => 60
            ],
            [
                'course_id' => $pythonCourse->id,
                'title' => 'Control Structures',
                'description' => 'Learn about conditionals and loops',
                'order' => 3,
                'duration_minutes' => 75
            ],
            [
                'course_id' => $pythonCourse->id,
                'title' => 'Functions and Modules',
                'description' => 'Creating reusable code with functions and modules',
                'order' => 4,
                'duration_minutes' => 90
            ]
        ];

        foreach ($pythonLessons as $lessonData) {
            Lesson::create($lessonData);
        }

        // Create Data Structures course
        $dsCourse = Course::create([
            'title' => 'Data Structures',
            'description' => 'Master essential data structures like lists, dictionaries, stacks, and queues in Python.',
            'difficulty' => 'Intermediate',
            'duration_weeks' => 6,
            'image_url' => 'https://placehold.co/400x200/0056D2/FFFFFF?text=Data+Structures'
        ]);

        // Add lessons for Data Structures
        $dsLessons = [
            [
                'course_id' => $dsCourse->id,
                'title' => 'Lists and Arrays',
                'description' => 'Understanding list operations and array manipulation',
                'order' => 1,
                'duration_minutes' => 60
            ],
            [
                'course_id' => $dsCourse->id,
                'title' => 'Dictionaries and Sets',
                'description' => 'Working with key-value pairs and unique collections',
                'order' => 2,
                'duration_minutes' => 60
            ],
            [
                'course_id' => $dsCourse->id,
                'title' => 'Stacks and Queues',
                'description' => 'Implementing stack and queue data structures',
                'order' => 3,
                'duration_minutes' => 75
            ],
            [
                'course_id' => $dsCourse->id,
                'title' => 'Trees and Graphs',
                'description' => 'Introduction to tree and graph structures',
                'order' => 4,
                'duration_minutes' => 90
            ]
        ];

        foreach ($dsLessons as $lessonData) {
            Lesson::create($lessonData);
        }

        // Create Algorithms course
        $algoCourse = Course::create([
            'title' => 'Algorithms',
            'description' => 'Learn to design and analyze algorithms for problem-solving in Python.',
            'difficulty' => 'Advanced',
            'duration_weeks' => 8,
            'image_url' => 'https://placehold.co/400x200/0056D2/FFFFFF?text=Algorithms'
        ]);

        // Add lessons for Algorithms
        $algoLessons = [
            [
                'course_id' => $algoCourse->id,
                'title' => 'Algorithm Complexity',
                'description' => 'Understanding time and space complexity',
                'order' => 1,
                'duration_minutes' => 60
            ],
            [
                'course_id' => $algoCourse->id,
                'title' => 'Sorting Algorithms',
                'description' => 'Implementing various sorting techniques',
                'order' => 2,
                'duration_minutes' => 75
            ],
            [
                'course_id' => $algoCourse->id,
                'title' => 'Searching Algorithms',
                'description' => 'Linear and binary search implementations',
                'order' => 3,
                'duration_minutes' => 60
            ],
            [
                'course_id' => $algoCourse->id,
                'title' => 'Dynamic Programming',
                'description' => 'Solving complex problems with dynamic programming',
                'order' => 4,
                'duration_minutes' => 90
            ]
        ];

        foreach ($algoLessons as $lessonData) {
            Lesson::create($lessonData);
        }

        // Create Object-Oriented Programming course
        $oopCourse = Course::create([
            'title' => 'Object-Oriented Programming',
            'description' => 'Master OOP concepts in Python including classes, inheritance, and polymorphism.',
            'difficulty' => 'Intermediate',
            'duration_weeks' => 6,
            'image_url' => 'https://placehold.co/400x200/0056D2/FFFFFF?text=OOP'
        ]);

        // Add lessons for OOP
        $oopLessons = [
            [
                'course_id' => $oopCourse->id,
                'title' => 'Classes and Objects',
                'description' => 'Understanding the basics of classes and objects',
                'order' => 1,
                'duration_minutes' => 60
            ],
            [
                'course_id' => $oopCourse->id,
                'title' => 'Inheritance and Polymorphism',
                'description' => 'Extending classes and method overriding',
                'order' => 2,
                'duration_minutes' => 75
            ],
            [
                'course_id' => $oopCourse->id,
                'title' => 'Encapsulation and Abstraction',
                'description' => 'Protecting data and hiding implementation details',
                'order' => 3,
                'duration_minutes' => 60
            ],
            [
                'course_id' => $oopCourse->id,
                'title' => 'Design Patterns',
                'description' => 'Common patterns for solving design problems',
                'order' => 4,
                'duration_minutes' => 90
            ]
        ];

        foreach ($oopLessons as $lessonData) {
            Lesson::create($lessonData);
        }

        // Create Web Development with Flask course
        $webCourse = Course::create([
            'title' => 'Web Development with Flask',
            'description' => 'Build web applications using the Flask framework and deploy them to the cloud.',
            'difficulty' => 'Advanced',
            'duration_weeks' => 10,
            'image_url' => 'https://placehold.co/400x200/0056D2/FFFFFF?text=Web+Development'
        ]);

        // Add lessons for Web Development
        $webLessons = [
            [
                'course_id' => $webCourse->id,
                'title' => 'Flask Basics',
                'description' => 'Setting up Flask and creating your first web app',
                'order' => 1,
                'duration_minutes' => 60
            ],
            [
                'course_id' => $webCourse->id,
                'title' => 'Routing and Templates',
                'description' => 'Handling URLs and creating dynamic templates',
                'order' => 2,
                'duration_minutes' => 75
            ],
            [
                'course_id' => $webCourse->id,
                'title' => 'Database Integration',
                'description' => 'Connecting Flask applications to databases',
                'order' => 3,
                'duration_minutes' => 90
            ],
            [
                'course_id' => $webCourse->id,
                'title' => 'Deployment',
                'description' => 'Deploying your Flask app to production',
                'order' => 4,
                'duration_minutes' => 75
            ]
        ];

        foreach ($webLessons as $lessonData) {
            Lesson::create($lessonData);
        }

        // Create Data Science with Python course
        $dsPythonCourse = Course::create([
            'title' => 'Data Science with Python',
            'description' => 'Analyze data and create visualizations using pandas, numpy, and matplotlib.',
            'difficulty' => 'Intermediate',
            'duration_weeks' => 8,
            'image_url' => 'https://placehold.co/400x200/0056D2/FFFFFF?text=Data+Science'
        ]);

        // Add lessons for Data Science
        $dsPythonLessons = [
            [
                'course_id' => $dsPythonCourse->id,
                'title' => 'Data Analysis with Pandas',
                'description' => 'Manipulating and analyzing data with pandas',
                'order' => 1,
                'duration_minutes' => 75
            ],
            [
                'course_id' => $dsPythonCourse->id,
                'title' => 'Numerical Computing with NumPy',
                'description' => 'Performing numerical computations with NumPy',
                'order' => 2,
                'duration_minutes' => 60
            ],
            [
                'course_id' => $dsPythonCourse->id,
                'title' => 'Data Visualization',
                'description' => 'Creating charts and graphs with matplotlib and seaborn',
                'order' => 3,
                'duration_minutes' => 90
            ],
            [
                'course_id' => $dsPythonCourse->id,
                'title' => 'Machine Learning Basics',
                'description' => 'Introduction to machine learning with scikit-learn',
                'order' => 4,
                'duration_minutes' => 90
            ]
        ];

        foreach ($dsPythonLessons as $lessonData) {
            Lesson::create($lessonData);
        }
    }
}