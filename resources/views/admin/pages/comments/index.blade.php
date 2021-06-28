@extends('layouts.admin')

@section('content_header')
    <h1>{{ __('Консоль - комментарии') }}</h1>
@stop

@section('layoutContent')
    <div class="row">
        <div class="col-12">
            <div class="card w-100 my-2">
                <div class="card-body p-0">
                    <table class="table table-responsive-xl">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 10px">{{ __('ID') }}</th>
                                <th class="text-center">{{ __('Комментарий') }}</th>
                                <th class="text-center w-10">{{ __('Автор') }}</th>
                                <th class="text-center w-10">{{ __('Дата создания') }}</th>
                                <th class="text-center w-10">{{ __('Опубликовано') }}</th>
                                <th class="text-center w-10">{{ __('Действия') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($comments as $comment)
                                <tr>
                                    <td class="text-center">{{ $comment->id }}</td>
                                    <td class="text-center min-w-px-200">
                                        <a href="{{ route('page.admin.comments.edit', ['comment_id' => $comment->id]) }}" class="link text-clamp-2">
                                            {{ strip_tags($comment->body) }}
                                        </a>
                                    </td>
                                    <td class="text-center text-nowrap">{{ $comment->user->name }}</td>
                                    <td class="text-center text-nowrap">{{ $comment->created_at }}</td>
                                    <td class="text-center">{{ $comment->is_published ? __('Да') : __('Нет') }}</td>
                                    <td class="text-center">
                                        <a
                                            href="{{ route('page.admin.comments.edit', ['comment_id' => $comment->id]) }}"
                                            class="btn btn-outline-primary btn-sm"
                                            title="{{ __('Редактировать') }}"
                                        >
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <button
                                            class="btn btn-outline-primary btn-sm "
                                            data-toggle="modal"
                                            data-target="#deleteConfirmModal"
                                            title="{{ __('Удалить') }}"
                                            data-href="{{ route('admin.comments.delete', ['comment_id' => $comment->id]) }}"
                                        >
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <p class="text">{{ __('Статей не найдено') }}</p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                @if($comments->hasPages())
                    <div class="card-footer px-3 pt-3 pb-0">
                        <div class="card-tools d-flex align-center justify-content-end">
                            {!! $comments->links('pagination::bootstrap-4') !!}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    @component('admin.components/delete-confirm-modal/wrap')
        @slot('title', __('Удаление комментария'))
        @slot('content')
            <p class="text">{!! __('Вы действительно хотите удалить этот комментарий?') !!}</p>
        @endslot
    @endcomponent
@endsection