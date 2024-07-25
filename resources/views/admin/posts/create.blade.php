<x-admin-master>
    @section('content')
        <h1>Create</h1>
        <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
            @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail">Title</label>
                <input type="text"
                       name="type"
                       class="form-control"
                       id="type"
                       aria-describedby="A Form"
                       placeholder="Enter Title!">
            </div>
            <div class="form-group">
                <label for="file">File</label>
                <input type="file"
                       name="post_image"
                       class="form-control-file"
                       id="post_image"
                >
            </div>
            <div class="form-group">
                <textarea name="body" id="body" class="form-control" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    @endsection
</x-admin-master>
