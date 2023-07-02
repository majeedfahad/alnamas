<!-- Modal -->
<style>
    .loader {
        width: 180px;
        height: 180px;
        animation: pulse 2s ease-in-out infinite;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    @keyframes pulse {
        0% {
            opacity: 1;
        }
        50% {
            opacity: 0.1;
        }
        100% {
            opacity: 1;
        }
    }
</style>
<div class="custom-modal position-fixed view-event" id="event"
     style="inset: 0 0 0 0; ; z-index: 99999;display: none">
    <div class="overlay position-fixed" style="inset: 0 0 0 0; background-color: rgba(0,0,0,.2) ; z-index: 99999"></div>
    <div class="d-flex justify-content-center align-items-center " style="height: 100%;">
        <img src="{{asset('img/logo.png')}}" alt="loading" class="loader" id="loader">
        <img id="show-event-modal" class="position-relative rounded" src="https://placehold.co/600x400/000000/FFF"
             alt="" style="display: none; z-index: 999999999;max-width: 500px ;width: 90%;">
    </div>
</div>

<script>
    function imageLoader(elm, isModal = true) {
        console.log(elm)
        if (isModal) {
            var myImage = document.querySelector("#show-event-modal");
            var loader = document.querySelector("#loader");
        } else {
            var myImage = elm.parentNode.querySelector("#post-img");
            var loader = elm.parentNode.querySelector("#loader");
        }

        myImage.style.display = "none";
        loader.style.display = "block";

        myImage.src = elm.src;

        myImage.onload = function () {
            loader.style.display = "none";
            myImage.style.display = "block";
        }
    }
</script>
