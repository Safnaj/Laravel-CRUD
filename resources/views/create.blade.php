@include('header')

<br/>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-center-block">
            <legend>CREATE NEW</legend>
            @if(count($errors)>0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{$error}}
                    </div>
                @endforeach
            @endif
            <div class="box">
                <form method="post" action="{{url('/insert')}}">
                    {{csrf_field()}}
                    <fieldset>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Description">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<br/>


@include('footer')