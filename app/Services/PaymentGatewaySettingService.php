<?php

namespace App\Services;

use App\Models\PaymentGatewaySetting;
use Cache;

class PaymentGatewaySettingService {

    function getSettings() {
        return Cache::rememberForever('gatewaySettings', function(){
            return PaymentGatewaySetting::pluck('value', 'key')->toArray(); // ['key' => 'value']
        });
    }

    function setGlobalSettings() : void {
        $settings = $this->getSettings();
        config()->set('gatewaySettings', $settings);
    }

    function clearCachedSettings() : void {
        Cache::forget('gatewaySettings');
    }

}
