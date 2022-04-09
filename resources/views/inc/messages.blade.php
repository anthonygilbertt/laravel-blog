{{-- check for errors --}}
@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="animate-bounce ">
            {{$error}}
        </div>
    @endforeach
@endif

{{-- check for sessions --}}
@if(session('session'))
    <div class="animate-bounce ">
        {{session('success')}}
    </div>
@endif

{{-- check for session error --}}
@if(session('error'))
    <div class="animate-bounce ">
        {{session('error')}}
    </div>
@endif
