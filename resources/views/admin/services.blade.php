@extends('admin.layout')

@section('content')
    <div class="card">
        <h2>قسم الخدمات</h2>
        <p class="muted">أضف بطاقات جديدة لكل تبويب. يمكنك تعديل العنوان، وصف قصير، الأيقونة، وقائمة النقاط داخل كل بطاقة.</p>
        <form action="{{ route('admin.services.update') }}" method="POST" enctype="multipart/form-data" id="servicesBoard" class="stack">
            @csrf
            @foreach ($services['tabs'] ?? [] as $tab)
                @php $cards = $tab['cards'] ?? []; @endphp
                <div class="card" style="background: rgba(255,255,255,0.02); border-color: var(--border);">
                    <div class="inline" style="justify-content: space-between; align-items: center;">
                        <div class="inline">
                            <h3 style="margin: 0;">تبويب: {{ $tab['title'] ?? '' }}</h3>
                            <span class="badge">تبويب</span>
                        </div>
                        <button class="btn btn-primary" type="button" data-add-card="{{ $tab['id'] }}">إضافة بطاقة جديدة</button>
                    </div>
                    <p class="small">ستظهر البطاقات داخل هذا التبويب. استخدم زر الإضافة لزيادة عددها.</p>
                    <div class="stack" data-cards="{{ $tab['id'] }}">
                        <div>
                            <label>عنوان التبويب</label>
                            <input type="text" name="tabs[{{ $tab['id'] }}][title]" value="{{ old('tabs.' . $tab['id'] . '.title', $tab['title'] ?? '') }}">
                        </div>
                        @foreach ($cards as $index => $card)
                            <div class="service-card-form">
                                <label>عنوان البطاقة</label>
                                <input type="text" name="tabs[{{ $tab['id'] }}][cards][{{ $index }}][title]" value="{{ old('tabs.' . $tab['id'] . '.cards.' . $index . '.title', $card['title'] ?? '') }}" placeholder="مثال: خدمة جديدة">
                                <label>وصف مختصر</label>
                                <textarea name="tabs[{{ $tab['id'] }}][cards][{{ $index }}][description]" placeholder="نص قصير يشرح الخدمة">{{ old('tabs.' . $tab['id'] . '.cards.' . $index . '.description', $card['description'] ?? '') }}</textarea>
                                <label>رابط الأيقونة (اختياري)</label>
                                <input type="file" name="tabs[{{ $tab['id'] }}][cards][{{ $index }}][icon]" accept="image/*">
                                <input type="hidden" name="tabs[{{ $tab['id'] }}][cards][{{ $index }}][icon_existing]" value="{{ old('tabs.' . $tab['id'] . '.cards.' . $index . '.icon_existing', $card['icon'] ?? '') }}">
                                @if (!empty($card['icon']))
                                    <small class="muted">Current: {{ $card['icon'] }}</small>
                                @endif
                                <label>قائمة النقاط (سطر لكل نقطة)</label>
                                <textarea name="tabs[{{ $tab['id'] }}][cards][{{ $index }}][items]" placeholder="أدخل عناصر القائمة هنا">{{ old('tabs.' . $tab['id'] . '.cards.' . $index . '.items', implode("\n", $card['items'] ?? [])) }}</textarea>
                                <div class="actions">
                                    <button class="btn btn-secondary" type="button" data-remove-card>حذف البطاقة</button>
                                </div>
                                <hr class="divider">
                            </div>
                        @endforeach
                        @if (empty($cards))
                            <div class="service-card-form">
                                <label>عنوان البطاقة</label>
                                <input type="text" name="tabs[{{ $tab['id'] }}][cards][0][title]" placeholder="مثال: خدمة جديدة">
                                <label>وصف مختصر</label>
                                <textarea name="tabs[{{ $tab['id'] }}][cards][0][description]" placeholder="نص قصير يشرح الخدمة"></textarea>
                                <label>رابط الأيقونة (اختياري)</label>
                                <input type="file" name="tabs[{{ $tab['id'] }}][cards][0][icon]" accept="image/*">
                                <label>قائمة النقاط (سطر لكل نقطة)</label>
                                <textarea name="tabs[{{ $tab['id'] }}][cards][0][items]" placeholder="أدخل عناصر القائمة هنا"></textarea>
                                <div class="actions">
                                    <button class="btn btn-secondary" type="button" data-remove-card>حذف البطاقة</button>
                                </div>
                                <hr class="divider">
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach

            <div class="actions">
                <button class="btn btn-primary" type="submit">حفظ</button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const board = document.getElementById('servicesBoard');
            if (!board) return;

            const createCard = (tabId, index) => {
                return `
                    <div class="service-card-form">
                        <label>عنوان البطاقة</label>
                        <input type="text" name="tabs[${tabId}][cards][${index}][title]" placeholder="مثال: خدمة جديدة">
                        <label>وصف مختصر</label>
                        <textarea name="tabs[${tabId}][cards][${index}][description]" placeholder="نص قصير يشرح الخدمة"></textarea>
                        <label>رابط الأيقونة (اختياري)</label>
                        <input type="file" name="tabs[${tabId}][cards][${index}][icon]" accept="image/*">
                        <label>قائمة النقاط (سطر لكل نقطة)</label>
                        <textarea name="tabs[${tabId}][cards][${index}][items]" placeholder="أدخل عناصر القائمة هنا"></textarea>
                        <div class="actions">
                            <button class="btn btn-secondary" type="button" data-remove-card>حذف البطاقة</button>
                        </div>
                        <hr class="divider">
                    </div>
                `;
            };

            board.querySelectorAll('[data-add-card]').forEach(button => {
                button.addEventListener('click', () => {
                    const targetId = button.getAttribute('data-add-card');
                    const container = board.querySelector(`[data-cards="${targetId}"]`);
                    if (!container) return;
                    const count = container.querySelectorAll('.service-card-form').length;
                    container.insertAdjacentHTML('beforeend', createCard(targetId, count));
                });
            });

            board.addEventListener('click', (event) => {
                const target = event.target;
                if (target.matches('[data-remove-card]')) {
                    const block = target.closest('.service-card-form');
                    if (block && block.parentElement.children.length > 1) {
                        block.remove();
                    }
                }
            });
        });
    </script>
@endsection
