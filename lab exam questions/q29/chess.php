<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Board</title>

    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        .chess-board {
            display: grid;
            grid-template-columns: repeat(8, 1fr);
            grid-template-rows: repeat(8, 1fr);
            width: 80vmin;
            height: 80vmin;
        }

        .square {
            width: 100%;
            height: 100%;
            box-sizing: border-box;
            border: 1px solid #333;
        }

        .white {
            background-color: #fff;
        }

        .black {
            background-color: #000;
        }
    </style>
</head>
<body>

<div class="chess-board">
    <?php
    $isWhite = true;
    for ($row = 1; $row <= 8; $row++) {
        for ($col = 1; $col <= 8; $col++) {
            $class = $isWhite ? 'white' : 'black';
            echo '<div class="square ' . $class . '"></div>';
            $isWhite = !$isWhite;
        }
        $isWhite = !$isWhite; // Switch color for the next row
    }
    ?>
</div>

</body>
</html>
