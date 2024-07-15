<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Services\SettingsService;
use App\Traits\FileUploadTrait;
use Cache;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SettingController extends Controller
{
    use FileUploadTrait;

    function index(): View
    {
        return view('admin.setting.index');
    }

    function UpdateGeneralSetting(Request $request)
    {
        $validatedData = $request->validate([
            'site_name' => ['required', 'max:255'],
            'site_email' => ['nullable', 'max:255'],
            'site_phone' => ['nullable', 'max:255'],
            'site_default_currency' => ['required', 'max:4'],
            'site_currency_icon' => ['required', 'max:4'],
            'site_currency_icon_position' => ['required', 'max:255'],
        ]);

        foreach ($validatedData as $key => $value) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        $settingsService = app(SettingsService::class);
        $settingsService->clearCachedSettings();

        toastr()->success('Updated Successfully!');

        return redirect()->back();
    }

    function UpdatePusherSetting(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'pusher_app_id' => ['required'],
            'pusher_key' => ['required'],
            'pusher_secret' => ['required'],
            'pusher_cluster' => ['required'],
        ]);

        foreach ($validatedData as $key => $value) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        $settingsService = app(SettingsService::class);
        $settingsService->clearCachedSettings();

        toastr()->success('Updated Successfully!');

        return redirect()->back();
    }

    function UpdateMailSetting(Request $request)
    {
        $validatedData = $request->validate([
            'mail_driver' => ['required'],
            'mail_host' => ['required'],
            'mail_port' => ['required'],
            'mail_username' => ['required'],
            'mail_password' => ['required'],
            'mail_encryption' => ['required'],
            'mail_from_address' => ['required'],
            'mail_receive_address' => ['required'],
        ]);

        foreach ($validatedData as $key => $value) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        $settingsService = app(SettingsService::class);
        $settingsService->clearCachedSettings();
        Cache::forget('mail_settings');

        toastr()->success('Updated Successfully!');

        return redirect()->back();
    }

    function UpdateLogoSetting(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'logo' => ['nullable', 'image', 'max:1000'],
            'footer_logo' => ['nullable', 'image', 'max:1000'],
            'favicon' => ['nullable', 'image', 'max:1000'],
            'breadcrumb' => ['nullable', 'image', 'max:1000'],
        ]);

        foreach ($validatedData as $key => $value) {

            $imagePatch = $this->uploadImage($request, $key);
            if (!empty($imagePatch)) {
                $oldPath = config('settings.' . $key);
                $this->removeImage($oldPath);

                Setting::updateOrCreate(
                    ['key' => $key],
                    ['value' => $imagePatch]
                );
            }
        }

        $settingsService = app(SettingsService::class);
        $settingsService->clearCachedSettings();
        Cache::forget('mail_settings');

        toastr()->success('Updated Successfully!');

        return redirect()->back();
    }

    function UpdateAppearanceSetting(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'site_color' => ['required']
        ]);

        foreach ($validatedData as $key => $value) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        $settingsService = app(SettingsService::class);
        $settingsService->clearCachedSettings();
        Cache::forget('mail_settings');

        toastr()->success('Updated Successfully!');

        return redirect()->back();
    }

    function UpdateSeoSetting(Request $request) : RedirectResponse {
        $validatedData = $request->validate([
            'seo_title' => ['required', 'max:255'],
            'seo_description' => ['nullable', 'max:600'],
            'seo_keywords' => ['nullable']
        ]);

        foreach ($validatedData as $key => $value) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        $settingsService = app(SettingsService::class);
        $settingsService->clearCachedSettings();
        Cache::forget('mail_settings');

        toastr()->success('Updated Successfully!');

        return redirect()->back();
    }
}
