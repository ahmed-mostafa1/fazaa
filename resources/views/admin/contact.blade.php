@extends('admin.layout')

@section('content')
    <div class="card">
        <h2>قسم التواصل</h2>
        <p class="muted">تعديل بيانات الاتصال ورسائل التنبيه الخاصة بالنموذج.</p>
        <form class="stack" action="{{ route('admin.contact.update') }}" method="POST">
            @csrf
            <div class="grid">
                <div>
                    <label>رقم الجوال الظاهر</label>
                    <input type="text" name="phone_display" value="{{ old('phone_display', $contact['phone_display'] ?? '') }}" placeholder="+966 50 123 4567">
                </div>
                <div>
                    <label>رقم واتساب</label>
                    <input type="text" name="whatsapp_display" value="{{ old('whatsapp_display', $contact['whatsapp_display'] ?? '') }}" placeholder="+966 50 123 4567">
                </div>
                <div>
                    <label>العنوان</label>
                    <input type="text" name="address" value="{{ old('address', $contact['address'] ?? '') }}" placeholder="الرياض، حي العليا، شارع التحلية">
                </div>
            </div>
            <div class="grid">
                <div>
                    <label><input type="checkbox" name="show_phone" value="1" @checked(old('show_phone', $contact['show_phone'] ?? true))> Show phone</label>
                </div>
                <div>
                    <label><input type="checkbox" name="show_whatsapp" value="1" @checked(old('show_whatsapp', $contact['show_whatsapp'] ?? true))> Show WhatsApp</label>
                </div>
                <div>
                    <label><input type="checkbox" name="show_address" value="1" @checked(old('show_address', $contact['show_address'] ?? true))> Show address</label>
                </div>
                <div>
                    <label><input type="checkbox" name="show_hours" value="1" @checked(old('show_hours', $contact['show_hours'] ?? true))> Show hours</label>
                </div>
            </div>
            <div class="grid">
                <div>
                    <label>ساعات العمل</label>
                    <input type="text" name="hours" value="{{ old('hours', $contact['hours'] ?? '') }}" placeholder="السبت - الخميس: 9 ص - 9 م">
                </div>
                <div>
                    <label>نص التنبيه (التوست)</label>
                    <input type="text" name="toast" value="{{ old('toast', $contact['toast'] ?? '') }}" placeholder="تم استلام طلبك بنجاح! سنتواصل معك قريباً.">
                </div>
            </div>
            <div>
                <label>القنوات الاجتماعية</label>
                <textarea name="socials" placeholder="ضع كل رابط في سطر منفصل (تويتر، انستغرام، سناب، ...).">{{ old('socials', collect($contact['socials'] ?? [])->pluck('url')->implode("\n")) }}</textarea>
            </div>
            <div class="actions">
                <button class="btn btn-secondary" type="reset">تفريغ الحقول</button>
                <button class="btn btn-primary" type="submit">حفظ</button>
            </div>
        </form>
    </div>
@endsection
