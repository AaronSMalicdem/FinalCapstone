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
            left: 30px;
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
            padding: 10px 0;
            color: white;
            text-decoration: none;
            white-space: nowrap;
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
            <a href="#" class="nav-link"><i class="fa fa-home"></i><span>Main</span></a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link"><i class="fa fa-coffee"></i><span>Kuwago1</span></a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link"><i class="fa fa-cog"></i><span>Kuwago2</span></a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.users.index')}}" class="nav-link"><i class="fa fa-users"></i><span>Manage Users</span></a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link"><i class="fa fa-paint-brush"></i><span>Uddesign</span></a>
        </li>
        <!-- Added Profile link -->
        <li class="nav-item">
            <a href="{{ route('profile.edit') }}" class="nav-link"><i class="fa fa-user"></i><span>Profile</span></a>
        </li>
        <!-- Added Logout link -->
        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out-alt"></i><span>Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
    <button id="toggleSidebar" class="btn btn-light btn-sm mt-3">
        <i class="fas fa-chevron-left"></i>
    </button>
</div>

<script>
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('toggleSidebar');

    toggleBtn.addEventListener('click', () => {
        sidebar.classList.toggle('expanded');
        sidebar.classList.toggle('collapsed');
        document.body.classList.toggle('expanded-content');
    });
</script>
</body>
</html>
