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
<h2>Personal Access Tokens</h2>
<form action="{{ url('/oauth/personal-access-tokens')}}" method="POST">
    <input type="text" name="name" >
    <input type="submit" value="Crear">
    {{ csrf_field() }}
</form>
