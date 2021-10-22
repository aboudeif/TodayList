
@extends('Layout.app')
@section('content')

    <div class="m-auto w-4/5 ">
        <div class="text-center">

            <h1 class="text-5xl uppercase bold">
                قائمة المهام
            </h1>
        </div>
        <div>
            <button type="button" class="bg-green-500 white block shadow-5xl mb-10 p-2 w-15
            uppercase font-bold" onclick="window.location='list/create';">
                إضافة
            </button>
        </div>
        @foreach ($tasks as $task)
        <div class="w-5/6 py-10">
            <div class="m-auto">

                <span class="text-green-500 font-bold text-xs uppercase">
                    وقت الإنشاء: {{ $task->created_at }}
                </span>

                <h2 class="text-gray-700 text-4xl">
                    {{ $task->name }}
                </h2>

                <p class="text-lg text-gray-700">
                    {{ $task->content }}
                </p>

                <hr class="mt-4 mb-8">

            </div>
        </div>
        @endforeach
    </div>
@endsection