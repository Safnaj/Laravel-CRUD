@include('header')

<div class="container">
    <br/>
    <div class="row">
        <h2>{{$items->title}}</h2>
    </div>
    <div class="row">
        <p class="lead">{{$items->description }}</p>
    </div>
</div>

@include('footer')