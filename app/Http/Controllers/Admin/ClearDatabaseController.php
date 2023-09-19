<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\View\View;

class ClearDatabaseController extends Controller
{
    function index() : View {
        return view('admin.clear-database.index');
    }

    function clearDB() {

        try{
            // wipe database
            Artisan::call('migrate:fresh');
            // Seed default data
            Artisan::call('db:seed', ['--class' => 'UserSeeder']);
            Artisan::call('db:seed', ['--class' => 'SettingSeeder']);
            Artisan::call('db:seed', ['--class' => 'PaymentGatewaySettingSeeder']);
            Artisan::call('db:seed', ['--class' => 'SectionTitleSeeder']);
            Artisan::call('db:seed', ['--class' => 'MenuBuilderSeeder']);

            return response(['status' => 'success', 'message' => 'Database wiped successfully!']);


        }catch(\Exception $e){
            throw $e;
        }
    }
}
