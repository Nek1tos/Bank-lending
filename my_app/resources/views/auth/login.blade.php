<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div style="text-align: center; margin-bottom: 20px;">
        <h2 style="color: #009245; font-size: 24px; margin-bottom: 5px;">Увійти до аккаунту</h2>
        <p style="color: #666; font-size: 14px;">УкрБанк - видача кредитів онлайн</p>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div style="margin-bottom: 16px;">
            <label style="display: block; font-weight: 600; color: #333; margin-bottom: 6px;">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required autofocus style="width: 100%; padding: 10px 12px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;" />
            @error('email')
                <p style="color: #dc3545; font-size: 13px; margin-top: 4px;">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div style="margin-bottom: 16px;">
            <label style="display: block; font-weight: 600; color: #333; margin-bottom: 6px;">Пароль</label>
            <input type="password" name="password" required style="width: 100%; padding: 10px 12px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;" />
            @error('password')
                <p style="color: #dc3545; font-size: 13px; margin-top: 4px;">{{ $message }}</p>
            @enderror
        </div>

        <!-- Remember Me -->
        <div style="display: flex; align-items: center; margin-bottom: 16px;">
            <input type="checkbox" id="remember" name="remember" style="width: 16px; height: 16px; margin-right: 8px;">
            <label for="remember" style="font-size: 14px; color: #666;">Запам'ятати мене</label>
        </div>

        <!-- Buttons -->
        <div style="display: flex; gap: 10px; margin-bottom: 16px;">
            <button type="submit" style="flex: 1; background: #009245; color: white; padding: 10px; border: none; border-radius: 4px; font-size: 15px; font-weight: 600; cursor: pointer;">
                Увійти
            </button>
        </div>

        @if (Route::has('password.request'))
            <div style="text-align: center;">
                <a href="{{ route('password.request') }}" style="color: #009245; text-decoration: none; font-size: 14px;">
                    Забули пароль?
                </a>
            </div>
        @endif
    </form>

    <div style="text-align: center; margin-top: 20px; padding-top: 20px; border-top: 1px solid #ddd;">
        <p style="color: #666; margin-bottom: 10px; font-size: 14px;">Немаєте облікового запису?</p>
        <a href="{{ route('register') }}" style="display: inline-block; background: #009245; color: white; padding: 10px 28px; border-radius: 4px; text-decoration: none; font-size: 14px; font-weight: 600;">
            Створити аккаунт
        </a>
    </div>
</x-guest-layout>
