@extends('Master')
@section('content')
<div class=" custom-product">
    <div class="col-sm-4">
        <table class="table table-hover">
            <!-- <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead> -->
            <tbody>
                <tr>
                    <td>Price</td>
                    <td>{{$total}} PKR</td>

                </tr>
                <tr>
                    <td>Tax</td>
                    <td>0</td>

                </tr>
                <tr>
                    <td>Delivery Charges</td>
                    <td>100</td>

                </tr>
                <tr>
                    <td>Total Amount </td>
                    <td>{{$total+100}} PKR</td>

                </tr>
            </tbody>
        </table>
        <br>
        <form action="">
            <div class="form-group">
                <textarea class="form-control"></textarea>
            </div>
            <div class="form-group">

                <label for="lname">Payment Method</label>
                <p><input type="radio" name="payment"> <span>Online Payment</span></p>
                <p><input type="radio" name="payment"> <span>EMI</span></p>
                <p><input type="radio" name="payment"> <span>Payment On Delivery</span></p>

            </div>

            <button class="btn btn-default" type="submit">Order Now</button>
        </form>
    </div>
</div>

@endsection