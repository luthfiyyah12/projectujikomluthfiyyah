<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container-fluid">
        <h5 class="font-weight-bold">More like this</h5>
        <div class="row">
            <div class="card-columns">
                @foreach ($images as $image)
                    <div class="card card-pin">
                        <img class="card-img" src="{{ $image['src'] }}" alt="Card image" data-image="{{ $image['src'] }}" data-title="{{ $image['title'] }}">
                        <div class="overlay">
                            <h2 class="card-title title">{{ $image['title'] }}</h2>
                            <div class="more">
                                <a href="javascript:void(0);" class="more-btn">
                                    <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="imageModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImage">
        <div id="modalCaption"></div>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
