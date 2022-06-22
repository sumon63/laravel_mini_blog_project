<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-light leading-tight">
            {{ __('Edit') }}
        </h2>
    </x-slot>

    <div class="container mt-3">
        <div class="pb-5" style="background-color:lightslategray">
            <form action="" method="POST">
                @csrf
                <div class="bg-dark p-3" style="color:aliceblue">Edit Post</div>
                <br>
                <div class="form-group px-5">
                    <label for="title">Title </label>
                    <input type="text" class="w-50% m-1 px-3" name="title" value="{{$post->title}}" class="form-control">
                </div>
                <br>
                <div class="form-group px-5">
                    <label for="body">Body</label>
                    <input type="textarea" class="w-50% py-4 px-3"  name="body" value="{{$post->body}}" class="form-control">
                </div>
                <br>
                <button class="btn btn-info px-3" style="margin-left: 88px" type="submit">Update</button>
            </form>
            @if (Session::has('message'))
                <p class="alert alert-info mt-5 mx-3">{{Session::get('message')}}</p>
            @endif
        </div>
    </div>

</x-app-layout>
