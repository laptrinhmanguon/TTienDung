<html>
    <body>
        <h1>Welcome</h1>
        <h1>Tên của bạn là: {{$ten}}</h1>
        <h1>Tuổi của bạn là: {{$tuoi}}</h1>
        <h1>
            @if($tuoi>=18)
                Bạn đã đủ tuổi xem phim
            @else
                Bạn chưa đủ 18 Tuổi
            @endif
        </h1>
    </body>
</html>