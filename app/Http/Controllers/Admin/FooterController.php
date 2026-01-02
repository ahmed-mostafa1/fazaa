<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\SocialLink;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        // Footer settings (description, copy, etc.)
        $footerSettings = Setting::getValue('footer', [
            'description' => 'خدمات حكومية متخصصة نهدف لتبسيط الإجراءات وتوفير الوقت والمجهود على عملائنا الكرام.',
            'copyright_text' => 'جميع الحقوق محفوظة &copy; 2023 مكتب فزعة للخدمات الحكومية',
            'developer_text' => 'تطوير وتنفيذ نظام سوفت',
            'developer_link' => 'https://wa.me/201097155272',
        ]);

        $socialLinks = SocialLink::all();

        return view('admin.footer.index', compact('footerSettings', 'socialLinks'));
    }

    public function updateSettings(Request $request)
    {
        $data = $request->validate([
            'description' => 'nullable|string',
            'copyright_text' => 'nullable|string',
            'developer_text' => 'nullable|string',
            'developer_link' => 'nullable|string',
        ]);

        Setting::setValue('footer', $data);

        return back()->with('status', 'تم حفظ إعدادات الفوتر بنجاح.');
    }

    // Social Links CRUD

    public function storeSocial(Request $request)
    {
        $data = $request->validate([
            'platform' => 'nullable|string|max:255',
            'icon' => 'required|string|max:255',
            'url' => 'required|string',
        ]);

        SocialLink::create($data);

        return back()->with('status', 'تم إضافة رابط الاجتماعي بنجاح.');
    }

    public function destroySocial(SocialLink $socialLink)
    {
        $socialLink->delete();
        return back()->with('status', 'تم حذف الرابط بنجاح.');
    }
}
