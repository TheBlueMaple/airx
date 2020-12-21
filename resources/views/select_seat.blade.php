<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AIRX - Best Service Airlines</title>

    <link rel="stylesheet" href="/css/frame.css">
    <link rel="stylesheet" href="/css/default.css">
    <link rel="stylesheet" href="/css/formpage.css">
    <link rel="stylesheet" href="/css/select_seat.css">
    <script src="/js/jquery-3.1.1.js"></script>

    <style>
        .left img {
            height: 295px;
            width: 100%;
            object-fit: cover;
            object-position: 0 -360px;
        }

        .seat {
            position: absolute;
            width: 16px;
            height: 12px;
            border-radius: 3px;
            cursor: pointer;
        }

        .seat:hover {
            background-color: rgba(0, 161, 222, 0.4);
        }

        .seat.selected {
            background-color: rgba(0, 161, 222, 0.6);
        }

        .active .seat.selected {
            cursor: not-allowed;
        }

        .seat.occupied {
            background-color: rgba(255, 40, 0, 0.6);
            cursor: not-allowed;
        }

    </style>

</head>
<body>
<header>
    <div class="wrapper">
        <a href="/"><img src="/images/airx_logo.png" alt="logo" class="logo"></a>
        <nav>
            <ul class="cl-dk">
                <li><a href="javascript:history.go(-1)"><< Cancel</a></li>
            </ul>
        </nav>
    </div>
</header>
<main class="bg-eee">
    <div class="wrapper">
        <div class="content-container bg-wt br-sm">
            <div class="title-line">
                <b class="cl-md fz-24 bg-wt">Select Seat</b>
            </div>
            <div class="info-content">
                <div class="left">
                    @if($flight['type']=='300ER')
                        <img src="/images/300ER_appearance.jpg" alt="plane structure">
                    @elseif($flight['type']=='A320')
                        <img src="/images/A320_appearance.jpg" alt="plane structure">
                    @endif
                    <div class="seat-layer">

                        <div class="seat occupied" style="top:54px;left:134px;"
                             data-id="32"
                             data-row="11"
                             data-col="A"
                        ></div>

                        <div class="seat occupied" style="top:50px;left:151px;"
                             data-id="33"
                             data-row="11"
                             data-col="C"
                        ></div>

                        <div class="seat " style="top:50px;left:192px;"
                             data-id="34"
                             data-row="11"
                             data-col="D"
                        ></div>

                        <div class="seat " style="top:54px;left:210px;"
                             data-id="35"
                             data-row="11"
                             data-col="H"
                        ></div>

                        <div class="seat " style="top:50px;left:256px;"
                             data-id="34"
                             data-row="11"
                             data-col="J"
                        ></div>

                        <div class="seat " style="top:54px;left:272px;"
                             data-id="35"
                             data-row="11"
                             data-col="L"
                        ></div>

                        <div class="seat " style="top:84px;left:134px;"
                             data-id="36"
                             data-row="12"
                             data-col="A"
                        ></div>

                        <div class="seat " style="top:81px;left:151px;"
                             data-id="37"
                             data-row="12"
                             data-col="C"
                        ></div>

                        <div class="seat " style="top:81px;left:192px;"
                             data-id="38"
                             data-row="12"
                             data-col="D"
                        ></div>

                        <div class="seat " style="top:84px;left:210px;"
                             data-id="39"
                             data-row="12"
                             data-col="H"
                        ></div>

                        <div class="seat " style="top:81px;left:256px;"
                             data-id="40"
                             data-row="12"
                             data-col="J"
                        ></div>

                        <div class="seat " style="top:84px;left:272px;"
                             data-id="41"
                             data-row="12"
                             data-col="L"
                        ></div>

                        <div class="seat " style="top:114px;left:134px;"
                             data-id="42"
                             data-row="13"
                             data-col="A"
                        ></div>

                        <div class="seat " style="top:111px;left:151px;"
                             data-id="43"
                             data-row="13"
                             data-col="C"
                        ></div>

                        <div class="seat " style="top:111px;left:192px;"
                             data-id="44"
                             data-row="13"
                             data-col="D"
                        ></div>

                        <div class="seat " style="top:114px;left:210px;"
                             data-id="45"
                             data-row="13"
                             data-col="H"
                        ></div>

                        <div class="seat " style="top:111px;left:256px;"
                             data-id="46"
                             data-row="13"
                             data-col="J"
                        ></div>

                        <div class="seat " style="top:114px;left:272px;"
                             data-id="47"
                             data-row="13"
                             data-col="L"
                        ></div>

                        <div class="seat " style="top:144px;left:134px;"
                             data-id="48"
                             data-row="14"
                             data-col="A"
                        ></div>

                        <div class="seat " style="top:141px;left:151px;"
                             data-id="49"
                             data-row="14"
                             data-col="C"
                        ></div>

                        <div class="seat " style="top:141px;left:192px;"
                             data-id="50"
                             data-row="14"
                             data-col="D"
                        ></div>

                        <div class="seat " style="top:144px;left:210px;"
                             data-id="51"
                             data-row="14"
                             data-col="H"
                        ></div>

                        <div class="seat " style="top:141px;left:256px;"
                             data-id="52"
                             data-row="14"
                             data-col="J"
                        ></div>

                        <div class="seat " style="top:144px;left:272px;"
                             data-id="53"
                             data-row="14"
                             data-col="L"
                        ></div>

                        <div class="seat " style="top:174px;left:134px;"
                             data-id="54"
                             data-row="15"
                             data-col="A"
                        ></div>

                        <div class="seat " style="top:171px;left:151px;"
                             data-id="55"
                             data-row="15"
                             data-col="C"
                        ></div>

                        <div class="seat " style="top:171px;left:192px;"
                             data-id="56"
                             data-row="15"
                             data-col="D"
                        ></div>

                        <div class="seat " style="top:174px;left:210px;"
                             data-id="57"
                             data-row="15"
                             data-col="H"
                        ></div>

                        <div class="seat " style="top:171px;left:256px;"
                             data-id="58"
                             data-row="15"
                             data-col="J"
                        ></div>

                        <div class="seat " style="top:174px;left:272px;"
                             data-id="59"
                             data-row="15"
                             data-col="L"
                        ></div>

                        <div class="seat " style="top:204px;left:134px;"
                             data-id="60"
                             data-row="16"
                             data-col="A"
                        ></div>

                        <div class="seat " style="top:201px;left:151px;"
                             data-id="61"
                             data-row="16"
                             data-col="C"
                        ></div>

                        <div class="seat " style="top:201px;left:192px;"
                             data-id="62"
                             data-row="16"
                             data-col="D"
                        ></div>

                        <div class="seat " style="top:204px;left:210px;"
                             data-id="63"
                             data-row="16"
                             data-col="H"
                        ></div>

                        <div class="seat " style="top:201px;left:256px;"
                             data-id="64"
                             data-row="16"
                             data-col="J"
                        ></div>

                        <div class="seat " style="top:204px;left:272px;"
                             data-id="65"
                             data-row="16"
                             data-col="L"
                        ></div>

                        <div class="seat " style="top:236px;left:134px;"
                             data-id="1060"
                             data-row="17"
                             data-col="A"
                        ></div>

                        <div class="seat " style="top:231px;left:151px;"
                             data-id="1061"
                             data-row="17"
                             data-col="C"
                        ></div>

                        <div class="seat " style="top:231px;left:192px;"
                             data-id="1062"
                             data-row="17"
                             data-col="D"
                        ></div>

                        <div class="seat " style="top:235px;left:210px;"
                             data-id="1063"
                             data-row="17"
                             data-col="H"
                        ></div>

                        <div class="seat " style="top:231px;left:256px;"
                             data-id="1064"
                             data-row="17"
                             data-col="J"
                        ></div>

                        <div class="seat " style="top:235px;left:272px;"
                             data-id="1065"
                             data-row="17"
                             data-col="L"
                        ></div>
                    </div>
                    <p class="ta-lt cl-wt fz-20 hint-text">Select a seat.
                        <button class="bt-lt br-sm btn-ok">OK</button>
                    </p>
                </div>
                <div class="right cl-dk">
                    <p class="fz-24 fw-bd">Flight <em>{{$flight['no']}}</em></p>
                    <p class="fz-24 model-info">
                        <b class="cl-wt bg-bl fz-8p br-sm pd-hz">{{$flight['type']}}</b>
                        <span class="bg-lt br-sm fz-8p ta-ct tt-cp flight-class">
                            {{$flight['class_type']}}
                        </span>
                    </p>
                    <div class="guest-list fz-18">
                        @foreach($tickets as $index=>$ticketID)
                        <div class="guest flex" data-id="{{$ticketID}}">
                            <div class="guest-name">{{$guests[$index]}}</div>
                            <div class="selected-seat cl-gr">
                                Please select a seat.
                            </div>
                            <div class="select-button ct-ctn">
                                <button class="bt-lt br-sm ct-ele">Select</button>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <p class="cl-gr fz-16">Please confirm all the information before you continue.</p>
                    <form class="fz-18 submit" action="/">
                        <p>
                            <button class="bt-lt br-sm">SUBMIT ></button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    $(function () {

        $('.select-button>button').click(function (e) {
            $('.left').toggleClass('active');
        });

        $('.btn-ok').click(function (e) {
            $('.left').removeClass('active');
            $('.selected.guest').removeClass('selected');
        });

        $('.seat').click(function (e) {
            e.stopPropagation();
            var t = $(this);
            var left = $('.left');
            if (t.hasClass('occupied') || !left.hasClass("active")) {
                return;
            }
            t.toggleClass('selected');
        });
    });
</script>
<footer>
    <div class="wrapper fz-18 cl-dk">
        <img src="/images/co2zer_icon.png" alt="co2zer">
        <a href="/">www.skyteam.com</a>
        <a href="/">www.airx.com</a>
    </div>
</footer>
</body>
</html>