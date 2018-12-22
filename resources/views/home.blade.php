@include('header')

<br/>
<div class="container">
    @if(session('info'))
        <div class="alert alert-dismissible alert-success">
            {{session('info')}}
        </div>
    @endif
    <div class="row">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @if(count($items) > 0)
                @foreach($items->all() as $items)
                <tr>
                    <td>{{$items->id}}</td>
                    <td>{{$items->title}}</td>
                    <td>{{$items->description}}</td>
                    <td>
                        <a href='{{url("/read/{$items->id}")}}' class="btn btn-sm btn-primary">Read</a>
                        <a href='{{url("/update/{$items->id}")}}' class="btn btn-sm btn-success">Update</a>
                        <a href='{{url("/delete/{$items->id}")}}' class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
</div>

@include('footer')

