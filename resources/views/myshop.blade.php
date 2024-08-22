@extends('layouts.myapp')

@section('content')
    <div class = "row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>เกี่ยวกับร้าน IT SHOP</h2>
                </div>
                <div class="card-body">
                    <ul>
                        <li>ที่อยู่ : {{$address}}</li>
                        <li>เบอร์ : {{$mobilephone}}</li>
                        <li>ที่ตั้ง : {{$location}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection