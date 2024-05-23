<table>
    <thead>
    <tr>
    <th>id</th>
        <th>Name</th> 
        <th>Father name</th>
        <th>Email</th>
        <th>Phone number</th>
        <th>city</th>
        <th>skills</th>   
        <th>experience</th>   
        <th>Applied Date</th>
        
      
    </tr>
    </thead>
    <tbody>
    @foreach($export_info as $row)
        <tr>
             <td>{{ $row->id }}</td>
            <td>{{ $row->{'name'} }}</td>
            <td>{{ $row->{'Father name'} }}</td>
            <td>{{ $row->{'email'} }}</td>
            <td>{{ $row->{'Phone number'} }}</td>
            <td>{{ $row->{'city'} }}</td>
            <td>{{ $row->{'skills'} }}</td>
            <td>{{ $row->{'experience'} }}</td>
            <td>{{ $row->experience }}</td>
            <td>{{ \Carbon\Carbon::parse($row->created_at)->format('d/m/y/') }}</td>
        </tr>
    @endforeach
    </tbody>
</table>