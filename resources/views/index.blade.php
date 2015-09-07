@extends('layouts/default')
@section('contenedor')
<div id="paginacionAjax">
    <table align="center">
        <tbody >

        @foreach($user as $us)
            <tr>
                <td>{!! $us->id !!}</td>
                <td>{!! $us->name !!}</td>
                <td>{!! $us->email !!}</td>

            </tr>

        @endforeach
        </tbody>
    </table>
    {!! $user->render() !!}

</div>



<script>
    $(window).on('hashchange',function(){
        page = window.location.hash.replace('#','');
        getProducts(page);
    });
    $(document).on('click','.pagination a', function(e){
        e.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        // getProducts(page);
        location.hash = page;
    });
    function getProducts(page){
        $.ajax({
            url: 'data?page=' + page
        }).done(function(data){
            $('#paginacionAjax').html(data);
        });
    }
</script>

@stop

