<?php

namespace App\Providers;

use App\Models\Department\Department;
use App\Models\Designation\Designation;
use App\Models\Divison\Division;
use App\Models\Driver\Driver_Info;
use App\Models\Shed\Shed_Info;
use App\Models\Vehicles\Vehicle_Capacity;
use App\Models\Vehicles\Vehicle_Info;
use App\Models\Vendors\Vendor_Info;
use App\Observers\Drivers\DriverInfoObserver;
use App\Observers\Vehicle\VehicleCapacityObserver;
use App\Observers\Vehicle\VehicleInfoObserver;
use App\Observers\Division\DivisionObserver;

use App\Observers\Department\DepartmentObserver;
use App\Observers\Designation\DesignationObserver;

use App\Observers\Sheds\ShedInfoObserver;
use App\Observers\Vendor\VendorInfoObserver;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Vehicle_Capacity::observe(VehicleCapacityObserver::class);
        Vehicle_Info::observe(VehicleInfoObserver::class);
        Driver_Info::observe(DriverInfoObserver::class);
        Division::observe(DivisionObserver::class); // Added By Alwin

        Department::observe(DepartmentObserver::class); // Added By Alwin
        Designation::observe(DesignationObserver::class); // Added By Alwin

        Shed_Info::observe(ShedInfoObserver::class); // Added By Saravana Sai
        Vendor_Info::observe(VendorInfoObserver::class); // Added By Saravana Sai

    }
}
