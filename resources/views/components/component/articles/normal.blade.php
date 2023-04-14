<div onclick="selectItem('{{$itemId}}', {{$just}})" id="{{$itemId}}" class="clickable item">
    <img src="{{$images}}" alt="article banner">
    <h4>{{$name}}<br><span>{{$category}}</span></h4>
    @if ($sizel > 2 && $downloads !== "pistacho")
        <ul>
            <li><i class="fa fa-download"></i> {{$downloads}}</li>
        </ul>
    @endif
</div>
