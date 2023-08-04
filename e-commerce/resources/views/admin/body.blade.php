<h1>Orders</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">UserID</th>
      <th scope="col">ProductID</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($orders as $order )
    <tr>
        <th scope="row">{{$loop->iteration}}</th>
      <td>{{$order->user_id}}</td>
      <td>{{$order->product_id}}</td>
      <td>{{$order->total}}</td>
      <td>
          <form action="{{url("deleteorder/$order->id")}}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">delete</button>
          </form>
      </td>
  </tr>
  @endforeach

  </tbody>
</table>