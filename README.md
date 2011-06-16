This Symfony2 Bundle adds the possibility to render strings instead of files with the Symfony2 native Twig templating engine.

<<<<<<< HEAD
    git remote add upstream https://github.com/LaKrue/TwigstringBundle.git

1. install on your project:

    git submodule add git://github.com/LaKrue/TwigstringBundle.git src/LK/TwigstringBundle

2. set configuration on config.yml (as top level entry):

    lk_twigstring: ~
=======
    git remote add upstream https://github.com/LaKrue/RenderStringBundle.git

1. install on your project:

    git submodule add git://github.com/LaKrue/RenderStringBundle.git src/LaKrue/RenderStringBundle

2. set configuration on config.yml (as top level entry):

    renderstring:
>>>>>>> f48d57b... fixed README.md

3. set autoload.php

    $loader->registerNamespaces(array(
         //...//
<<<<<<< HEAD
         'LK'          => __DIR__.'/../src',
=======
         'LaKrue'          => __DIR__.'/../src',
>>>>>>> f48d57b... fixed README.md
         //...//
    ));

4. set AppKernel.php

    $bundles = array(
        //...//
<<<<<<< HEAD
        new LK\TwigtringBundle\LKTwigstringBundle(),
        //...//
    );

5. use LK/TwigstringBundle:
=======
        new LaKrue\RenderStringBundle\LaKrueRenderStringBundle(),
        //...//
    );

5. use RenderStringBundle:
>>>>>>> f48d57b... fixed README.md

    // set example parameter
    $vars = array('var'=>'x');

    // get renderstring service
<<<<<<< HEAD
    $tpl_engine = $this->get('twigstring');
=======
    $tpl_engine = $this->get('renderstring');
>>>>>>> f48d57b... fixed README.md

    // render example string
    $vars['test'] = 'u ' . $tpl_engine->render('v {{ var }} {% if var is defined %} y {% endif %} z{% for i in 1..5 %} {{ i }}{% endfor %}', $vars);


Authors:

LarsK
cordoval
