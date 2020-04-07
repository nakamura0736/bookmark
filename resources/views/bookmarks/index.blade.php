@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ブックマーク一覧</div>

                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>タイトル</th>
                      </tr>
                    </thead>
                    @foreach($bookmarks as $bookmark)
                      <tr>
                        <td>{{ $bookmark->id }}</td>
                        <td><a href="{{ $bookmark->id }}">{{ $bookmark->title }}</a></td>
                      </tr>
                    @endforeach
                  </table>
                  {{ $bookmarks->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
