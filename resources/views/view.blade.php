<div style="">
    <table style="border solid 2px black">
        <tr style="border solid 2px black">
            <th>Name</th>
            <th>Number</th>
            <th>Image</th>
        </tr>
        <tr style="border solid 2px black">
<td>{{ $find->name }}</td>
<td>{{ $find->number }}</td>
@if($find->image_path)
    <td><img src="{{ asset($find->image_path) }}" style="width: 150px;"></td>
@endif
        </tr>
    </table>

