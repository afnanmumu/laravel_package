// packages/vendor-name/math/src/MathServiceProvider.php

namespace VendorName\Math;

use Illuminate\Support\ServiceProvider;

class MathServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('math', function () {
            return new Math;
        });
    }

    public function boot()
    {
        //
    }
}
