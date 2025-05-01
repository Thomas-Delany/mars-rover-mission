<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mars Rover Mission</title>
    <!-- Bootstrap CDN for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="container bg-warning">
    <h1 class="p-5 text-center fw-bold">Mars Rover Mission</h1>
    <div class="container mt-5">

        <div class="row d-flex justify-content-center">

            <!-- Column 1: The Grid -->
            <div class="col-md-4 pb-5 text-center">
                <!-- North -->
                <div class="text-uppercase fw-bold mb-2">N</div>

                <!-- Row containing West + Grid + East -->
                <div class="row">
                    <!-- West -->
                    <div class="col-auto d-flex align-items-center justify-content-center">
                        <div class="text-uppercase fw-bold">W</div>
                    </div>

                    <!-- Grid -->
                    <div class="col p-0" id="grid">
                        @for ($y = 9; $y >= 0; $y--)
                        <div class="row g-0">
                            @for ($x = 0; $x < 10; $x++)
                                @php
                                $isObstacle=($x===3 && $y===4) ||
                                ($x===7 && $y===8) ||
                                ($x===1 && $y===7);
                                $isRover=($x===2 && $y===2);
                                @endphp
                                <div class="col p-0 border cell ratio ratio-1x1 
                            {{ $isObstacle ? 'bg-dark' : '' }} 
                            {{ $isRover ? 'bg-primary' : '' }}"
                                data-x="{{ $x }}" data-y="{{ $y }}">
                                {{-- {{ $x }},{{ $y }} --}}
                        </div>
                        @endfor
                    </div>
                    @endfor
                </div>

                <!-- East -->
                <div class="col-auto d-flex align-items-center justify-content-center">
                    <div class="text-uppercase fw-bold">E</div>
                </div>
            </div>

            <!-- South -->
            <div class="text-uppercase fw-bold mt-2">S</div>
        </div>


        <div class="col-md-4">
            <h4 class="mb-3 text-center fs-2">Controls</h4>
            <button id="forwardBtn" class="btn btn-outline-success w-100 mb-4 border-2 fw-bold fs-5">Move Forward</button>
            <button id="leftBtn" class="btn btn-outline-danger w-100 mb-4 border-2 fw-bold fs-5">Turn Left</button>
            <button id="rightBtn" class="btn btn-outline-primary w-100 mb-4 border-2 fw-bold fs-5">Turn Right</button>
            <hr class="border-2 opacity-50">
            <div class="d-flex align-items-center pt-3 mb-3">
                <div class="bg-dark text-white p-3 rounded me-3"></div>
                <p class="mb-0">= Obstacle</p>
            </div>
            <div class="d-flex align-items-center mb-3 pb-5">
                <div class="bg-primary text-white p-3 rounded me-3"></div>
                <p class="mb-0">= Rover</p>
            </div>
        </div>
    </div>
    </div>
</body>


</html>