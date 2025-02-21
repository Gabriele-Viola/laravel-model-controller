<div class="card shadow">
    <div class="card-body">
        <h3>{{$title}}</h3>
        <h5>( {{$orgTitle}} )</h5>
        <p class="text-capitalize">{{$nationality}}</p>
        <p>{{$date}}</p>
        <div class="text-warning">{{$stars}}</div>
        <div >{{$vote}}</div>
    </div>
    {{$slot}}
</div>