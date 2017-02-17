<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/RepeatCounter.php';

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        $year = date('Y');
        return $app['twig']->render('index.html.twig', array('year' => $year));
    });

    $app->get('/count-results', function() use ($app) {
        $findAMatch = new RepeatCounter;
        if ($_GET) {
          $results = $findAMatch->countRepeats($_GET['search-word'], $_GET['search-phrase']);
        }
        return $app['twig']->render('count-results.html.twig', array('results' => $results));
    });

    return $app;
?>
