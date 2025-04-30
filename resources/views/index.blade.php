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
        <div class="row">
            <!-- Column 1: The Grid -->
            <div class="col-md-8">
                @for ($y = 9; $y >= 0; $y--) {{-- Y-axis: top to bottom --}}
                <div class="d-flex">
                    @for ($x = 0; $x < 10; $x++) {{-- X-axis: left to right --}}
                        @php
                        $highlightedSquare=($x===3 && $y===4);
                        @endphp
                        <div
                        class="border {{ $highlightedSquare ? 'bg-dark' : '' }} cell"
                        style="width: 40px; height: 40px;"
                        data-x="{{ $x }}"
                        data-y="{{ $y }}">
                </div>
                @endfor
            </div>
            @endfor
        </div>

        <!-- Column 2: Controls -->
        <div class="col-md-4">
            <h4 class="mb-3">Controls</h4>
            <button class="btn btn-primary w-100 mb-2">Move Forward</button>
            <button class="btn btn-secondary w-100 mb-2">Turn Left</button>
            <button class="btn btn-secondary w-100 mb-2">Turn Right</button>
        </div>
    </div>
    </div>
</body>


</html>