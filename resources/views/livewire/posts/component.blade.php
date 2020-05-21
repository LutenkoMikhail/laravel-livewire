<div>
    @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    @if($updateMode)
        @include('livewire.posts.update')
    @else
        @include('livewire.posts.create')
    @endif
    <table class="table table-striped mt-3">
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
                    <button wire:click="edit({{$post->id}})" class="btn btn-success btn-sm">Edit Post</button>
                    <button wire:click="destroy({{$post->id}})" class="btn btn-danger btn-sm">Delete Post</button>
                </td>
            </tr>
        @endforeach


        </tbody>
    </table>
</div>
