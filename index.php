<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

require 'vendor/autoload.php';

session_start();

use App\Controllers\GameController;
use App\Controllers\Slot\NullSlot;

$gameController = new GameController();
$gameController->play($gameController->getPlayer(), new NullSlot());
$gameController->changePlayer();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Jogo da Velha</title>
</head>
<body>
    <div class="flex justify-center h-screen">
        <div class="grid content-center">
            <a class="text-5xl text-center" href="?reset=1">Reset Game</a>
            <h1 class="text-5xl text-center">Jogo da Velha</h1>
            <h1 class="text-2xl text-center <?php echo isset($_SESSION['winner']) ? 'hidden' : ''; ?>">
                <?php 
                    echo 'Jogador atual: '. $gameController->getPlayer()?->getName() . '<br>'; 
                    echo 'Ícone: ' . $gameController->getPlayer()?->getIcon() . '<br>'; 
                ?>
            </h1>
            <div class="flex justify-center <?php echo isset($_SESSION['winner']) ? 'hidden' : ''; ?>">
                <div class="p-5 m-5">
                    <div class="flex">
                        <a href="?x=0">
                            <div class="border-solid border-2 border-indigo-950 h-32 w-32 border-t-0 border-l-0">
                                <div class="flex justify-center items-center bg-blue-600 text-white h-full w-full">
                                    <div class="text-5xl">
                                        <?php 
                                            if($_SESSION['slots'][0]) echo $_SESSION['slots'][0];
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="?x=1">
                            <div class="border-solid border-2 border-indigo-950 h-32 w-32 border-t-0">
                                <div class="flex justify-center items-center bg-blue-600 text-white h-full w-full">
                                    <div class="text-5xl">
                                        <?php 
                                            if($_SESSION['slots'][1]) echo $_SESSION['slots'][1];
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="?x=2">
                            <div class="border-solid border-2 border-indigo-950 h-32 w-32 border-t-0 border-r-0">
                                <div class="flex justify-center items-center bg-blue-600 text-white h-full w-full">
                                    <div class="text-5xl">
                                        <?php 
                                            if($_SESSION['slots'][2]) echo $_SESSION['slots'][2];
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="flex">
                        <a href="?x=3">
                            <div class="border-solid border-2 border-indigo-950 h-32 w-32 border-l-0">
                                <div class="flex justify-center items-center bg-blue-600 text-white h-full w-full">
                                    <div class="text-5xl">
                                        <?php 
                                            if($_SESSION['slots'][3]) echo $_SESSION['slots'][3];
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="?x=4">
                            <div class="border-solid border-2 border-indigo-950 h-32 w-32">
                                <div class="flex justify-center items-center bg-blue-600 text-white h-full w-full">
                                    <div class="text-5xl">
                                        <?php 
                                            if($_SESSION['slots'][4]) echo $_SESSION['slots'][4];
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="?x=5">
                            <div class="border-solid border-2 border-indigo-950 h-32 w-32 border-r-0">
                                <div class="flex justify-center items-center bg-blue-600 text-white h-full w-full">
                                    <div class="text-5xl">
                                        <?php 
                                            if($_SESSION['slots'][5]) echo $_SESSION['slots'][5];
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="flex">
                        <a href="?x=6">
                            <div class="border-solid border-2 border-indigo-950 h-32 w-32 border-b-0 border-l-0">
                                <div class="flex justify-center items-center bg-blue-600 text-white h-full w-full">
                                    <div class="text-5xl">
                                        <?php 
                                            if($_SESSION['slots'][6]) echo $_SESSION['slots'][6];
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="?x=7">
                            <div class="border-solid border-2 border-indigo-950 h-32 w-32 border-b-0">
                                <div class="flex justify-center items-center bg-blue-600 text-white h-full w-full">
                                    <div class="text-5xl">
                                        <?php 
                                            if($_SESSION['slots'][7]) echo $_SESSION['slots'][7];
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="?x=8">
                            <div class="border-solid border-2 border-indigo-950 h-32 w-32 border-b-0 border-r-0">
                                <div class="flex justify-center items-center bg-blue-600 text-white h-full w-full">
                                    <div class="text-5xl">
                                        <?php 
                                            if($_SESSION['slots'][8]) echo $_SESSION['slots'][8];
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex justify-center <?php echo !isset($_SESSION['winner']) ? 'hidden' : ''; ?>">
                <div class="p-5 m-5">
                    <?php 
                        echo $gameController->getSpecificPlayer($_SESSION['winner'])->getName();
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>