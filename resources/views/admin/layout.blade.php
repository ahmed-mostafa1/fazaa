<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم - فزعة</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #0f172a;
            --panel: #1e293b;
            --muted: #cbd5e1;
            --accent: #22c55e;
            --accent-2: #38bdf8;
            --border: rgba(255,255,255,0.08);
        }
        * { box-sizing: border-box; font-family: 'Cairo', system-ui, -apple-system, sans-serif; }
        body { margin: 0; background: var(--bg); color: #e2e8f0; }
        header { padding: 18px 24px; border-bottom: 1px solid var(--border); display: flex; justify-content: space-between; align-items: center; }
        header h1 { margin: 0; font-size: 1.2rem; letter-spacing: 0.5px; }
        nav { display: flex; gap: 10px; flex-wrap: wrap; }
        nav a { text-decoration: none; padding: 10px 14px; border-radius: 10px; color: #e2e8f0; background: rgba(255,255,255,0.04); border: 1px solid var(--border); transition: all 150ms ease; }
        nav a:hover, nav a.active { border-color: var(--accent-2); color: #fff; box-shadow: 0 10px 25px rgba(56, 189, 248, 0.18); }
        main { padding: 28px 24px 48px; max-width: 1100px; margin: 0 auto; }
        .card { background: var(--panel); border: 1px solid var(--border); border-radius: 14px; padding: 22px; margin-bottom: 20px; box-shadow: 0 20px 50px rgba(0,0,0,0.25); }
        .card h2 { margin-top: 0; margin-bottom: 14px; font-size: 1.1rem; }
        .muted { color: var(--muted); font-size: 0.95rem; }
        label { display: block; margin-bottom: 6px; font-weight: 700; }
        input, textarea, select { width: 100%; padding: 12px 14px; border-radius: 10px; border: 1px solid var(--border); background: rgba(255,255,255,0.03); color: #fff; }
        textarea { min-height: 120px; resize: vertical; }
        .grid { display: grid; gap: 14px; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); }
        .actions { display: flex; gap: 10px; justify-content: flex-end; margin-top: 12px; }
        .btn { border: none; border-radius: 10px; padding: 12px 16px; cursor: pointer; font-weight: 700; }
        .btn-primary { background: var(--accent); color: #0f172a; }
        .btn-secondary { background: rgba(255,255,255,0.08); color: #fff; border: 1px solid var(--border); }
        .badge { display: inline-block; padding: 6px 10px; border-radius: 999px; background: rgba(34, 197, 94, 0.15); color: #bbf7d0; margin-left: 6px; font-size: 0.85rem; }
        .stack { display: grid; gap: 10px; }
        .divider { border: none; border-top: 1px solid var(--border); margin: 18px 0; }
        .small { font-size: 0.9rem; color: var(--muted); }
        .inline { display: flex; gap: 8px; align-items: center; }
        .pill { padding: 6px 10px; border-radius: 8px; background: rgba(255,255,255,0.05); border: 1px solid var(--border); }
    </style>
</head>
<body>
    <header>
        <h1>لوحة التحكم - محتوى الصفحة الرئيسية</h1>
        <nav>
            <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">الرئيسية</a>
            <a href="{{ route('admin.hero') }}" class="{{ request()->routeIs('admin.hero') ? 'active' : '' }}">قسم البداية</a>
            <a href="{{ route('admin.about') }}" class="{{ request()->routeIs('admin.about') ? 'active' : '' }}">قسم من نحن</a>
            <a href="{{ route('admin.features.index') }}" class="{{ request()->routeIs('admin.features.*') ? 'active' : '' }}">الميزات</a>
            <a href="{{ route('admin.steps') }}" class="{{ request()->routeIs('admin.steps') ? 'active' : '' }}">قسم كيف نعمل</a>
            <a href="{{ route('admin.services') }}" class="{{ request()->routeIs('admin.services') ? 'active' : '' }}">قسم الخدمات</a>
            <a href="{{ route('admin.contact') }}" class="{{ request()->routeIs('admin.contact') ? 'active' : '' }}">قسم التواصل</a>
            <a href="{{ route('admin.footer.index') }}" class="{{ request()->routeIs('admin.footer.*') ? 'active' : '' }}">الفوتر</a>
            <a href="{{ route('admin.password') }}" class="{{ request()->routeIs('admin.password') ? 'active' : '' }}">تغيير كلمة المرور</a>
            <a href="{{ route('admin.logout') }}" style="background: rgba(239,68,68,0.12); border-color: rgba(239,68,68,0.5); color: #fecdd3;">تسجيل خروج</a>
        </nav>
    </header>
    <main>
        @if (session('status'))
            <div class="card" style="border-color: var(--accent); color: #eafff5;">
                {{ session('status') }}
            </div>
        @endif
        @yield('content')
    </main>
</body>
</html>
