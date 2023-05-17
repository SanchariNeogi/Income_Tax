<section>
    <div class="gallery_div">
        <h3>Gallery</h3>
    </div>
    <section>
        <div class="filter-section">

            <!-- Filter Controls !-->
            <div class="controls">

                <ul class="nav nav-tabs clearfix" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#all"
                            type="button" role="tab" aria-controls="home" aria-selected="true">All</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#covid19"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">Covid19</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#seminar"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">Seminar
                            2022</button>
                    </li>
                </ul>

            </div>

            <!-- Filter Grid !-->

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane item fade show active" id="all" role="tabpanel" aria-labelledby="home-tab">
                    <div class="item-grid">
                        @foreach (getGalleryImage('images/gallery/all') as $key => $all)
                            <div class="item">
                                <img src="{{ asset('images/gallery/all/' . $all) }}" alt="all"
                                    data-bs-toggle="modal" data-bs-target="#allGalleryModal{{ $key }}">
                            </div>
                        @endforeach
                    </div>

                </div>
                <div class="tab-pane fade" id="covid19" role="tabpanel" aria-labelledby="covid19-tab">
                    <div class="item-grid">
                        @foreach (getGalleryImage('images/gallery/covid19') as $key => $covid19)
                            <div class="item">
                                <img src="{{ asset('images/gallery/covid19/' . $covid19) }}" alt="covid19"
                                    data-bs-toggle="modal" data-bs-target="#covid19GalleryModal{{ $key }}">
                            </div>
                        @endforeach
                    </div>

                </div>
                <div class="tab-pane fade" id="seminar" role="tabpanel" aria-labelledby="seminar-tab">
                    <div class="item-grid">
                        @foreach (getGalleryImage('images/gallery/seminar') as $key => $seminar)
                            <div class="item">
                                <img src="{{ asset('images/gallery/seminar/' . $seminar) }}" alt="seminar"
                                    data-bs-toggle="modal" data-bs-target="#seminarGalleryModal{{ $key }}">
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>


            <!-- Modal -->
            @foreach (getGalleryImage('images/gallery/all') as $key => $all)
                <div class="modal fade" id="allGalleryModal{{ $key }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="">
                                    <img src="{{ asset('images/gallery/all/' . $all) }}" alt="all"
                                        data-bs-toggle="modal" data-bs-target="#allGalleryModal{{ $key }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            @foreach (getGalleryImage('images/gallery/covid19') as $key => $covid19)
                <div class="modal fade" id="covid19GalleryModal{{ $key }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="">
                                    <img src="{{ asset('images/gallery/covid19/' . $covid19) }}" alt="covid19"
                                        data-bs-toggle="modal"
                                        data-bs-target="#covid19GalleryModal{{ $key }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            @foreach (getGalleryImage('images/gallery/seminar') as $key => $seminar)
                <div class="modal fade" id="seminarGalleryModal{{ $key }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="">
                                    <img src="{{ asset('images/gallery/seminar/' . $seminar) }}" alt="seminar"
                                        data-bs-toggle="modal"
                                        data-bs-target="#seminarGalleryModal{{ $key }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
    <div class="gallery_button">
        <button type="button" class="btn btn-primary">View more</button>
    </div>

</section>
