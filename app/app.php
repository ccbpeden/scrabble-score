<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Scrabble.php';

    use Symfony\Component\Debug\Debug;
    Debug::enable();
    use Symfony\Component\Debug\ErrorHandler;
    ErrorHandler::register();
    use Symfony\Component\Debug\ExceptionHandler;
    ExceptionHandler::register();

    $app = new Silex\Application();
    $app['debug']=true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'
    ));

    $app->get('/', function() use ($app) {
        $new_scrabble = New Scrabble;
        $new_scrabble->scoreCalculator("cheese");

        return $app['twig']->render('board.html.twig');

    });

    return $app;
?>
