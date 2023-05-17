<section class="notice_special_div">
    <h2>Notice</h2>
    <div class="notice_full_sec_div">
        <div class="notice_full_sec">
            <div class="left_div">
                <img src="{{ asset('images/notice/egm_notice.jpg') }}" alt="">
            </div>
            <div class="right_div">
                <!--------pen tab+slider part start--------------->
                <div class="tabs">
                    <input type="radio" name="tabs" id="tabone" checked="checked">
                    <label for="tabone">Current</label>
                    <div class="tab">
                        <!----------slider part--------->
                        <div id="carouselExampleControlsb" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <h4 class="mt-2">EGM NOTICE</h4>
                                    <p class="mt-4">An Extra Ordinary General Meeting (EGM) of the Income Tax Bar
                                        Association, Calcutta, will be held on Friday, the 11th of November, 2022 at
                                        4 p.m. at our Association Hall at Aayakar Bhawan Annexe, 1st Floor P-13,
                                        Chowringhee Square, Kolkata -700069 to transact the following business:<br>
                                        "To
                                        consider and adopt the 'Income Tax Bar Association Members' Benefit Rules',
                                        2021"
                                    </p>
                                </div>
                                {{-- <div class="carousel-item">
                                    <h4 class="mt-2">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry.</h1>
                                        <p class="mt-4">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.Lorem Ipsum is simply dummy text of the
                                            printing and typesetting industry.Lorem Ipsum is simply dummy text
                                            of the printing and typesetting industry.
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry.Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.
                                        </p>
                                </div> --}}
                                {{-- <div class="carousel-item">
                                    <h4 class="mt-2">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry.</h1>
                                        <p class="mt-4">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.Lorem Ipsum is simply dummy text of the
                                            printing and typesetting industry.Lorem Ipsum is simply dummy text
                                            of the printing and typesetting industry.
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry.Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.
                                        </p>
                                </div> --}}
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsb" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true">
                                    <img src="{{ asset('images/left_arrow.png') }}" alt="">
                                </span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsb" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true">
                                    <img src="{{ asset('images/right_arrow.png') }}" alt="">
                                </span>
                            </button>
                        </div>
                        <!----------slider part end --------->


                        <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
                    </div>

                    <input type="radio" name="tabs" id="tabtwo">
                    <label for="tabtwo">Previous</label>
                    <div class="tab">
                        <!----------slider part--------->
                        <div id="carouselExampleControlsa" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <h4 class="mt-2">SEMINAR NOTICE</h1>
                                        <p class="mt-4">Members are requested to submit the Delegate Form along with
                                            the Delegate Fees in the Library Office.<br> Delegate Form can be collected
                                            from
                                            the Library Office.<br> Delegate Form is also available in the lncome Tax
                                            Bar
                                            Association, Calcutta Website www.itbacal.org as well as posted in the
                                            Official whatsapp group.<br> The same may be printed and submitted.
                                        </p>
                                </div>
                                <div class="carousel-item">
                                    <h4 class="mt-2">BIJOYA, EID AND DIWALI GET TOGETHER NOTICE DATED 15.10.2022</h1>
                                        <p class="mt-4">Bijoya, Eid and Diwali get-together programme shall be
                                            organized and held in the premises of the Income Tax Bar Association,
                                            Calcutta on Friday the 4th of November, 2022 from 4 p.m. onwards.</p>
                                </div>
                                <div class="carousel-item">
                                    <h4 class="mt-2">SEMINAR ON DIRECT TAXES</h1>
                                        <p class="mt-4">PROGRAMME SCHEDULE<br>
                                            National Anthem<br>
                                            Ganesh Bandana and Lightning of Lamp<br>
                                            Inaugural Address by the Chairman of the Seminar Committee Sri S.K.
                                            Tulsiyan<br>
                                            Address by the President ITBA, Calcutta Sri Makhan Chandra Halder
                                        </p>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsa" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true">
                                    <img src="{{ asset('images/left_arrow.png') }}" alt="">
                                </span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsa" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true">
                                    <img src="{{ asset('images/right_arrow.png') }}" alt="">
                                </span>
                            </button>
                        </div>
                        <!----------slider part end --------->

                    </div>

                    <!-- <input type="radio" name="tabs" id="tabthree">
                            <label for="tabthree">Tab Three</label>
                            <div class="tab">
                              <h1>Tab Three Content</h1>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div> -->
                </div>
                <!--------pen tab+slider part end--------------->

                <!----cta button------------>
                <div class="achor_ban2">
                    <a href="{{ route('notice') }}">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>