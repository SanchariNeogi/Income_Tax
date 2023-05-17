<header>
    <div class="total_header">
        <div class="nav_left">
            <a class="logo_img" href="./index.html">
                <img src="{{ asset('images/logo_income_tax.png') }}" alt="">
            </a>
        </div>

        <div class="menu_nav_col">
            <ul class="navclass">
                <li class="nav_list">
                    <a href="{{ route('index') }}" class="one active">
                        Home
                    </a>
                </li>
                <li class="dropdown">
                    <a class="one dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        About Us
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('aboutus') }}">History</a></li>
                        <li><a class="dropdown-item" href="{{ asset('/notices/incometax.pdf') }}" target="_blank">Constitution</a></li>
                        <li><a class="dropdown-item" href="{{ route('activities') }}">Activities</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a class="one dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Committee
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('executive') }}">Executive Committee</a></li>
                        <li><a class="dropdown-item" href="{{ route('commitee') }}">Previous Committee 2020-2022</a>
                        </li>
                    </ul>
                </li>

                {{-- <li>
                    <a href="{{ route('commitee') }}" class="one">
                Committee
                </a>
                </li> --}}
                <li>
                    <a href="{{ route('notice') }}" class="one">
                        Notice
                    </a>
                </li>

                <li>
                    <a href="{{ route('event') }}" class="one">
                        Event
                    </a>
                </li>

                <li>
                    <a href="#" class="one">
                        Circular
                    </a>
                </li>
                <li>
                    <a href="{{ route('gallery') }}" class="one">
                        Gallery
                    </a>
                </li>
                <li>
                    <a href="{{ route('members') }}" class="one">
                        Membership
                    </a>
                </li>
                <li>
                    <a href="{{ route('contactus') }}" class="one">
                        Contact
                    </a>
                </li>
                <li>
                    <div class="headerClose">
                        <a href="#">X</a>
                    </div>
                </li>
            </ul>
        </div>

        <div class="icon_display">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" height="25" width="25" viewBox="0 0 448 512">
                <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
            </svg>
        </div>
    </div>
</header>