<?php declare(strict_types=1);

namespace BowlingAlley\Application\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * @codeCoverageIgnore
 */
class LaneServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the service provider.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'BowlingAlley\Domain\Repositories\Lane\LaneRepository',
            'BowlingAlley\Infrastructure\Repositories\Lane\LaneRepositoryEloquentRepository'
        );

        $this->app->bind(
            'BowlingAlley\Domain\Repositories\Lane\PinsetterMaintenanceScheduleRepository',
            'BowlingAlley\Infrastructure\Repositories\Lane\PinsetterMaintenanceScheduleEloquentRepository'
        );
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'BowlingAlley\Domain\Repositories\Lane\LaneRepository',
            'BowlingAlley\Domain\Repositories\Janitor\PinsetterMaintenanceScheduleRepository',
        ];
    }
}