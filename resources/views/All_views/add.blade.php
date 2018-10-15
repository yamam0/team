

<table>
    <tr>
        <td>
            Email
        </td>
         <td>
            Password
        </td>
        <td>
            Adress
        </td>
         <td>
            City
        </td>
        <td>
            Country
        </td>
    </tr>

@foreach($info as $mypro)

 <tr>
        <td>
           {{$mypro->email}}
        </td>
         <td>
          {{$mypro->password}}
        </td>
        <td>
           {{$mypro->adress}}
        </td>
         <td>
          {{$mypro->city}}
        </td>
        <td>
          {{$mypro->country}}
        </td>
         <td>
             <a href="add/{{$mypro->id}}" >Delete</a>
        </td>
    </tr>

@endforeach

</table>