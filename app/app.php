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

        return $app['twig']->render('board.html.twig');

    });

    $app->post('/output', function() use ($app) {
        $new_scrabble = New Scrabble;
        $output_score = $new_scrabble->scoreCalculator($_POST['input_string']);

        return $app['twig']->render('output.html.twig', array("score" => $output_score, "string"=>$_POST['input_string']));
    });

    return $app;
?>
