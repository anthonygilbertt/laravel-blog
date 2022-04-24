@extends('layouts.app')

@section('content')

<div class="bg-white dark:bg-slate-900 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl">
  {{-- <div>
    <span class="inline-flex items-center justify-center p-2 bg-indigo-500 rounded-md shadow-lg">
      <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><!-- ... --></svg>
    </span>
  </div>
  <h3 class="text-slate-900 dark:text-white mt-5 text-base font-medium tracking-tight">Writes Upside-Down</h3>
  <p >
    The Zero Gravity Pen can be used to write in any orientation, including upside-down. It even works in outer space.
  </p> --}}

      <h2 class="text-2xl dark:text-gray-300 font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">{{$title}}</h2>

    @if(count($services) > 1)
        <ul>
            @foreach($services as $service)
                <li class="text-slate-500 dark:text-slate-400 mt-2 text-sm">{{$service}}</li>
            @endforeach
        </ul>
    @endif
</div>


@endsection
