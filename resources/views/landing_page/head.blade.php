<link rel="stylesheet" href="{{ asset('vendors/liquid-icon/liquid-icon.min.css') }}" />
<link rel="stylesheet" href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/theme-vendors.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/theme.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/original.css') }}" />

<!-- Head Libs -->
<script async src="{{ asset('vendors/modernizr.min.js') }}"></script>

<style>
    .font-color-orange{
        color: #ff7719 !important;
    }

    .font-color-navyblue{
        color: #11496d !important;
    }

    .bg-grad-bluenavy{
        box-shadow: 4px 5px 8px 0 rgba(0, 0, 0, 0.3) !important;
        background-image: linear-gradient(51deg, #050c28 9%, #11496d 98%) !important;

    }

    #map {
        height: 400px;
        /* The height is 400 pixels */
        width: 100%;
        /* The width is the width of the web page */
    }

    @media screen and (max-width: 600px) {
        .text-mobile {
            font-size: 18px !important;
        }

        .img-promo {
            width: 100px !important;
        }

        .font-mobile{
            font-size: 12px !important;
        }

        .bg-banner{
            background-image: url("./images/sketch/headbanner-mobile.jpg");
            background-size: cover;
        }
    }

    @media screen and (min-width: 600px) {
        .bg-banner{
            background-image: url("./images/sketch/headbanner.jpg");
            background-size: cover;
        }
    }
</style>