<?php

namespace Symfony\Component\Debug\Tests\Fixtures;

class ExtendedFinalMethod extends FinalMethod
{
<<<<<<< HEAD
    use FinalMethod2Trait;

=======
>>>>>>> 5df037cc04d5db9f621306f5c9c55a743886da7b
    /**
     * {@inheritdoc}
     */
    public function finalMethod()
    {
    }

    public function anotherMethod()
    {
    }
}
