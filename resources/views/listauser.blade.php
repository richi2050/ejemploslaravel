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