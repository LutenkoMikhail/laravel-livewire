<div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <th>{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                <td>
                    <button class="btn btn-success btn-sm">Edit Post</button>
                    <button class="btn btn-danger btn-sm">Delete Post</button>
                </td>
            </tr>
        @endforeach


        </tbody>
    </table>
</div>
