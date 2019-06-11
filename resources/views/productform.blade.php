@extends('layouts.master')
@section('content')
     <div class="row">
                <div class="col-sm-6 offset-sm-3">
             @if($success)
                    
            <div class="clearfix">
                <br/>
                <div class="alert success">{{$success}}</div>
            </div>
        @endif

        <div class="jumbotron">
            {!!Form::open(['url'=>'/form', 'class'=>'form-horizontal']) !!}
                <div class="form-group">
                    {!! Form::label('productname', 'Product Name') !!}
                    <div class="clearfix">
                        {!! Form::text('productname', $value=null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('stockquentity', 'Quantity in stock') !!}
                    <div class="clearfix">
                        {!! Form::text('stockquentity', $value=null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('peritemprice', 'Price per item') !!}
                    <div class="clearfix">
                        {!! Form::text('peritemprice', $value=null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::submit('Save Product', ['class'=>'btn btn-medium btn-primary float-right']) !!}
                </div>
            {!! Form::close() !!}
        </div>

                </div>
            </div>
    @if($listproducts)
    <div class="row"><div class="col-sm-8 offset-sm-2">
        
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Product Name</th>
              <th scope="col">Quantity in stock</th>
              <th scope="col">Price per item</th>
              <th scope="col">Total</th>
              <th scope="col">Datetime</th>
            </tr>
          </thead>
          <tbody>
            @php
                $total = 0;
            @endphp
            @foreach($listproducts as $product)   
                <tr>
                  <td>{{$product->name}}</td>
                  <td>{{$product->stock}}</td>
                  <td>{{$product->price}}</td>
                  <td>{{$product->total}}</td>
                  <td>{{$product->date}}</td>
                </tr>
                @php
                    $total = $total + $product->total;
                @endphp
            @endforeach
          </tbody>
          <tfoot>
              <tr>
                <td colspan="3" align="right">
                    <b>Total: </b>
                </td>
                <td align="right">@php echo $total; @endphp</td>
                <td align="right"></td>
              </tr>
          </tfoot>
        </table></div></div>

    @endif

@endsection