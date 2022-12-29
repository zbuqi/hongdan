@extends('layouts')

@section('title', '这是世界杯列表页')
@section('pagename', 'match-list-page')

@section('content')
    <section class="match-list">
        <div class="list-head clearfix">
            <h1 class="title">世界杯</h1>
            <select class="pull-down form-control">
                <option value="2022赛季">2022赛季</option>
                <option value="2022赛季">2021赛季</option>
                <option value="2022赛季">2020赛季</option>
            </select>
            <a href="/">赛事回查 ></a>
        </div>
        <div class="list-main">
            <table class="table">
                <thead>
                    <tr>
                        <th>时间</th>
                        <th>赛事</th>
                        <th>状态</th>
                        <th></th>
                        <th>主队VS客队</th>
                        <th>
                            <div class="result">
                                <span>胜</span>
                                <span>平</span>
                                <span>负</span>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="6">
                            <div class="time">
                                <div class="on-off"><span>收起</span></div>
                                <span>2022-12-10</span>
                                <span>星期六</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>周六</td>
                        <td><a class="">世界杯</a></td>
                        <td>未开赛</td>
                        <td>12-10 23:00</td>
                        <td>
                            <div class="team clearfix">
                                <div class=""><span>[22]</span>摩洛哥</div>
                                <div><span>VS</span></div>
                                <div class="">摩洛哥<span>[9]</span></div>
                            </div>
                        </td>
                        <td>
                            <div class="result">
                                <span>0</span>
                                <span>0</span>
                                <span>0</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>周六</td>
                        <td><a class="btn">世界杯</a></td>
                        <td>未开赛</td>
                        <td>12-10 23:00</td>
                        <td>
                            <div class="team clearfix">
                                <div class=""><span>[22]</span>摩洛哥</div>
                                <div><span>VS</span></div>
                                <div class="">摩洛哥<span>[9]</span></div>
                            </div>
                        </td>
                        <td>
                            <div class="result">
                                <span>0</span>
                                <span>0</span>
                                <span>0</span>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection