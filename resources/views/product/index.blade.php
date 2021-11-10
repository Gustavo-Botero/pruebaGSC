@extends('layouts.plantilla')
@section('content')
    <div class="col-md-12 row">
        <div class="seleccion-productos col-md-4 row">
            <div class="cabsulaVenta col-md-12 row">
                <div class="tableSeleccion col-md-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">CANTIDAD</th>
                                <th scope="col">PRODUCTO</th>
                                <th scope="col">TAX</th>
                                <th scope="col">TOTAL</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="tBody">
                            
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12 totalProductos text-right row">
                    <hr>
                    <div class="col-md-6 totalMoneda">
                        <h1>TOTAL</h1>     
                    </div>
                    <div class="col-md-6 valorTotal">
                        <h1 class="valorTotalAcumulado">0</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-12 row">
                <div class="col-md-6 descuentoEmpleado">
                    <h1>DESCUENTO EMPLEADO</h1>
                </div>
                <div class="col-md-6 visitaCliente">
                    <h1>VISITA CLIENTE</h1>
                </div>
            </div>
            <div class="col-md-12 codigoPromocional">
                <h1>CÓDIGO PROMOCIONAL</h1>
            </div>
        </div>
        <div class="col-md-8 productos">
            <div class="col-md-12 productos row">
                <div class="navBar col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="collapse navbar-collapse" id="navbarNav">
                          <ul class="navbar-nav">
                            <li class="nav-item active">
                              <a class="nav-link" href="#">BEBIDAS</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">COMIDAS</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">REPOSTERÍA Y PANADERÍA</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">REFRIGERADOS</a>
                            </li>
                          </ul>
                        </div>
                    </nav>
                </div>
                <div class="listaProductos col-md-12 row">
                    @foreach ($products as $row)
                        <div class="col-md-3 row">
                            <div class="card col-md-12 row">
                                <img class="card-img-top" src="{{asset('dist/img/'. $row->image)}}" alt="Card image cap">
                                <div class="card-body col-md-12 row">
                                    <div class="col-md-12 nombreProducto">
                                        <h5 class="card-title"><strong> {{$row->name}} </strong></h5>
                                    </div>
                                    <div class="col-md-12 valorProducto">
                                        <small>{{$row->value}} CAD</small>
                                    </div>
                                    <div class="col-md-12 cantidadProducto">
                                        <small class="cantidadProducto{{$row->id}}">{{$row->amount[0]->amount}}</small>
                                    </div>
                                    <div class="agregar col-md-12 text-center">
                                        <button onclick="agregar('product{{$row->id}}')"
                                            data-route="{{route('product.show', $row->id)}}"
                                            class="btn btn-outline-success product{{$row->id}}">Agregar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-12 formaPago row">
                <div class="col-md-8 opcionPago row">
                    <div class="col-md-12 row">
                        <div class="col-md-4">
                            <img class="card-img-top" style="width: 150px" src="{{asset('dist/img/pngwing.com.png')}}" alt="Card image cap">
                        </div>
                        <div class="col-md-4">
                            <img class="card-img-top" style="width: 150px" src="{{asset('dist/img/visa.png')}}" alt="Card image cap">
                        </div>
                        <div class="col-md-4">
                            <img class="card-img-top" style="width: 150px" src="{{asset('dist/img/mastercard.png')}}" alt="Card image cap">
                        </div>
                    </div>
                    <div class="col-md-12 row">
                        <div class="col-md-4">
                            <img class="card-img-top" style="width: 150px" src="{{asset('dist/img/uber-eats.jpg')}}" alt="Card image cap">
                        </div>
                        <div class="col-md-4">
                            <img class="card-img-top" style="width: 150px" src="{{asset('dist/img/pngwing.com.png')}}" alt="Card image cap">
                        </div>
                        <div class="col-md-4">
                            <img class="card-img-top" style="width: 150px" src="{{asset('dist/img/pngwing.com.png')}}" alt="Card image cap">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pagar text-center">
                    <h1 class="mt-5" style="cursor: pointer">PAGAR</h1>
                </div>
            </div>
        </div>
    </div>
@endsection