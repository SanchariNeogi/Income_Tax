let baseurl = window.location.origin + "/";

let url = window.location.href;

if (url.replace(baseurl, "")) {
    switch (url.replace(baseurl, "")) {
        case "index":
            document.getElementsByTagName("title")[0].innerText = "ITBA: Home";
            break;

        case "about-us":
            document.getElementsByTagName("title")[0].innerText =
                "ITBA: History";
            break;

        case "activities":
            document.getElementsByTagName("title")[0].innerText =
                "ITBA: Activities";
            break;

        case "event":
            document.getElementsByTagName("title")[0].innerText = "ITBA: Event";
            break;

        case "gallery":
            document.getElementsByTagName("title")[0].innerText =
                "ITBA: Gallery";
            break;

        case "pay-membership":
            document.getElementsByTagName("title")[0].innerText =
                "ITBA: Payment";
            break;

        case "become-a-member":
            document.getElementsByTagName("title")[0].innerText =
                "ITBA: Become a Member";
            break;

        case "contactus":
            document.getElementsByTagName("title")[0].innerText =
                "ITBA: Contact Us";
            break;

        case "notice":
            document.getElementsByTagName("title")[0].innerText =
                "ITBA: Notice";
            break;

        case "members":
            document.getElementsByTagName("title")[0].innerText =
                "ITBA: Members";
            break;

        default:
            break;
    }
}
