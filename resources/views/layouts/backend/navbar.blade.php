        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
              <a href="{{ route('dashboard') }}" class="app-brand-link">
                <span class="app-brand-logo demo">
                  <img src="{{ asset('assets/img/logo-elearning-unp.png') }}" style="max-width: 250px" alt="">
                </span>
              </a>
  
              <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
              </a>
            </div>
  
            <div class="menu-inner-shadow"></div>
  
            <ul class="menu-inner py-1 mt-3">
              {{-- Dashboard --}}
              <li class="menu-item {{ Route::is('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-home"></i>
                  <div data-i18n="Analytics">Dashboard</div>
                </a>
              </li>
              {{-- Users --}}
              <li class="menu-item {{ Route::is('users*') ? 'active' : '' }}">
                <a href="{{ route('users.index') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-user"></i>
                  <div data-i18n="Analytics">Users</div>
                </a>
              </li>
              {{-- Faculties --}}
              <li class="menu-item {{ Route::is('faculties*') ? 'active' : '' }}">
                <a href="{{ route('faculties.index') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-school"></i>
                  <div data-i18n="Analytics">Faculties</div>
                </a>
              </li>
              {{-- Departments --}}
              <li class="menu-item {{ Route::is('departments*') ? 'active' : '' }}">
                <a href="{{ route('departments.index') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-building-house"></i>
                  <div data-i18n="Analytics">Departments</div>
                </a>
              </li>
              {{-- Study Programs --}}
              <li class="menu-item {{ Route::is('study_programs*') ? 'active' : '' }}">
                <a href="{{ route('study_programs.index') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-book"></i>
                  <div data-i18n="Analytics">Study Programs</div>
                </a>
              </li>
              {{-- Students --}}
              <li class="menu-item {{ Route::is('students*') ? 'active' : '' }}">
                <a href="{{ route('students.index') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-group"></i>
                  <div data-i18n="Analytics">Students</div>
                </a>
              </li>
              {{-- Lecturers --}}
              <li class="menu-item {{ Route::is('lecturers*') ? 'active' : '' }}">
                <a href="{{ route('lecturers.index') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-group"></i>
                  <div data-i18n="Analytics">Lecturers</div>
                </a>
              </li>
              {{-- Courses --}}
              <li class="menu-item {{ Route::is('courses*') ? 'active' : '' }}">
                <a href="{{ route('courses.index') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-book"></i>
                  <div data-i18n="Analytics">Courses</div>
                </a>
              </li>
              {{-- Schedules --}}
              <li class="menu-item {{ Route::is('schedules*') ? 'active' : '' }}">
                <a href="{{ route('schedules.index') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-calendar"></i>
                  <div data-i18n="Analytics">Schedules</div>
                </a>
              </li>
              {{-- Learning Categories --}}
              <li class="menu-item {{ Route::is('learning_categories*') ? 'active' : '' }}">
                <a href="{{ route('learning_categories.index') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-book"></i>
                  <div data-i18n="Analytics">Learning Categories</div>
                </a>
              </li>
            </ul>
          </aside>
          <!-- / Menu -->