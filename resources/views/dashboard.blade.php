<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-light leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class=" bg-gray-100 dark:bg-gray-900">
        @if (Session::has('message'))
            <p class="alert mx-3 alert-info">{{Session::get('message')}}</p>
        @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-gray-200" style="background-color:rgb(81, 93, 105)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-dark table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">NAME</th>
                                            <th scope="col">TITLE</th>
                                            <th scope="col">BODY</th>
                                            <th scope="col">ACTIONS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $post)
                                            <tr>
                                                <th scope="row">{{$post->user->name}}</th>
                                                <td>{{$post->title}}</td>
                                                <td>{{$post->body}}</td>
                                                <td>
                                                    <a href="{{url('/edit', $post->id)}}" class="btn btn-primary m-2">Edit</a>
                                                    <a href="{{url('/delete', $post->id)}}" onclick="return confirm('Are You Sure To Delete?')" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
