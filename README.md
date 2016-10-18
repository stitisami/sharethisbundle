Using sharethisBundle
===================

Welcome to sharethisBundle - a Symfony bundle to make share This buttons

Installation
------------

Step 1: Download the Bundle
~~~~~~~~~~~~~~~~~~~~~~~~~~~

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:


    $ composer require stiti/sharethisbundle 1.0.x-dev

Step 2: Enable the Bundle
~~~~~~~~~~~~~~~~~~~~~~~~~

Then, enable the bundle by adding the following line in the ````app/AppKernel.php````
file of your project:

.. code-block:: php

    <?php
    // app/AppKernel.php

    // ...
    class AppKernel extends Kernel
    {
        public function registerBundles()
        {
            $bundles = array(
                // ...

                new SharethisBundle\SharethisBundle(),
            );

            // ...
        }

        // ...
    }

Step 3: Configure the bundle

_sharethis-api: http://tools.sharethis.com/get-sharing-tools/#

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
.. code-block:: yaml

    # app/config/config.yml
    sharethis:
        publisher : #Your api key
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Usage

In your template twig insert this code

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
{{ render(controller('SharethisBundle:Share:share')) }}
