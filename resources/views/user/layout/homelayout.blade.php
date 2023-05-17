<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITBA: Home</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
    <!-----responsive css----->
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <!--------pen tab part--------------->
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <!--------font awsme part--------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css'>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/icon.png') }}">
    <link rel="icon" href="{{ asset('images/icon.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('images/icon.png') }}" sizes="192x192" />

</head>

<body>
    <!-- upper navbar start here -->
    @include('user.layout.uppernavbar')
    <!-- upper navbar end here -->

    <!-- navbar start here -->
    @include('user.layout.header')
    <!-- navbar ends here -->

    <!-- banner start here -->
    @include('user.layout.banner')

    <main>
        @yield('main-content')
    </main>


    <!------------------foooter part start--------------->
    @include('user.layout.footer')







    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/script1.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/script2.js') }}"></script>
    <!------pen tab part---------->
    <script src="{{ asset('js/all.js') }}"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js'></script>
    <!------font awsm part---------->

    <script>
        let tabSwitchers = document.querySelectorAll('[target-wrapper]')
        tabSwitchers.forEach(item => {
            item.addEventListener('click', (e) => {
                let currentWrapperId = item.getAttribute('target-wrapper')
                let currentWrapperTargetId = item.getAttribute('target-tab')

                let currentWrapper = document.querySelector(`#${currentWrapperId}`)
                let currentWrappersTarget = document.querySelector(`#${currentWrapperTargetId}`)

                let allCurrentTabItem = document.querySelectorAll(`[target-wrapper='${currentWrapperId}']`)
                let allCurrentWrappersTarget = document.querySelectorAll(
                    `#${currentWrapperId} .tab-content`)

                if (currentWrappersTarget) {
                    if (!currentWrappersTarget.classList.contains('active')) {
                        allCurrentWrappersTarget.forEach(tabItem => {
                            tabItem.classList.remove('active')
                        })
                        allCurrentTabItem.forEach(item => {
                            item.classList.remove('active')
                        })
                        item.classList.add('active')
                        currentWrappersTarget.classList.add('active')
                    }
                }
            })
        })
    </script>
    <script>
        // var datatable = new DataTable("#membertable", {
        //     responsive: true
        //     // perPage: 10,
        // });
    </script>
</body>

</html>