<?php

namespace App\Services;

use App\Models\Setting;
use Cache;

class SettingsService {

    function getSettings() {
        return Cache::rememberForever('settings', function(){
            return Setting::pluck('value', 'key')->toArray(); // ['key' => 'value']
        });
    }

    function setGlobalSettings() {
        $settings = $this->getSettings();
        config()->set('settings', $settings);
    }

    function clearCachedSettings() {
        Cache::forget('settings');
    }

}
