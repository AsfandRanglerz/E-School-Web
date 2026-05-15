<div class="py-4 main-div-for-side-menus">

    <!-- Logo + Toggle -->
    <div class="d-flex justify-content-between align-items-center sidebar-header">
        <img src="{{ asset('web/assets/images/logo.png') }}" alt="" class="sidebar-logo">

        <button class="btn border-0 bg-transparent p-0 sidebar-toggle-btn">
            <img src="{{ asset('web/assets/images/icontsi.png') }}" alt="" class="toggle-icon pb-2">
        </button>
    </div>

    <!-- Menu -->
    <ul class="sidebar-menu list-unstyled mt-5">

        <!-- Dashboard -->
        <li>
            <a href="{{ route('admin_dashboard') }}"
               class="sidebar-link dashboard-link 
               {{ request()->routeIs('admin_dashboard') ? 'active' : '' }}">

                <span class="sidebar-icon">
                    <img src="{{ asset('web/assets/images/side1.png') }}" alt="">
                </span>

                <span class="sidebar-text">Dashboard</span>
            </a>
        </li>

        <!-- Students -->
        <li>
            <a href="{{ route('admin_students') }}"
               class="sidebar-link students-link
               {{ request()->routeIs(
                    'admin_students',
                    'admin_student_detail',
                    'admin_add_student',
                    'admin_add_student_family'
               ) ? 'active' : '' }}">

                <span class="sidebar-icon">
                    <img src="{{ asset('web/assets/images/side2.png') }}" alt="">
                </span>

                <span class="sidebar-text">Students</span>
            </a>
        </li>

        <!-- Staff -->
        <li>
            <a href="{{ route('admin_staff') }}"
               class="sidebar-link staff-link
               {{ request()->routeIs(
                    'admin_staff',
                    'admin_add_staff',
                    'admin_staff_detail'
               ) ? 'active' : '' }}">

                <span class="sidebar-icon">
                    <img src="{{ asset('web/assets/images/staffs.png') }}" alt="">
                </span>

                <span class="sidebar-text">Staff</span>
            </a>
        </li>

        <!-- Classes -->
        <li>
            <a href="{{ route('admin_classes') }}"
               class="sidebar-link classes-link
               {{ request()->routeIs(
                    'admin_classes'
               ) ? 'active' : '' }}">

                <span class="sidebar-icon">
                    <img src="{{ asset('web/assets/images/staffs.png') }}" alt="">
                </span>

                <span class="sidebar-text">Classes</span>
            </a>
        </li>

        <!-- Ledger -->
        <li>
            <a href="#"
               class="sidebar-link ledger-link
               {{ request()->routeIs('admin_ledger') ? 'active' : '' }}">

                <span class="sidebar-icon">
                    <img src="{{ asset('web/assets/images/ledgers.png') }}" alt="">
                </span>

                <span class="sidebar-text">Ledger</span>
            </a>
        </li>

        <!-- Finance -->
        <li>
            <a href="#"
               class="sidebar-link finance-link
               {{ request()->routeIs('admin_finance') ? 'active' : '' }}">

                <span class="sidebar-icon">
                    <img src="{{ asset('web/assets/images/staffs.png') }}" alt="">
                </span>

                <span class="sidebar-text">Finance</span>
            </a>
        </li>

        <!-- Fees -->
        <li>
            <a href="#"
               class="sidebar-link fees-link
               {{ request()->routeIs('admin_fees') ? 'active' : '' }}">

                <span class="sidebar-icon">
                    <img src="{{ asset('web/assets/images/fees.png') }}" alt="">
                </span>

                <span class="sidebar-text">Fees</span>
            </a>
        </li>

        <!-- Reports -->
        <li>
            <a href="#"
               class="sidebar-link reports-link
               {{ request()->routeIs('admin_reports') ? 'active' : '' }}">

                <span class="sidebar-icon">
                    <img src="{{ asset('web/assets/images/staffs.png') }}" alt="">
                </span>

                <span class="sidebar-text">Reports</span>
            </a>
        </li>

        <!-- Exams -->
        <li>
            <a href="#"
               class="sidebar-link exams-link
               {{ request()->routeIs('admin_exams') ? 'active' : '' }}">

                <span class="sidebar-icon">
                    <img src="{{ asset('web/assets/images/exams.png') }}" alt="">
                </span>

                <span class="sidebar-text">Exams</span>
            </a>
        </li>

        <!-- Chat -->
        <li>
            <a href="#"
               class="sidebar-link chat-link
               {{ request()->routeIs('admin_chat') ? 'active' : '' }}">

                <span class="sidebar-icon">
                    <img src="{{ asset('web/assets/images/side8.png') }}" alt="">
                </span>

                <span class="sidebar-text">Chat</span>
            </a>
        </li>

        <!-- Announcements -->
        <li>
            <a href="#"
               class="sidebar-link announcement-link
               {{ request()->routeIs('admin_announcements') ? 'active' : '' }}">

                <span class="sidebar-icon">
                    <img src="{{ asset('web/assets/images/annas.png') }}" alt="">
                </span>

                <span class="sidebar-text">Announcements</span>
            </a>
        </li>

        <!-- Todos -->
        <li>
            <a href="#"
               class="sidebar-link todos-link
               {{ request()->routeIs('admin_todos') ? 'active' : '' }}">

                <span class="sidebar-icon">
                    <img src="{{ asset('web/assets/images/todos.png') }}" alt="">
                </span>

                <span class="sidebar-text">Todos</span>
            </a>
        </li>

        <!-- Settings -->
        <li>
            <a href="#"
               class="sidebar-link settings-link
               {{ request()->routeIs('admin_settings') ? 'active' : '' }}">

                <span class="sidebar-icon">
                    <img src="{{ asset('web/assets/images/sets.png') }}" alt="">
                </span>

                <span class="sidebar-text">Settings</span>
            </a>
        </li>

    </ul>

</div>