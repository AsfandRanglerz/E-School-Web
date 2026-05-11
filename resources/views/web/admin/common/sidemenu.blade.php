<div class="py-4 main-div-for-side-menus">

    <!-- Logo + Toggle -->
    <div class="d-flex justify-content-between align-items-center sidebar-header">
        <img src="{{asset('web/assets/images/logo.png')}}" alt="" class="sidebar-logo">
        <button class="btn border-0 bg-transparent p-0 sidebar-toggle-btn">
            <img src="{{asset('web/assets/images/icontsi.png')}}" alt="" class="toggle-icon pb-2">
        </button>
    </div>

    <!-- Menu -->
    <ul class="sidebar-menu list-unstyled mt-5">

        <li>
            <a href="{{ route('admin_dashboard') }}"
                class="sidebar-link dashboard-link {{ request()->routeIs('admin_dashboard') ? 'active' : '' }}">
                <span class="sidebar-icon"> <img src="{{asset('web/assets/images/side1.png')}}" alt=""> </span>
                <span class="sidebar-text">Dashboard</span>
            </a>
        </li>

        <li>
            <a href="{{ route('admin_students') }}" class="sidebar-link students-link {{ request()->routeIs('admin_students') ? 'active' : '' }}">
                <span class="sidebar-icon"> <img src="{{asset('web/assets/images/side2.png')}}" alt=""> </span>
                <span class="sidebar-text">Students</span>
            </a>
        </li>
        <li>
            <a href="#" class="sidebar-link staff-link">
                <span class="sidebar-icon "> <img src="{{asset('web/assets/images/staffs.png')}}" alt=""> </span>
                <span class="sidebar-text">Staff</span>
            </a>
        </li>
        <li>
            <a href="#" class="sidebar-link ledger-link">
                <span class="sidebar-icon "> <img src="{{asset('web/assets/images/ledgers.png')}}" alt=""> </span>
                <span class="sidebar-text">Ledger</span>
            </a>
        </li>
        <li>
            <a href="#" class="sidebar-link finance-link">
                <span class="sidebar-icon "> <img src="{{asset('web/assets/images/staffs.png')}}" alt=""> </span>
                <span class="sidebar-text">Finance</span>
            </a>
        </li>
        <li>
            <a href="#" class="sidebar-link fees-link">
                <span class="sidebar-icon "> <img src="{{asset('web/assets/images/fees.png')}}" alt=""> </span>
                <span class="sidebar-text">Fees</span>
            </a>
        </li>

        <li>
            <a href="#" class="sidebar-link reports-link">
                <span class="sidebar-icon "> <img src="{{asset('web/assets/images/staffs.png')}}" alt=""> </span>
                <span class="sidebar-text">Reports</span>
            </a>
        </li>

        <li>
            <a href="#" class="sidebar-link exams-link">
                <span class="sidebar-icon "> <img src="{{asset('web/assets/images/exams.png')}}" alt=""> </span>
                <span class="sidebar-text">Exams</span>
            </a>
        </li>
        <li>
            <a href="#" class="sidebar-link chat-link">
                <span class="sidebar-icon"> <img src="{{asset('web/assets/images/side8.png')}}" alt=""> </span>
                <span class="sidebar-text">Chat</span>
            </a>
        </li>

        <li>
            <a href="#" class="sidebar-link announcement-link">
                <span class="sidebar-icon"> <img src="{{asset('web/assets/images/annas.png')}}" alt=""> </span>
                <span class="sidebar-text">Announcements</span>
            </a>
        </li>

        <li>
            <a href="#" class="sidebar-link todos-link">
                <span class="sidebar-icon "> <img src="{{asset('web/assets/images/todos.png')}}" alt=""> </span>
                <span class="sidebar-text">Todos</span>
            </a>
        </li>
        <li>
            <a href="#" class="sidebar-link settings-link">
                <span class="sidebar-icon "> <img src="{{asset('web/assets/images/sets.png')}}" alt=""> </span>
                <span class="sidebar-text">Settings</span>
            </a>
        </li>

        

    </ul>

</div>