@extends('layouts.admin')

@section('title', 'Адмін: Редагувати кредит')
@section('page_title', 'Редагувати кредит')
@section('page_description', 'Оновлення параметрів кредитного продукту.')

@section('content')
<div class="form-card">
    @if($errors->any())
        <div style="margin-bottom: 20px; color: #b02a37; background: #f8d7da; padding: 14px; border-radius: 6px;">
            <ul style="margin: 0; padding-left: 20px;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.loans.update', $loan) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Назва кредиту</label>
        <input type="text" name="name" value="{{ old('name', $loan->name) }}" required>

        <label>Ставка</label>
        <input type="text" name="rate" value="{{ old('rate', $loan->rate) }}" required>

        <label>Термін</label>
        <input type="text" name="term" value="{{ old('term', $loan->term) }}" required>

        <label>Сума</label>
        <input type="text" name="amount" value="{{ old('amount', $loan->amount) }}" required>

        <div class="form-actions">
            <button type="submit">Оновити</button>
            <a href="{{ route('admin.loans.index') }}" class="secondary">Скасувати</a>
        </div>
    </form>
</div>
@endsection