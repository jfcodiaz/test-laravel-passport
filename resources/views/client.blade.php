<form action="{{url('oauth/clients')}}" method="POST">
    <input name="name"/>
    <input name="redirect"/>
    <input type="submit"/>
    {{ csrf_field() }}
</form>


<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Redirect</th>
            <th>Secret</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clients as $client)
        <tr>
            <td>{{ $client->id }}</td>
            <td>{{ $client->name }}</td>
            <td>{{ $client->redirect}}</td>
            <td>{{ $client->secret }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
