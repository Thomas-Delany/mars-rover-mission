<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mars Rover Mission</title>
    <!-- Bootstrap CDN for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container bg-warning">
    <h1 class="p-5 text-center fw-bold">Mars Rover Mission</h1>

    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <!-- Column 1: The Grid -->
            <div class="col-md-4 pb-5">
                @for ($y = 9; $y >= 0; $y--)
                <div class="row g-0"> {{-- no gap between cols --}}
                    @for ($x = 0; $x < 10; $x++)
                        @php
                        $highlightedSquare=($x===3 && $y===4);
                        @endphp
                        <div class="col p-0 border {{ $highlightedSquare ? 'bg-dark' : '' }} cell ratio ratio-1x1"
                        data-x="{{ $x }}" data-y="{{ $y }}">
                        {{-- Optional: show coordinates --}}
                        {{-- {{ $x }},{{ $y }} --}}
                </div>
                @endfor
            </div>
            @endfor
        </div>

        <div class="col-md-4">
            <h4 class="mb-3 text-center fs-2">Controls</h4>
            <button class="btn btn-primary w-100 mb-4">Move Forward</button>
            <button class="btn btn-secondary w-100 mb-4">Turn Left</button>
            <button class="btn btn-secondary w-100 mb-4">Turn Right</button>
        </div>
    </div>
    </div>
</body>


</html>