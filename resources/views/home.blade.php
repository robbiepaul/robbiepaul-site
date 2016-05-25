@extends('layouts.default')
@section('content')

    @include('layouts.partials.carousel', [
        'title' => 'Dashboard',
        'tagline' => "",
        'image' => '/build/images/error.jpg' ])

    <div id="page-content">

        <div class="container">
            <div class="row">

                <div class="col-md-10 col-md-offset-1">
                    <div class="pull-right">
                        <a href="/post/create" class="btn btn-primary">Add post</a>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Title / Description</th>
                                <th>Status</th>
                                <th>Preview</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                    <tbody>
                    @forelse ($last as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td><img src="/uploads/{{ $post->thumb }}" alt="" style="width:150px; height:auto"></td>
                            <td>
                                <strong>{{ $post->title }}</strong><br>
                                {{ $post->getDescription(160) }}
                            </td>
                            <td>
                                {{ $post->public == 1 ? 'Published' : 'Draft' }}
                            </td>
                            <td>
                                <a href="{{ $post->getUrl() }}" target="_blank">View</a>
                            </td>
                            <td>
                                <a href="/post/{{ $post->id }}/edit">Edit</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">
                                <p class="text-center">No recent posts</p>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                    </table>
                    {{ $last->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection


