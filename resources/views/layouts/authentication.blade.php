<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'CodeCoach ITS')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .navbar-brand {
            font-weight: bold;
            color: #0056D2 !important;
        }
        .course-card {
            transition: transform 0.3s;
        }
        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .btn-primary {
            background-color: #0056D2;
            border-color: #0056D2;
        }
        .btn-primary:hover {
            background-color: #0044A9;
            border-color: #0044A9;
        }
        .sidebar {
            background-color: #f8f9fa;
            min-height: calc(100vh - 56px);
        }
    </style>
</head>
<body>
   
    <!-- Main Content -->
    <main class="py-4">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-light border-top py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>CodeCoach ITS</h5>
                    <p>Intelligent Tutoring System for Python Programming</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p>&copy; 2026 CodeCoach ITS. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>