{{--@extends('layouts.app')--}}

{{--@extends('layouts.onemetod')--}}
@extends('layouts.bootstrap')

@section('content')

    <div class="container">

        <div class="col-md-12">

{{--{{dump($order->owertimes)}}--}}
        </div>

        <div class="col-md-12">

            <div class="table-responsive">

                <table class="table table-striped">

                    <tr class="info"><a href="#">
                        <td class="info"> {{$order->id}} </td>
                        <td class="info"> {{$order->id_pu}} </td>
                        <td class="info"> {{$order->zone->zone}} </td>
                        <td class="info"> {{$order->status->status}} </td>
                        <td class="info">

                            @if($order->owertimes == null)
                                {{'Без выезда'}}
                            @else
                                {{'Выезда'}}
                            @endif

                        </td>
                        <td class="info">

                            @if($order->liveobjects == null)
                                {{'Без отключение'}}
                            @else
                                {{'Есть отключения'}}
                            @endif

                        </td>
                        <td class="info">

                            @if($order->disablewaternet == null)
                                {{'Без отключение'}}
                            @else
                                {{'Есть отключения'}}
                            @endif

                        </td>
                        <td class="info"> {{$order->categories->name}} </td>
                        <td class="info"> {{$order->types->type}} </td>
                        <td class="info"> {{$order->create_time}} </td>
                        <td class="info"> {{$order->start_time}} </td>
                        <td class="info"> {{$order->closed_time}} </td>
                        <td class="info"> {{$order->comment}} </td>
                        <td class="info"> {{$order->addres}} </td>
                        <td class="info">
                            @if($order->dds == 0)
                                {{'неотправлена'}}
                                @else
                                {{'отправлена'}}
                            @endif
                        </td>
                        </a></tr>
            </div>
        </div>

















@endsection