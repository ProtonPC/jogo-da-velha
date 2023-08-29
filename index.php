<?php
require 'vendor/autoload.php';
session_start();

use App\Controllers\GameController;

$gameController = new GameController();

if(isset($_SESSION['gameController'])) {
    $gameControllerSerialized = $_SESSION['gameController'];
    $gameController = unserialize($gameControllerSerialized);
} else {
    $gameControllerSerialized = serialize($gameController);
    $_SESSION['gameController'] = $gameControllerSerialized;
}

$position = $_REQUEST['x'];
if(!$gameController->slots[$position]?->isEmpty()) {
    echo $gameController->slots[$position]?->setIcon($gameController->getPlayer()?->getIcon());
}

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
            <h1 class="text-5xl text-center">Jogo da Velha</h1>
            <div class="flex justify-center">
                <div class="p-5 m-5">
                    <div class="flex">
                        <a href="?x=0">
                            <div class="border-solid border-2 border-indigo-950 h-32 w-32 border-t-0 border-l-0">
                                <div class="flex justify-center items-center bg-blue-600 text-white h-full w-full">
                                    <div class="text-5xl">
                                        <?php echo $gameController->slots[0]->getIcon() ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="?x=1">
                            <div class="border-solid border-2 border-indigo-950 h-32 w-32 border-t-0">
                                <div class="flex justify-center items-center bg-blue-600 text-white h-full w-full">
                                    <div class="text-5xl">
                                        <?php echo $gameController->slots[1]->getIcon() ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="?x=2">
                            <div class="border-solid border-2 border-indigo-950 h-32 w-32 border-t-0 border-r-0">
                                <div class="flex justify-center items-center bg-blue-600 text-white h-full w-full">
                                    <div class="text-5xl">
                                        <?php echo $gameController->slots[2]->getIcon() ?>
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
                                        <?php echo $gameController->slots[3]->getIcon() ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="?x=4">
                            <div class="border-solid border-2 border-indigo-950 h-32 w-32">
                                <div class="flex justify-center items-center bg-blue-600 text-white h-full w-full">
                                    <div class="text-5xl">
                                        <?php echo $gameController->slots[4]->getIcon() ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="?x=5">
                            <div class="border-solid border-2 border-indigo-950 h-32 w-32 border-r-0">
                                <div class="flex justify-center items-center bg-blue-600 text-white h-full w-full">
                                    <div class="text-5xl">
                                        <?php echo $gameController->slots[5]->getIcon() ?>
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
                                        <?php echo $gameController->slots[6]->getIcon() ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="?x=7">
                            <div class="border-solid border-2 border-indigo-950 h-32 w-32 border-b-0">
                                <div class="flex justify-center items-center bg-blue-600 text-white h-full w-full">
                                    <div class="text-5xl">
                                        <?php echo $gameController->slots[7]->getIcon() ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="?x=8">
                            <div class="border-solid border-2 border-indigo-950 h-32 w-32 border-b-0 border-r-0">
                                <div class="flex justify-center items-center bg-blue-600 text-white h-full w-full">
                                    <div class="text-5xl">
                                        <?php echo $gameController->slots[8]->getIcon() ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>