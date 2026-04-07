@extends('layouts.admin')

@section('title', 'Адмін: Кредити')
@section('page_title', 'Адмін: Список кредитів')
@section('page_description', 'Управління кредитними продуктами УкрБанку.')
@section('hero_buttons')
    <a href="{{ route('admin.loans.create') }}">Додати кредит</a>
@endsection

@section('content')
@if(session('success'))
    <div class="form-card" style="margin-bottom: 20px; background: #e9f7ef; border-color: #009245;">
        <p style="color: #155724;">{{ session('success') }}</p>
    </div>
@endif

<div class="cards">
    @foreach($loans as $loan)
        <div class="card">
            <div class="icon">💳</div>
            <h3>{{ $loan->name }}</h3>
            <p>Ставка: <strong>{{ $loan->rate }}</strong></p>
            <p>Термін: <strong>{{ $loan->term }}</strong></p>
            <p>Сума: <strong>{{ $loan->amount }}</strong></p>
            <div class="button-row">
                <a href="{{ route('admin.loans.show', $loan) }}">Переглянути</a>
                <a href="{{ route('admin.loans.edit', $loan) }}" class="secondary">Редагувати</a>
                <form action="{{ route('admin.loans.destroy', $loan) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Видалити</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection