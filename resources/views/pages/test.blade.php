@include('header')
<div style="margin-top: 200px">
    TEST

    <input type="file" name="test">
    <p>
</p>
    <img src="{{'data:image/'.$ext.';base64,'.$test}}" width="100px" height="100px" >

    {{--    <img href="{{asset('storge/'.$image)}}" width="100px" height="100px" >--}}
</div>
@include('footer')
