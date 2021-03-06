@if (session()->has('success') || session()->has('error'))
    @if (session()->has('success'))
        @include('admin.components/notifications/item', [
            'text' => session()->get('success'),
            'class' => 'success'
        ])
    @elseif(session()->has('error'))
        @include('admin.components/notifications/item', [
            'text' => session()->get('error'),
            'class' => 'danger'
        ])
    @endif
@endif
