<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<h2>A basic HTML table</h2>

<table style="width:50%">
  <tr>
    <th>Sr.No.</th>
    <th>Email</th>
    <th>Password</th>
  </tr>
  @foreach ($product as $product  )
  <tr>

    <td>{{$product->id}}</td>
    <td>{{$product->email}}</td>
    <td>{{$product->password}}</td>
  </tr>
  @endforeach
</table>


</body>
</html>

