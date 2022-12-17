<?php

namespace App\Nova\Dashboards;

use App\Nova\Metrics\CountSubject;
use App\Nova\Metrics\CountUsers;
use App\Nova\Metrics\SubjectResolved;
use App\Nova\Metrics\UsersPerDay;
use Laravel\Nova\Dashboards\Main as Dashboard;

class Main extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
//            new Help,
            new CountSubject,
            new SubjectResolved,
            new CountUsers,
            new UsersPerDay,
        ];
    }
    public function name(){
        return 'Dashboard';
    }

}
