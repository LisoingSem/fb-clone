import AOS from "aos";
import "aos/dist/aos.css";

// import Swiper from 'swiper/bundle';
// import 'swiper/css/bundle';
// window.Swiper = Swiper;

window.onload = function () {
    AOS.init();
};

let preloader = $("#preloader");
if (preloader) {
    window.addEventListener("load", () => {
        preloader.remove();
    });
}

var scrollThreshold = 200;
window.addEventListener("scroll", function () {
    if (window.pageYOffset > scrollThreshold) {
        $("#navbar").addClass("navbar-sticky");
        // $(".back-top").css("display", "flex");
    } else {
        // $(".back-top").css("display", "none");
        $("#navbar").removeClass("navbar-sticky");
    }
});

function adjustWidth() {
    if (window.innerWidth <= 1440) {
        var calculatedWidthSidebar =
            360 - ((1440 - window.innerWidth) / 1440) * 500;
        $(".sidebar").css("width", calculatedWidthSidebar + "px");

        if (calculatedWidthSidebar <= 260) {
            $(".sidebar").hide();
            $("#open-sidebar").removeClass('hidden').addClass("flex");
        } else {
            $("#open-sidebar").removeClass('flex').addClass("hidden");
            $(".sidebar").show();
        }
    } else {
        $(".sidebar").css("width", "100%");
        $(".sidebar").show();
    }

    if (window.innerWidth <= 1440) {
        var calculatedWidthRightbar =
            360 - ((1440 - window.innerWidth) / 1440) * 500;

        if (calculatedWidthRightbar <= 260) {
            $(".rightbar").css("width","360px");
        } else {
            $(".rightbar").css("width", calculatedWidthRightbar + "px");
        }

        if (window.innerWidth <= 930) {
            $(".rightbar").addClass("hidden");
        }else {
            $(".rightbar").removeClass("hidden");
        }
    } else {
        $(".rightbar").css("width", "100%");
    }

    if (window.innerWidth <= 1400) {
        var calculatedWidthBody =
            680 - ((1440 - window.innerWidth) / 1440) * 800;
        var checkWidth = window.innerWidth - $(".rightbar").width() - 50;
        console.log(checkWidth);
        $("#content").css("width", calculatedWidthBody + "px");

        if (window.innerWidth <= 1154) {
            $("#content").css("width", checkWidth + "px");
            $("#content").removeClass("max-w-[680px]");
            $("#body").removeClass("mx-auto");
            $("#wrapper-content")
                .removeClass("justify-center")
                .addClass("justify-start px-5 w-full");

            if (window.innerWidth <= 930) {
                $("#content").addClass("!w-full");
            } else {
                $("#content").removeClass("!w-full");
                $("#content").css("width", checkWidth + "px");
            }
        } else {
            $("#body").addClass("mx-auto");
            $("#wrapper-content")
                .addClass("justify-center")
                .removeClass("justify-start px-5");
        }
    } else {
        $("#content").css("width", "100%");
        $('#content').addClass("max-w-[680px]");
        $('#body').addClass('mx-auto');
        $('#wrapper-content').addClass('justify-center').removeClass('justify-start px-5');
    }

    if(window.innerWidth <= 1026){
        $('#search').addClass('hidden');
        $('#search-box').removeClass('px-4').addClass('!w-[40px] !h-[40px] rounded-full justify-center overflow-hidden  pl-2');
    }else{
        $('#search').removeClass('hidden');
        $('#search-box').addClass('px-4 w-full').removeClass('!w-[40px] !h-[40px] rounded-full overflow-hidden pl-2');
    }
}

$(document).ready(function () {
    adjustWidth();
});

$(window).on("resize", function () {
    adjustWidth();
});
