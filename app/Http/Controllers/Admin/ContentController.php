<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Support\HomepageDefaults;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function hero()
    {
        $hero = Setting::getValue('hero', HomepageDefaults::hero());
        return view('admin.hero', compact('hero'));
    }

    public function updateHero(Request $request)
    {
        $data = $request->validate([
            'title' => 'nullable|string|max:255',
            'highlight' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'cta_primary_text' => 'nullable|string|max:255',
            'cta_primary_link' => 'nullable|string|max:255',
            'cta_secondary_text' => 'nullable|string|max:255',
            'cta_secondary_link' => 'nullable|string|max:255',
        ]);

        Setting::setValue('hero', $data);

        return back()->with('status', 'تم حفظ قسم البداية بنجاح.');
    }

    public function about()
    {
        $about = Setting::getValue('about', HomepageDefaults::about());
        return view('admin.about', compact('about'));
    }

    public function updateAbout(Request $request)
    {
        $data = $request->validate([
            'intro' => 'nullable|string',
            'vision_title' => 'nullable|string|max:255',
            'vision_text' => 'nullable|string',
            'mission_title' => 'nullable|string|max:255',
            'mission_text' => 'nullable|string',
            'values_title' => 'nullable|string|max:255',
            'values_list' => 'nullable|string',
            'features' => 'nullable|array',
            'features.*.icon' => 'nullable|string|max:255',
            'features.*.title' => 'nullable|string|max:255',
            'features.*.text' => 'nullable|string',
        ]);

        $values = array_filter(array_map('trim', explode("\n", $data['values_list'] ?? '')));
        $features = collect($data['features'] ?? [])
            ->map(function ($feature) {
                return [
                    'icon' => isset($feature['icon']) ? trim($feature['icon']) : '',
                    'title' => isset($feature['title']) ? trim($feature['title']) : '',
                    'text' => isset($feature['text']) ? trim($feature['text']) : '',
                ];
            })
            ->filter(fn ($feature) => $feature['icon'] !== '' || $feature['title'] !== '' || $feature['text'] !== '')
            ->values()
            ->all();

        Setting::setValue('about', [
            'intro' => $data['intro'] ?? '',
            'vision_title' => $data['vision_title'] ?? '',
            'vision_text' => $data['vision_text'] ?? '',
            'mission_title' => $data['mission_title'] ?? '',
            'mission_text' => $data['mission_text'] ?? '',
            'values_title' => $data['values_title'] ?? '',
            'values_list' => $values,
            'features' => $features,
        ]);

        return back()->with('status', 'تم حفظ قسم من نحن بنجاح.');
    }

    public function steps()
    {
        $steps = Setting::getValue('steps', HomepageDefaults::steps());
        return view('admin.steps', compact('steps'));
    }

    public function updateSteps(Request $request)
    {
        $data = $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'note_title' => 'nullable|string|max:255',
            'note_text' => 'nullable|string',
            'steps' => 'nullable|array',
            'steps.*.number' => 'nullable|string|max:10',
            'steps.*.text' => 'nullable|string',
        ]);

        $stepsArray = collect($data['steps'] ?? [])
            ->map(fn ($step) => [
                'number' => $step['number'] ?? '',
                'text' => $step['text'] ?? '',
            ])
            ->values()
            ->all();

        Setting::setValue('steps', [
            'title' => $data['title'] ?? '',
            'subtitle' => $data['subtitle'] ?? '',
            'note_title' => $data['note_title'] ?? '',
            'note_text' => $data['note_text'] ?? '',
            'steps' => $stepsArray,
        ]);

        return back()->with('status', 'تم حفظ قسم كيف نعمل بنجاح.');
    }

    public function services()
    {
        $services = Setting::getValue('services', HomepageDefaults::services());
        return view('admin.services', compact('services'));
    }

    public function updateServices(Request $request)
    {
        $tabs = $request->input('tabs', []);

        $normalized = [];
        foreach ($tabs as $tabId => $tabData) {
            $cards = [];
            if (!empty($tabData['cards']) && is_array($tabData['cards'])) {
                foreach ($tabData['cards'] as $cardIndex => $card) {
                    $items = [];
                    if (isset($card['items']) && is_string($card['items'])) {
                        $items = array_filter(array_map('trim', explode("\n", $card['items'])));
                    } elseif (isset($card['items']) && is_array($card['items'])) {
                        $items = array_filter(array_map('trim', $card['items']));
                    }

                    $iconPath = $card['icon_existing'] ?? $card['icon'] ?? null;
                    $iconFile = $request->file("tabs.$tabId.cards.$cardIndex.icon");
                    if ($iconFile && $iconFile->isValid()) {
                        $path = $iconFile->store('services', 'public');
                        $iconPath = $path ? ('storage/' . $path) : $iconPath;
                    }

                    $cards[] = [
                        'title' => $card['title'] ?? '',
                        'description' => $card['description'] ?? null,
                        'icon' => $iconPath ?: null,
                        'items' => $items,
                    ];
                }
            }

            $normalized[] = [
                'id' => $tabId,
                'title' => $tabData['title'] ?? '',
                'cards' => $cards,
            ];
        }

        Setting::setValue('services', ['tabs' => $normalized]);

        return back()->with('status', 'تم حفظ قسم الخدمات بنجاح.');
    }

    public function contact()
    {
        $contact = Setting::getValue('contact', HomepageDefaults::contact());
        return view('admin.contact', compact('contact'));
    }

    public function updateContact(Request $request)
    {
        $data = $request->validate([
            'phone_display' => 'nullable|string|max:255',
            'whatsapp_display' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'hours' => 'nullable|string|max:255',
            'toast' => 'nullable|string|max:255',
            'socials' => 'nullable|string',
        ]);

        $socials = array_filter(array_map('trim', explode("\n", $data['socials'] ?? ''))); // simple list
        $socials = array_map(fn ($url) => ['label' => $url, 'url' => $url], $socials);

        Setting::setValue('contact', [
            'phone_display' => $data['phone_display'] ?? '',
            'whatsapp_display' => $data['whatsapp_display'] ?? '',
            'address' => $data['address'] ?? '',
            'hours' => $data['hours'] ?? '',
            'toast' => $data['toast'] ?? '',
            'socials' => $socials,
        ]);

        return back()->with('status', 'تم حفظ قسم التواصل بنجاح.');
    }
}
