<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMlNmr25+CL2bB+3E5gZtD2hVhuHc1Ih5O1u9X" crossorigin="anonymous">
    <style>
        /* Glass Sidebar Styles */
        .glass-sidebar {
            position: fixed;
            top: 50%;
            left: 100px;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border-radius: 40px;
            padding: 15px;
            width: 60px;
            transition: width 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }

        .glass-sidebar.collapsed {
            width: 60px;
        }

        .glass-sidebar.expanded {
            width: 200px;
        }

        .glass-sidebar .nav-link {
            display: flex;
            align-items: center;
            justify-content: center; /* Center icons horizontally */
            padding: 17px 0; /* Adjust padding for better centering */
            color: white;
            text-decoration: none;
            white-space: nowrap;
            position: relative;
            right:4px;
        }

        .glass-sidebar.collapsed .nav-link {
            justify-content: center; /* Center icons when sidebar is collapsed */
        }

        .glass-sidebar.expanded .nav-link {
            justify-content: flex-start; /* Align to the left when expanded */
            padding: 10px 0; /* Adjust padding */
        }

        .glass-sidebar .nav-link span {
            display: none;
        }

        .glass-sidebar.expanded .nav-link span {
            display: inline-block;
            margin-left: 10px;
        }

        .glass-sidebar .nav-link i {
            font-size: 20px;
        }

        /* Highlight active icon */
        .glass-sidebar .nav-link.active i {
            background: white;
            color: #000;
            border-radius: 50%;
            padding: 8px; /* Increased padding for a larger circle */
        }

        /* Remove text underline */
        .glass-sidebar .nav-link:hover {
            text-decoration: none;
        }

        /* Adjust content for sidebar expansion */
        body.expanded-content {
            margin-left: 200px;
            transition: margin-left 0.3s ease;
        }
    </style>
</head>
<body>
<div id="sidebar" class="glass-sidebar collapsed">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a href="#" class="nav-link active"><i class="fa fa-th-large"></i><span>General</span></a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link"><i class="fa fa-chart-line"></i><span>Sales</span></a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link"><i class="fa fa-wallet"></i><span>Expenses</span></a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link"><i class="fa fa-tags"></i><span>Promos</span></a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link"><i class="fa fa-star"></i><span>Feedbacks</span></a>
        </li>
    </ul>
    <button id="toggleSidebar" class="btn btn-light btn-sm mt-3">
        <i class="fas fa-bars"></i> <!-- Changed toggle icon -->
    </button>
</div>

<script>
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('toggleSidebar');
    const navLinks = document.querySelectorAll('.nav-link');

    toggleBtn.addEventListener('click', () => {
        sidebar.classList.toggle('expanded');
        sidebar.classList.toggle('collapsed');
        document.body.classList.toggle('expanded-content');
    });

    // Active icon toggle
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            navLinks.forEach(item => item.classList.remove('active'));
            link.classList.add('active');
        });
    });
</script>
</body>
</html>
