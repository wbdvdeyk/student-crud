<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student CRUD</title>
    <!-- Simple CSS para gumanda ang interface -->
    <style>
        body { font-family: sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .btn { padding: 5px 10px; text-decoration: none; color: white; border-radius: 4px; margin-right: 5px; }
        .btn-green { background-color: #4CAF50; }
        .btn-blue { background-color: #008CBA; }
        .btn-red { background-color: #f44336; }
        .alert { padding: 10px; background-color: #4CAF50; color: white; margin-bottom: 15px; }
    </style>
</head>
<body>
    <h1>Student Management System</h1>
    
    <!-- Dito lalagay ang mga notification (success message) -->
    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    <!-- Dito ilalagay ang laman ng ibang views -->
    @yield('content')
</body>
</html>