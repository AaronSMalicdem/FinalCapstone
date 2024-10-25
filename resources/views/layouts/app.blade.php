<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
    body {
        margin: 0;
        font-family: 'Arial', sans-serif;
        background-color: #f0f0f0;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Thinner Navbar */
    .navbar {
        position: absolute;
        top: 20px;
        left: 50%;
        transform: translateX(-50%);
        width: 80%;
        max-width: 800px;
        padding:5px; /* Reduced padding for a thinner navbar */
        background: rgba(255, 255, 255, 0.1);
        border-radius: 100px; /* Adjusted for a slimmer look */
        backdrop-filter: blur(10px);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        z-index: 1000; /* Ensure navbar is above other elements */
    }

    .navbar .container-fluid {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    /* Welcome User Section */
    .welcome-user {
        display: flex;
        align-items: center;
        color: white;
        font-size: 0.9rem; /* Slightly smaller font size */
    }

    .welcome-user img {
        width: 30px; /* Slightly smaller image */
        height: 30px;
        border-radius: 50%;
        margin-right: 8px;
        object-fit: cover;
    }

    /* Right Side Icons */
    .navbar a {
        color: white;
        margin-left: 10px;
        font-size: 1.1rem; /* Adjusted for a slimmer look */
        transition: color 0.3s ease;
    }

    .navbar a:hover {
        color: #00b4d8;
    }

    /* Glassmorphic styling for navbar */
    .navbar {
        background: rgba(255, 255, 255, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.18);
    }

    /* Styling for the dropdown button container */
    .dropdown-oval-container {
        padding: 5px 15px; /* Increased vertical padding for taller container */
        background: rgba(255, 255, 255, 0.2);
        border-radius: 40px; /* Oval shape with slimmer appearance */
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        width: 300px;
        position: relative; /* Position relative for absolute dropdown */
        z-index: 1001; /* Ensure this is above other content */
    }

    /* Dropdown Button with Transparent Background */
    .dropdown-toggle {
        background: transparent;
        border: none;
        color: white;
        font-size: 0.9rem; /* Adjusted for thinner style */
        padding: 0;
        font-weight: bold;
    }

    /* Dropdown Item Styling */
   /* Dropdown Item Styling */
.dropdown-menu {
    position: absolute; /* Position absolute to avoid affecting navbar */
    top: 100%; /* Place it below the button */
    left: 0;
    right: 0; /* Make it full width */
    z-index: 1002; /* Ensure dropdown appears above other elements */
    margin: 0; /* Remove default margin */
    padding: 0; /* Remove default padding */
    background: rgba(255, 255, 255, 0.2); /* Semi-transparent background for glassmorphism */
    border-radius: 10px; /* Rounded corners for dropdown */
    backdrop-filter: blur(100px); /* Apply blur effect */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Shadow for dropdown */
    border: 1px solid rgba(255, 255, 255, 0.3); /* Optional: border for definition */
}

/* Dropdown Item Styling */
.dropdown-menu .dropdown-item {
    color: #333;
    padding: 10px 15px; /* Increased padding for dropdown items */
    font-size: 0.9rem; /* Slightly smaller font size */
}

/* Hover Effect for Dropdown Items */
.dropdown-menu .dropdown-item:hover {
    background-color: rgba(0, 180, 216, 0.1); /* Change hover effect for visibility */
}

</style>


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <!-- Custom Navbar -->
        @yield('navbar')

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
