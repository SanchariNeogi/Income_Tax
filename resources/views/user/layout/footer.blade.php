<footer>
    <div class="container-fluid footer-bg px-0">
        <div class="footer_total_div">
            <div class="text_part">
                <a class="logo_img" href="./index.html">
                    <img src="{{ asset('images/logo_income_tax.png') }}" alt="">
                </a>
                <p style="text-align: justify"> The Income Tax Bar Association, Calcutta, can claim to be the oldest
                    Income Tax Bar in the
                    country. Since then the membership continued to grow and at present the Bar Association carries
                    a total weight of 441 Advocates.
                </p>
            </div>

            <div class="point_part member_mrgn">
                <h5>Quick Link</h5>
                <ul>
                    <li>
                        <a href="{{ route('index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" height="10" width="10" fill="#2f3f70" viewBox="0 0 512 512">
                                <path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z" />
                            </svg>
                            &nbsp; &nbsp;
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('aboutus') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" height="10" width="10" fill="#2f3f70" viewBox="0 0 512 512">
                                <path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z" />
                            </svg>
                            &nbsp; &nbsp;
                            History
                        </a>
                    </li>
                    {{-- <li>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" height="10" width="10" fill="#ffce1d"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z" />
                                </svg>
                                Constitution
                            </a>
                        </li> --}}
                    <li>
                        <a href="{{ route('commitee') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" height="10" width="10" fill="#2f3f70" viewBox="0 0 512 512">
                                <path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z" />
                            </svg>
                            &nbsp; &nbsp;
                            Commitee
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('event') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" height="10" width="10" fill="#2f3f70" viewBox="0 0 512 512">
                                <path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z" />
                            </svg>
                            &nbsp; &nbsp;
                            Activites
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('gallery') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" height="10" width="10" fill="#2f3f70" viewBox="0 0 512 512">
                                <path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z" />
                            </svg>
                            &nbsp; &nbsp;
                            Gallery
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contactus') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" height="10" width="10" fill="#2f3f70" viewBox="0 0 512 512">
                                <path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z" />
                            </svg>
                            &nbsp; &nbsp;
                            Contact
                        </a>
                    </li>

                </ul>
            </div>

            <div class="point_part member_mrgn">
                <h5>Membership</h5>
                <ul>
                    {{-- <li>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" height="10" width="10" fill="#ffce1d"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z" />
                                </svg>
                                Registration
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" height="10" width="10" fill="#ffce1d"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z" />
                                </svg>
                                Login
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" height="10" width="10" fill="#ffce1d"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z" />
                                </svg>
                                Profile
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" height="10" width="10" fill="#ffce1d"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z" />
                                </svg>
                                Membership Account
                            </a>
                        </li> --}}
                    <li>
                        <a href="{{ route('members') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" height="10" width="10" fill="#2f3f70" viewBox="0 0 512 512">
                                <path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z" />
                            </svg>
                            &nbsp; &nbsp;
                            Members Directory
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('become-a-member') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" height="10" width="10" fill="#2f3f70" viewBox="0 0 512 512">
                                <path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z" />
                            </svg>
                            &nbsp; &nbsp;
                            Become a Member
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" height="10" width="10" fill="#2f3f70" viewBox="0 0 512 512">
                                <path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z" />
                            </svg>
                            &nbsp; &nbsp;
                            Pay Membership
                        </a>
                    </li>

                </ul>
            </div>

            <div class="point_part address_part">
                <h5>Contact info</h5>
                <ul>
                    <li>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="20" fill="#2f3f70" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg>
                            Aayakar Bhawan Annexe,
                            P-13 Chowringhee Square,
                            1st Floor, Kolkata 700069

                        </a>
                    </li>
                    <li>
                        <a href="tel:+913322483390">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#2f3f70" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg>
                            +91 33 2248 3390
                        </a>
                    </li>
                    <li>
                        <a href="mailto:itbacal@gmail.com">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#2f3f70" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                            </svg>
                            itbacal@gmail.com
                        </a>
                    </li>


                </ul>
                <div class="social_icons">
                    <div class="icons_div">
                        <img src="{{ asset('images/facebook.png')}}" alt="">
                    </div>
                    <div class="icons_div">
                        <img src="{{ asset('images/whatsapp.png')}}" alt="">
                    </div>
                    <div class="icons_div">
                        <img src="{{ asset('images/twitter.png')}}" alt="">
                    </div>
                    <div class="icons_div">
                        <img src="{{ asset('images/instagram.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="last_footer">
        <div class="copyright_text">
            <h5>Copyright@2023. All rights reserved.</h5>
        </div>
        <div class="company_name">
            <h5> Developed by <a href="#">Dignexus</a></h5>
        </div>
    </div>
</footer>