@extends('layout')
@section('title')
    Ưu Đãi VIP
@endsection

@section('content')
    <h3>Chính sách VIP</h3>
    <p>Mỗi khi sử dụng Dcoin để mua hàng khách hàng sẽ nhận được một điểm tích lũy.
        Khi đạt đủ số điểm tích lũy, tài khoản của quý khách sẽ được tự động nâng cấp thành
        các cấp VIP tương ứng</p>

    <table class="table table-striped-columns">

        <thead>
            <tr>
                <th scope="col"> Ưu đãi</th>
                <th scope="col">ĐỒNG - BẠC</th>
                <th scope="col">VÀNG</th>
                <th scope="col"> KIM CƯƠNG</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"> Tỷ lệ Cashback</th>
                <td>1%</td>
                <td> 2%</td>
                <td>3%</td>
            </tr>
            <tr>
                <th scope="row"> Ưu tiên khi đông khách</th>
                <td>✔</td>
                <td>✔</td>
                <td>✔</td>
            </tr>
            <tr>
                <th scope="row"> Số điểm cần tích lũy để đạt hạng VIP</th>
                <td>3.000.000 - 49.999.999</td>
                <td>50.000.000 - 199.999.999</td>
                <td> 200.000.000</td>
            </tr>
        </tbody>

    </table>
    <div class="alert alert-danger" role="alert">
        LƯU Ý:
        Điểm tích lũy là tổng Dcoin dùng để mua hàng được tính từ ngày bắt đầu triển khai dịch vụ VIP
        12-12-2017
    </div>


    <div class="alert alert-warning" role="alert">
        Divine Shop có quyền điều chỉnh chính sách ưu đãi cho VIP tùy theo từng
        thời điểm mà không cần thông báo trước.

    </div>
@endsection
