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
                <form method="post" action="{{url('/edit', array($items->id))}}">
                    {{csrf_field()}}
                    <fieldset>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $items->title?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $items->description?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<br/>


@include('footer')