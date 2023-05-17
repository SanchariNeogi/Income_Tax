// Don't forget the CDNjs!

// $(function () {
//     var filterList = {
//         init: function () {
//             // MixItUp plugin
//             // http://mixitup.io
//             $(".item-grid").mixItUp({
//                 selectors: {
//                     target: ".item",
//                     filter: ".filter",
//                 },
//                 load: {
//                     filter: "all", // show app tab on first load
//                 },
//             });
//         },
//     };
//     // Run the show!
//     filterList.init();
// });
//   menu responsive
$(document).ready(function () {
    // $(".headerHumberger").click(function() {
    //     $(".menu_nav").addClass("humbergerLeft");
    // });

    $(".headerClose").click(function () {
        $(".total_header .navclass").toggleClass("active");
    });
});
$(document).ready(function () {
    $(".icon_display").on("click", function (event) {
        $(".total_header .navclass").toggleClass("active");
    });
});
